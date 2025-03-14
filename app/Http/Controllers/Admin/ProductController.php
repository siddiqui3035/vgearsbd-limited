<?php

namespace App\Http\Controllers\Admin;

use Exception;
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
        try {
            $path = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $path[] = $file->store('images/products/images');
                }
            }

            $thumblePath = "";
            if ($request->hasFile('thumble')) {
                $thumblePath = $request->file('thumble')->store('images/products/thumble');
            }

            $params = $request->only([
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
                "packaging_type"
            ]);

            $params['images'] = $path;
            $params['thumble'] = $thumblePath;

            if (!Product::create($params)) {
                throw new Exception(__('Failed to create product.'));
            }
        } catch (Exception $e) {
            logs()->error($e);
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
        $data['images'] = json_decode($product->getRawOriginal('images'));

        return view('admin.products.edit', $data);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $images = json_decode($product->getRawOriginal('images'), true);
        if ($request->has('deleted_images') && count($request->get('deleted_images'))) {
            $files = $request->get('deleted_images');
            foreach ($files as $file) {
                $deleteImages[] = substr($file, 8);
            }

            Storage::delete($deleteImages);
            $images = array_diff($images, $deleteImages);
        }

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $images[] = $file->store('images/products/images');
            }
        }

        if ($request->hasFile('thumble')) {
            if ($product->thumble) {
                Storage::delete($product->thumble);
            }
            $fileName = Str::snake($request->get('name')) . '.' . $request->file('thumble')->getClientOriginalExtension();
            $product->thumble = Storage::putFileAs('images/products', $request->file('thumble'), $fileName);
        }

        $thumblePath = "";
        if ($request->hasFile('thumble')) {
            if ($product->thumble) {
                Storage::delete($product->thumble);
            }
            $thumblePath = $request->file('thumble')->store('images/products/thumble');
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
        $allproducts['thumble'] = $thumblePath;

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
