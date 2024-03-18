<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;

class ContactUsController extends Controller
{

    public function index()
    {
        $data['contacts'] = ContactUs::orderBy('created_at', 'desc')->get();

        return view('admin.contact.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(StoreContactUsRequest $request)
    {
        $contactUs = ContactUs::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);

        if (!empty($contactUs)) {
            Alert::success('Success', 'Congratulation! your message successfully send.');
            return redirect()->route('contactus');
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()->back()->withInput();
    }

    public function show(ContactUs $contact)
    {
        $data['contact'] = $contact;
        return view('admin.contact.show', $data);
    }

    public function status(ContactUs $contact)
    {
        $contact->forceFill([
        'status' => 1,
        ]);
        if($contact->update()){
        Alert::success('Success', 'Message Status Change.');
        return redirect()
                ->route('contacts.index');
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
                ->back()
                ->withInput();
    }

    public function edit(ContactUs $contactUs)
    {
        //
    }

    public function update(UpdateContactUsRequest $request, ContactUs $contactUs)
    {
        //
    }

    public function destroy(ContactUs $contact)
    {
        if($contact->delete()){
            // return redirect()->back()->with('SUCCESS', 'Message deleted');
            Alert::success('Success', 'Message Deleted Successfully.');
            return redirect()->back();
        }
        // return redirect()->back()->with('ERROR', 'Something Wrong!');
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
