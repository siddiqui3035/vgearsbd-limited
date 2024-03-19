<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::orderBy('created_at', 'desc')->get();

        return view('admin.products.index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::pluck('name', 'id');
        $data['brands'] = Brand::pluck('name', 'id');
        $data['units'] = Unit::where('base_unit', 1)->pluck('name', 'id');

        return view('admin.products.create', $data);
    }

    public function fetchPurcahseUnit(Request $request)
    {
        $unit = Unit::find($request->purchase_unit_id);
        $data['purcahseUnits'] = Unit::where("unit_type", $unit->name)->get(["name", "id"]);
        return response()->json($data);
    }

    public function store(StoreProductRequest $request)
    {
        $path = "";
        if ($request->hasFile('thumble')) {
            $path = $request->file('thumble')->store('images/products');
        }

        $imageNames = [];
        
        if ($request->hasFile("images")) {
            foreach($request->file('images') as $file) {
                $imageNames[] = $file->store("images/products");
            }
        }

        $product = Product::create([
            "category_id" => $request->get("category_id"),
            "brand_id" => $request->get("brand_id"),
            "unit_id" => $request->get("unit_id"),
            "purchase_unit_id" => $request->get("purchase_unit_id"),
            "sale_unit_id" => $request->get("sale_unit_id"),
            "name" => $request->get("name"),
            "product_code" => $request->get("product_code"),
            "qty" => $request->get("qty"),
            "purchase_price" => $request->get("purchase_price"),
            "sale_price" => $request->get("sale_price"),
            "details" => $request->get("details"),
            "packaging_type" => $request->get("packaging_type"),
            'thumble' => $path,
            'images' => $imageNames,
        ]);

        if (empty($product)) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'Product Created Successfully.');
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        $data["product"] = $product->with([
            "category",
            "brand",
            "salesUnit",
            "purchaseUnit",
            "productUnit"
        ])
            ->firstWhere("id", $product->id);

        return view("admin.products.show", $data);
    }

    public function edit(Product $product)
    {
        $data['categories'] = Category::pluck('name', 'id');
        $data['brands'] = Brand::pluck('name', 'id');
        $data['units'] = Unit::where('base_unit', 1)->pluck('name', 'id');
        $data['product'] = $product;

        return view('admin.products.edit', $data);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $images = json_decode($product->getRawOriginal('images'), true);
        if($request->has('deleted_images') && count($request->get('deleted_images'))) {
            $files = $request->get('deleted_images');
            foreach($files as $file) {
                $deleteImages[] = substr($file, 8);
            }

            Storage::delete($deleteImages);
            $images = array_diff($images, $deleteImages);
        }

        if($request->hasFile('images')) {
            foreach($request->file('images') as $file) {
                $images[] = $file->store('images/product');
            }
        }

        if ($request->hasFile('thumble')) {
            if ($product->thumble) {
                Storage::delete($product->thumble);
            }
            $fileName = Str::snake($request->get('name')) . '.' . $request->file('thumble')->getClientOriginalExtension();
            $product->thumble = Storage::putFileAs('images/products', $request->file('thumble'), $fileName);
        }

        $allproducts = $request->only([
            "category_id",
            "brand_id",
            "unit_id",
            "purchase_unit_id",
            "sale_unit_id",
            "name",
            "product_code",
            "qty",
            "purchase_price",
            "sale_price",
            "details",
            "packaging_type",
        ]);
        $allproducts['images'] = $images;

        if (empty($product->update($allproducts))) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'Product Updated Successfully.');
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $images = json_decode($product->getRawOriginal("images"));

        if ($product->delete()) {
            if ($images) {
                foreach ($images as $img) {
                    Storage::delete('images/products' . $img);
                }
            }
            Alert::success('Success', 'Product Deleted Successfully.');
            return redirect()->back();
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}