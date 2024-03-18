<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $data['admins'] = User::whereNot('role', ROLE_USER)->get();
        // dd($data);
        return view('admin.admins.index', $data);
    }

    public function status(User $admin)
    {
        if ($admin->status == 0) {
            $status['status'] = 1;
        } else {
            $status['status'] = 0;
        }
        if ($admin->update($status)) {
            Alert::success('Success', 'Status Change Successfully.');
            return redirect()
                ->route('admins.index');
        }
        Alert::error('Error', 'Fail to Change');
        return redirect()
            ->back()
            ->withInput();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
