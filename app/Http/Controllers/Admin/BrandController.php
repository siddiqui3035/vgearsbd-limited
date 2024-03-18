<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBrandRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateBrandRequest;

class BrandController extends Controller
{
    public function index()
    {
        $data['brands'] = Brand::orderBy('created_at', 'desc')->get();

        return view('admin.brands.index', $data);
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(StoreBrandRequest $request)
    {
        $path = "";
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/brands');
        }

        $banner = Brand::create([
            'name' => $request->get('name'),
            'image' => $path,
        ]);

        if (empty($banner)) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'Brand Created Successfully.');
        return redirect()->route('brands.index');
    }

    public function show(Brand $brand)
    {
        $data['brand'] = $brand;
        return view('admin.brands.show', $data);
    }

    public function edit(Brand $brand)
    {
        $data['brand'] = $brand;
        return view('admin.brands.edit', $data);
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($brand->image) {
                Storage::delete($brand->image);
            }
            $data['image'] = $request->file('image')->store('images/brands');
        }

        if (empty($brand->update($data))) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'Brand Updated Successfully.');
        return redirect()->route('brands.index');
    }

    public function destroy(Brand $brand)
    {
        if($brand->image){
            Storage::delete($brand->image);
        }

        if($brand->delete()){
            Alert::success('Success', 'Brand Deleted Successfully.');
            return redirect()->back();
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
