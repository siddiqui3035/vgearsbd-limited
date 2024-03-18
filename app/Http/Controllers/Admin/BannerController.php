<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;

class BannerController extends Controller
{
    public function index()
    {
        $data['banners'] = Banner::orderBy('created_at', 'desc')->get();

        return view('admin.banners.index', $data);
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(StoreBannerRequest $request)
    {
        $path = "";
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/blogs');
        }

        $banner = Banner::create([
            'title_one' => $request->get('title_one'),
            'title_two' => $request->get('title_two'),
            'short_details' => $request->get('short_details'),
            'image' => $path,
        ]);

        if (empty($banner)) {
            // return redirect()->route('banners.index')->with('SUCCESS', 'Banner Created');
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        // return redirect()->back()->withInput()->with('ERROR', 'Something Wrong!');
        Alert::success('Success', 'Banner Created Successfully.');
        return redirect()->route('banners.index');
    }

    public function show(Banner $banner)
    {
        $data['banner'] = $banner;
        return view('admin.banners.show', $data);
    }

    public function edit(Banner $banner)
    {
        $data['banner'] = $banner;
        return view('admin.banners.edit', $data);
    }

    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::delete($banner->image);
            }
            $data['image'] = $request->file('image')->store('images/banners');
        }

        if (empty($banner->update($data))) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
            // return redirect()->route('banners.index')->with('SUCCESS', 'Banner Updated');
        }
        Alert::success('Success', 'Banner Updated Successfully.');
        return redirect()->route('banners.index');
        // return redirect()->back()->withInput()->with('ERROR', 'Something Wrong!');
    }

    public function destroy(Banner $banner)
    {
        if($banner->image){
            Storage::delete($banner->image);
        }

        if($banner->delete()){
            // return redirect()->back()->with('SUCCESS', 'Banner deleted');
            Alert::success('Success', 'Banner Deleted Successfully.');
            return redirect()->back();
        }
        // return redirect()->back()->with('ERROR', 'Something Wrong!');
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
