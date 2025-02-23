<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAboutVgearRequest;
use App\Http\Requests\UpdateAboutVgearRequest;
use App\Models\AboutVgear;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AboutVgearController extends Controller
{
    public function index()
    {
        $data['abouts'] = AboutVgear::orderBy('created_at', 'Desc')->get();

        return view('admin.about-us.index', $data);
    }

    public function create()
    {
        return view('admin.about-us.create');
    }

    public function store(StoreAboutVgearRequest $request)
    {
        $about = AboutVgear::create([
            'title' => $request->get('title'),
            'details' => $request->get('details'),
            'serial' => $request->get('serial'),
        ]);

        if (empty($about)) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'About Vgear Created Successfully.');
        return redirect()->route('us.index');
    }

    public function show(AboutVgear $us)
    {
        $data['about'] = $us;

        return view('admin.about-us.show', $data);
    }

    public function edit(AboutVgear $us)
    {
        $data['about'] = $us;
        return view('admin.about-us.edit', $data);
    }

    public function update(UpdateAboutVgearRequest $request, AboutVgear $us)
    {
        $data = $request->validated();

        if (empty($us->update($data))) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'About Vgear Updated Successfully.');
        return redirect()->route('us.index');
    }

    public function destroy(AboutVgear $us)
    {
        if ($us->delete()) {
            Alert::success('Success', 'About Vgear Deleted Successfully.');
            return redirect()->back();
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
