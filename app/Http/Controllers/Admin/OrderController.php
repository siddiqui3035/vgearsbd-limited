<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    public function index()
    {
        $data['orders'] = Order::with('product.salesUnit:id,name')->get();
        $data['statuses'] = ['pending', 'processing', 'shipped', 'delivered'];
        return view('admin.orders.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(OrderRequest $request)
    {
        DB::beginTransaction();
        try {
            $carts = Cart::with('product')->get();
            $addresses = Address::firstOrCreate(['user_id' => auth()->user()->id], [
                'address' => $request->get('address'),
                'city' => $request->get('city'),
                'country' => $request->get('country'),
                'postal_code' => $request->get('postal_code'),
            ]);

            $totalAmount = 0;
            foreach ($carts as $cartItem) {
                $totalAmount += $cartItem->product->sale_price * $cartItem->product_qty;

                $order = new Order();
                $order->user_id = auth()->user()->id;
                $order->address_id = $addresses->id;
                $order->product_id = $cartItem->product->id; // Assuming product id is accessed like this
                $order->order_number = 'VG' . random_string();
                $order->product_qty = $cartItem->product_qty;
                $order->product_price = $cartItem->product->sale_price;
                $order->total_price = $totalAmount;
                $order->payment_method = $request->get('payment_method');
                $order->save();

                $cartItem->delete();
            }

            DB::commit();
            Alert::success('Success', 'Your order placed Successfully.');
            return redirect()->route('home');
        } catch (Exception $e) {
            logs()->error($e);
            DB::rollBack();
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function show(Order $order)
    {

        $data['order'] = $order->load([
            'user:id,first_name,last_name,phone',
            'product.salesUnit:id,name',
            'product.brand:id,name',
            'product.category:id,name',
            'product.purchaseUnit:id,name',
        ]);
        
        return view('admin.orders.show', $data);
    }

    public function updateStatus(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered',
        ]);

        $order->status = $validatedData['status'];
        $order->save();

        Alert::success('Success', 'Your order placed Successfully.');
            return redirect()->route('home');
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}
