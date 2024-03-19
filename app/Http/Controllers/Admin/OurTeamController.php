<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\OurTeam;
use Illuminate\Support\Str;
use App\Services\FileUploadService;
use App\Http\Controllers\Controller;
use App\Http\Requests\OurTeamRequest;
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

    public function store(OurTeamRequest $request)
    {
        try {
            $params = $request->only([
                'name',
                'designation',
                'details'
            ]);

            if ($request->hasFile('image')) {
                $filePath = config('commonconfig.team_image');
                $fileName = Str::snake($request->get('name'));
                $params['image'] = app(FileUploadService::class)
                    ->upload($request->file('image'), $filePath, $fileName, '', '', 'public');
                if (!$params['image']) {
                    throw new Exception(__('Failed to upload image.'));
                }
            }

            if (!OurTeam::create($params)) {
                throw new Exception(__('Failed to create team.'));
            }
        } catch (Exception $e) {
            logs()->error($e);
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }

        Alert::success('Success', 'Team member Created Successfully.');
        return redirect()->route('teams.index');
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

    public function update(OurTeamRequest $request, OurTeam $team)
    {
        try {
            $params = $request->only([
                'name',
                'designation',
                'details'
            ]);
            if ($request->hasFile('image')) {
                $filePath = config('commonconfig.team_image');
                $fileName = Str::snake($request->get('name'));
                $params['image'] = app(FileUploadService::class)
                    ->upload($request->file('image'), $filePath, $fileName, '', '', 'public');
                if (!$params['image']) {
                    throw new Exception(__('Failed to upload image.'));
                }
            }

            if (!$team->update($params)) {
                throw new Exception(__('Failed to update team.'));
            }
        } catch (Exception $e) {
            logs()->error($e);
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }

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
