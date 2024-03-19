<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Blog;
use Illuminate\Support\Str;
use App\Http\Requests\BlogRequest;
use App\Services\FileUploadService;
use App\Http\Controllers\Controller;
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

    public function store(BlogRequest $request)
    {
        try {
            $params = $request->only([
                'title',
                'category',
                'short_description',
                'long_description'
            ]);

            if ($request->hasFile('image')) {
                $filePath = config('commonconfig.blog_image');
                $fileName = Str::snake($request->get('title'));
                $params['image'] = app(FileUploadService::class)
                    ->upload($request->file('image'), $filePath, $fileName, '', '', 'public');
                if (!$params['image']) {
                    throw new Exception(__('Failed to upload image.'));
                }
            }

            if (!Blog::create($params)) {
                throw new Exception(__('Failed to create blog.'));
            }
        } catch (Exception $e) {
            logs()->error($e);
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
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

    public function update(BlogRequest $request, Blog $blog)
    {
        try {
            $params = $request->only([
                'title',
                'category',
                'short_description',
                'long_description'
            ]);

            if ($request->hasFile('image')) {
                $filePath = config('commonconfig.blog_image');
                $fileName = random_string();
                $params['image'] = app(FileUploadService::class)
                    ->upload($request->file('image'), $filePath, $fileName, '', '', 'public');
                if (!$params['image']) {
                    throw new Exception(__('Failed to upload image.'));
                }
            }

            if (!$blog->update($params)) {
                throw new Exception(__('Failed to update blog.'));
            }
        } catch (Exception $e) {
            logs()->error($e);
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }

        Alert::success('Success', 'Blog Updated Successfully.');
        return redirect()->route('blogs.index');
        // $data = $request->validated();

        // if ($request->hasFile('image')) {
        //     if ($blog->image) {
        //         Storage::delete($blog->image);
        //     }
        //     $data['image'] = $request->file('image')->store('images/blogs');
        // }

        // if (empty($blog->update($data))) {
        //     Alert::error('Error', 'Something wrong!');
        //     return redirect()
        //         ->back()
        //         ->withInput();
        //     // return redirect()->route('blogs.index')->with('SUCCESS', 'Blog Updated');
        // }

        // // return redirect()->back()->withInput()->with('ERROR', 'Something Wrong!');
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
