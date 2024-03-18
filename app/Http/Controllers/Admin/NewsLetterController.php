<?php

namespace App\Http\Controllers\Admin;

use App\Models\NewsLetter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreNewsLetterRequest;
use App\Http\Requests\UpdateNewsLetterRequest;

class NewsLetterController extends Controller
{
    public function index()
    {
        $data['subscribes'] = NewsLetter::orderBy('created_at', 'desc')->get();

        return view('admin.subscribe.index', $data);
    }

    public function store(StoreNewsLetterRequest $request)
    {
        $subscribe = NewsLetter::create([
            'email' => $request->get('email'),
        ]);

        if (empty($subscribe)) {
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        Alert::success('Success', 'Congratulation! You are subscribe Successfully.');
        return redirect()->route('home');
    }

    public function status(NewsLetter $subscribe)
    {
        if ($subscribe->status == 0) {
            $status['status'] = 1;
        } else {
            $status['status'] = 0;
        }
        $subscribe->forceFill($status);

        if ($subscribe->update()) {
            return redirect()
                ->route('admin.subscribe')
                ->with('SUCCESS', __('Status Change.'));
        }
        return redirect()
            ->back()
            ->withInput()
            ->with('ERROR', __('Fail to Change.'));
    }

    public function mailSend(Request $request)
    {
        // $details = [
        //     'title' => 'Mail from appaloy.com',
        //     'subject' => $request->subject,
        //     'body' => $request->messages,
        // ];

        // $mail = new SubscriberMail($details);
        // $new = Mail::to(Subscribe::where('status', 1)->get('email'))->send($mail);
        // return redirect()
        //     ->back()
        //     ->with('SUCCESS', __('Message sent successfully!'));
    }

}
