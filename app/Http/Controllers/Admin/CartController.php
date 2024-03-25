<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Requests\UpdateCartRequest;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function index()
    {
        $data['carts'] = Cart::with('product')->get();

        return view('frontend.cart', $data);
    }

    public function create()
    {
        return view('frontend.cart');
    }

    public function store(CartRequest $request)
    {
        $existingCart = Cart::where('user_id', auth()->id())
            ->where('product_id', $request->get('product_id'))
            ->first();

        if ($existingCart) {
            $existingCart->increment('product_qty', $request->get('product_qty'));

            Alert::success('Success', 'Product quantity updated successfully.');
            return redirect()->route('cart.index');
        }

        $cart = Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $request->get('product_id'),
            'product_qty' => $request->get('product_qty'),
        ]);

        if (!empty($cart)) {
            Alert::success('Success', 'Product added successfully.');
            return redirect()->route('cart.index');
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }

    public function show(Cart $cart)
    {
        return view('cart.show');
    }

    public function edit(Cart $cart)
    {
        $data['cart'] = $cart;
        return view('cart.edit', $data);
    }

    public function update(CartRequest $request, Cart $cart)
    {
        $cart->update([
            'product_qty' => $request->input('product_qty'),
        ]);

        return response()->json($cart);
    }

    public function destroy(Cart $cart)
    {
        // $cart->delete();

        if ($cart->delete()) {
            Alert::success('Success', 'Product removed successfully.');
            return redirect()->back();
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
