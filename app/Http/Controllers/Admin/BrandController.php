<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Brand;
use RuntimeException;
use Illuminate\Support\Str;
use App\Http\Requests\BrandRequest;
use App\Services\FileUploadService;
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

    public function store(BrandRequest $request)
    {

        try {
            $params = $request->only(['name']);

            if ($request->hasFile('image')) {
                $filePath = config('commonconfig.brand_image');
                $fileName = Str::snake($request->get('name'));
                $params['image'] = app(FileUploadService::class)
                    ->upload($request->file('image'), $filePath, $fileName, '', '', 'public');
                if (!$params['image']) {
                    throw new RuntimeException(__('Failed to upload image.'));
                }
            }

            if (!Brand::create($params)) {
                throw new RuntimeException(__('Failed to create brand.'));
            }
        } catch (Exception $e) {
            logs()->error($e);
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

    public function update(BrandRequest $request, Brand $brand)
    {
        try {
            $params = $request->only(['name']);
            if ($request->hasFile('image')) {
                $filePath = config('commonconfig.brand_image');
                $fileName = Str::snake($request->get('name'));
                $params['image'] = app(FileUploadService::class)
                    ->upload($request->file('image'), $filePath, $fileName, '', '', 'public');
                if (!$params['image']) {
                    throw new RuntimeException(__('Failed to upload image.'));
                }
            }

            if (!$brand->update($params)) {
                throw new RuntimeException(__('Failed to update brand.'));
            }
        } catch (Exception $e) {
            logs()->error($e);
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
