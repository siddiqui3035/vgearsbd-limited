<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use RealRashid\SweetAlert\Facades\Alert;

class UnitController extends Controller
{
    public function index()
    {
        $data['units'] = Unit::orderBy('created_at', 'desc')->get();

        return view('admin.units.index', $data);
    }

    public function create()
    {
        return view('admin.units.create');
    }

    public function store(StoreUnitRequest $request, Unit $unit)
    {
        $data = $request->validated();

        if (!empty($unit->create($data))) {
            Alert::success('Success', 'Product unit Created Successfully.');
            return redirect()->route('units.index');
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }

    public function show(Unit $unit)
    {
        $data['unit'] = $unit;

        return view('admin.units.show', $data);
    }

    public function edit(Unit $unit)
    {
        if ($unit->base_unit == 0) {
            $data['unit'] = $unit;
            return view('admin.units.edit', $data);
        }
        return view('error.401');
    }

    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        $data = $request->validated();

        if (!empty($unit->update($data))) {
            Alert::success('Success', 'Product unit Updated Successfully.');
            return redirect()->route('units.index');
        }
        Alert::error('Error', 'Something wrong!');
        return redirect()
            ->back()
            ->withInput();
    }

    public function destroy(Unit $unit)
    {
        if ($unit->base_unit == 0) {
            if ($unit->delete()) {
                Alert::success('Success', 'Product unit Deleted Successfully.');
                return redirect()->back();
            }
            Alert::error('Error', 'Something wrong!');
            return redirect()
                ->back()
                ->withInput();
        }
        return view('error.401');
    }
}
