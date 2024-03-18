<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateBlogRequest;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::orderBy('created_at', 'desc')->get();

        return view('admin.blog.index', $data);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(StoreBlogRequest $request)
    {
        $path = "";
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/blogs');
        }

        $blog = Blog::create([
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'short_description' => $request->get('short_description'),
            'long_description' => $request->get('long_description'),
            'image' => $path,
        ]);

        if (empty($blog)) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
            // return redirect()->route('blogs.index')->with('SUCCESS', 'Blog Created');
        }
        // return redirect()->back()->withInput()->with('ERROR', 'Something Wrong!');
        Alert::success('Success', 'Blog Created Successfully.');
        return redirect()->route('blogs.index');
    }

    public function show(Blog $blog)
    {
        $data['blog'] = $blog;
        return view('admin.blog.show', $data);
    }

    public function edit(Blog $blog)
    {
        $data['blog'] = $blog;
        return view('admin.blog.edit', $data);
    }

    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete($blog->image);
            }
            $data['image'] = $request->file('image')->store('images/blogs');
        }

        if (empty($blog->update($data))) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
            // return redirect()->route('blogs.index')->with('SUCCESS', 'Blog Updated');
        }
        Alert::success('Success', 'Blog Updated Successfully.');
        return redirect()->route('blogs.index');
        // return redirect()->back()->withInput()->with('ERROR', 'Something Wrong!');
    }

    public function destroy(Blog $blog)
    {
        if($blog->image){
            Storage::delete($blog->image);
        }

        if($blog->delete()){
            // return redirect()->back()->with('SUCCESS', 'Blog deleted');
            Alert::success('Success', 'Blog Deleted Successfully.');
            return redirect()->back();
        }
        // return redirect()->back()->with('ERROR', 'Something Wrong!');
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
