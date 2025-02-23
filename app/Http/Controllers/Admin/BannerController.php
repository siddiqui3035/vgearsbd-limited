<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Banner;
use Illuminate\Support\Str;
use App\Services\FileUploadService;
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
        try {
            $params = $request->only([
                'title_one',
                'title_two',
                'short_details',
            ]);

            if ($request->hasFile('image')) {
                $filePath = config('commonconfig.banner_image');
                $fileName = random_string();
                $params['image'] = app(FileUploadService::class)
                    ->upload($request->file('image'), $filePath, $fileName, '', '', 'public');
                if (!$params['image']) {
                    throw new Exception(__('Failed to upload image.'));
                }
            }

            if (!Banner::create($params)) {
                throw new Exception(__('Failed to create banner.'));
            }
        } catch (Exception $e) {
            logs()->error($e);
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }

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
        try {
            $params = $request->only(['name']);
            if ($request->hasFile('image')) {
                $filePath = config('commonconfig.banner_image');
                $fileName = random_string();
                $params['image'] = app(FileUploadService::class)
                    ->upload($request->file('image'), $filePath, $fileName, '', '', 'public');
                if (!$params['image']) {
                    throw new Exception(__('Failed to upload image.'));
                }
            }

            if (!$banner->update($params)) {
                throw new Exception(__('Failed to update banner.'));
            }
        } catch (Exception $e) {
            logs()->error($e);
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }

        Alert::success('Success', 'Banner Updated Successfully.');
        return redirect()->route('banners.index');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::delete($banner->image);
        }

        if ($banner->delete()) {
            Alert::success('Success', 'Banner Deleted Successfully.');
            return redirect()->back();
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
