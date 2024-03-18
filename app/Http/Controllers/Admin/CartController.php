<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function index()
    {
        $data['carts'] = Cart::with('product')->get();

        // dd($data);
        return view('frontend.cart',$data);
    }

    public function create()
    {
        return view('frontend.cart');
    }

    public function store(StoreCartRequest $request)
    {
        $cart = Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $request->input('product_id'),
            'product_qty' => $request->input('product_qty'),
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

    public function update(UpdateCartRequest $request, Cart $cart)
    {
        $cart->update([
            'product_qty' => $request->input('product_qty'),
        ]);

        return response()->json($cart);
    }

    public function destroy(Cart $cart)
    {
        // $cart->delete();

        if($cart->delete()){
            Alert::success('Success', 'Product removed successfully.');
            return redirect()->back();
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
