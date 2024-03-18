<?php

namespace App\Http\Controllers\Admin;

use App\Models\OurTeam;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreOurTeamRequest;
use App\Http\Requests\UpdateOurTeamRequest;

class OurTeamController extends Controller
{
    public function index()
    {
        $data['ourTeams'] = OurTeam::orderBy('created_at', 'desc')->get();

        return view('admin.our-team.index', $data);
    }

    public function create()
    {
        return view('admin.our-team.create');
    }

    public function store(StoreOurTeamRequest $request)
    {
        $path = "";
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/teams');
        }

        $ourTeam = OurTeam::create([
            'name' => $request->get('name'),
            'degnigation' => $request->get('degnigation'),
            'details' => $request->get('details'),
            'image' => $path,
        ]);

        if (!empty($ourTeam)) {
            // return redirect()->route('teams.index')->with('SUCCESS', 'Team member Created');
            Alert::success('Success', 'Team member Created Successfully.');
            return redirect()->route('teams.index');
        }
        // return redirect()->back()->withInput()->with('ERROR', 'Something Wrong!');
        Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
    }

    public function show(OurTeam $team)
    {
        $data['ourTeam'] = $team;

        return view('admin.our-team.show', $data);
    }

    public function edit(OurTeam $team)
    {
        $data['team'] = $team;
        return view('admin.our-team.edit', $data);
    }

    public function update(UpdateOurTeamRequest $request, OurTeam $team)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::delete($team->image);
            }
            $data['image'] = $request->file('image')->store('images/teams');
        }

        if (empty($team->update($data))) {
            // return redirect()->route('teams.index')->with('SUCCESS', 'Team member Updated');
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        // return redirect()->back()->withInput()->with('ERROR', 'Something Wrong!');
        Alert::success('Success', 'Team member Updated Successfully.');
        return redirect()->route('teams.index');
    }

    public function destroy(OurTeam $team)
    {
        if($team->image){
            Storage::delete($team->image);
        }

        if($team->delete()){
            // return redirect()->back()->with('SUCCESS', 'Team member deleted');
            Alert::success('Success', 'Team member Deleted Successfully.');
            return redirect()->back();
        }
        // return redirect()->back()->with('ERROR', 'Something Wrong!');
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }
}
