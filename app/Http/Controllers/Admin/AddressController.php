<?php

namespace App\Http\Controllers\Admin;

use App\Models\Address;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;

class AddressController extends Controller
{
    public function index()
    {
        $data['addresses'] = Address::all();

        return view('admin.user-address.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(StoreAddressRequest $request)
    {

        $address = Address::create([
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal_code' => $request->get('postal_code'),
            'user_id' => auth()->user()->id,
        ]);

        if (empty($address)) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'Address Added Successfully.');
        return redirect()->back();
    }

    public function show(Address $address)
    {
        //
    }

    public function edit(Address $address)
    {
        $data['address'] = $address;
        return view('frontend.my-address', $data);
    }

    public function update(UpdateAddressRequest $request, Address $address)
    {
        $data = $request->validated();

        if (empty($address->update($data))) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'Address Updated Successfully.');
        return redirect()->route('my.account');
    }

    public function destroy(Address $address)
    {
        if($address->delete()){
            Alert::success('Success', 'Address Deleted Successfully.');
            return redirect()->back();
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
