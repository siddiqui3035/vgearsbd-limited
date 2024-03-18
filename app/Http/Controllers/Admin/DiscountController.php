<?php

namespace App\Http\Controllers\Admin;

use App\Models\Discount;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;

class DiscountController extends Controller
{
    public function index()
    {
        $data['discounts'] = Discount::get();

        return view('admin.discount.index', $data);
    }

    public function create()
    {
        return view('admin.discount.create');
    }

    public function store(StoreDiscountRequest $request, Discount $discount)
    {
        $data = $request->validated();

        if (!empty($discount->create($data))) {
            Alert::success('Success', 'Product discount Created Successfully.');
            return redirect()->route('discounts.index');
        }
        Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
    }

    public function show(Discount $discount)
    {
        //
    }

    public function edit(Discount $discount)
    {
        $data['discount'] = $discount;

        return view('admin.discount.edit', $data);
    }

    public function update(UpdateDiscountRequest $request, Discount $discount)
    {
        $data = $request->validated();

        if (!empty($discount->update($data))) {
            Alert::success('Success', 'Product Discount Updated Successfully.');
            return redirect()->route('discounts.index');
        }
        Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
    }

    public function destroy(Discount $discount)
    {
        if($discount->delete()){
            Alert::success('Success', 'Discount Deleted Successfully.');
            return redirect()->back();
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
