<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::select(['id', 'parent_id', 'name', 'status'])
            ->where('parent_id', null)
            ->orderByDesc('id')
            ->get();

        return view('admin.categories.index', $data);
    }

    public function create()
    {
        $data['parentCategories'] = Category::select(['id', 'parent_id', 'name', 'status'])
            ->where('parent_id', null)
            ->where('status', 0)
            ->get();

        return view('admin.categories.create',$data);
    }

    public function store(StoreCategoryRequest $request)
    {
        $redirectRoute = 'categories.index';
        $storeData['name'] = $request->get('name');
        $storeData['user_id'] = auth()->id();
        if ($request->get('parent_id') != null) {
            $storeData['parent_id'] = $request->get('parent_id');
            $redirectRoute = 'admin.subcategories.index';
        }

        if(Category::create($storeData)){
            Alert::success('Success', 'Product category created successfully.');
            return redirect()
                ->route($redirectRoute);
        }

        Alert::error('Error', 'Something wrong!');
        return redirect()->back()->withInput();
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        $data['category'] = $category;
        $data['parentCategories'] = Category::select(['id', 'parent_id', 'name', 'status'])
            ->where('parent_id', null)
            ->where('status', 0)
            ->get();

        return view('admin.categories.edit',$data);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $redirectRoute = 'categories.index';
        $storeData['name'] = $request->get('name');
        if ($request->get('parent_id') != null) {
            $storeData['parent_id'] = $request->get('parent_id');
            $redirectRoute = 'admin.subcategories.index';
        }

        if($category->update($storeData)){
            Alert::success('Success', 'Product category updated successfully.');
            return redirect()
                ->route($redirectRoute);
        }

        Alert::error('Error', 'Something wrong!');
        return redirect()->back()->withInput();
    }

    public function destroy(Category $category)
    {
        if($category->delete()){
            Alert::success('Success', 'Product category deleted successfully.');
            return redirect()->back();
        }

        Alert::error('Error', 'Something wrong!');
        return redirect()->back();
    }
}
