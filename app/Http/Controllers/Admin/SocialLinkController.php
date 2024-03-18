<?php

namespace App\Http\Controllers\Admin;

use App\Models\SocialLink;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreSocialLinkRequest;
use App\Http\Requests\UpdateSocialLinkRequest;

class SocialLinkController extends Controller
{
    public function index()
    {
        $data['socialLinks'] = SocialLink::all();

        return view('admin.user-sociallink.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(StoreSocialLinkRequest $request)
    {
        $address = SocialLink::create([
            'type' => $request->get('type'),
            'link' => $request->get('link'),
            'user_id' => auth()->user()->id,
        ]);

        if (empty($address)) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'Social Link Created Successfully.');
        return redirect()->back();
    }

    public function show(SocialLink $sociallink)
    {
        //
    }

    public function edit(SocialLink $sociallink)
    {
        $data['sociallink'] = $sociallink;
        return view('frontend.my-sociallink', $data);
    }

    public function update(UpdateSocialLinkRequest $request, SocialLink $sociallink)
    {
        $data = $request->validated();

        if (empty($sociallink->update($data))) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'Social Link Updated Successfully.');
        return redirect()->route('my.account');
    }

    public function destroy(SocialLink $sociallink)
    {
        if($sociallink->delete()){
            Alert::success('Success', 'Social Link Deleted Successfully.');
            return redirect()->back();
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
