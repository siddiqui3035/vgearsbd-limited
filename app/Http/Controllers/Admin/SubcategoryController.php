<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function __invoke(Request $request)
    {
        $data['subcategories'] = Category::with(['category:id,parent_id,name,status'])
            ->whereNotNull('parent_id')
            ->select(['id', 'parent_id', 'name', 'status'])
            ->orderByDesc('id')
            ->get();
            
        return view('admin.subcategories.index', $data);
    }
}
