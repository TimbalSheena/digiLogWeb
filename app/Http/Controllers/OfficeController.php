<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $office = Office::all();
        return view('/office-staff.index')->with('office', $office);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $officeData = $request->validate([
            'build_num' => 'required|numeric',
            'build_name' => 'required|max:255',
            'office_name' => 'required|max:255',
        ]);
        $office = Office::create($officeData);

        return redirect('admin/reg_office')->with('completed', 'Office has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $office = Office::findOrFail($id);
        return view('edit', compact('office'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $officeUpdateData = $request->validate([
            'build_num' => 'required|numeric',
            'build_name' => 'required|max:255',
            'office_name' => 'required|max:255',
        ]);
        Office::whereId($id)->update($officeUpdateData);
        return redirect('admin/reg_office')->with('completed', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $office = Office::findOrFail($id);
        $office->delete();

        return redirect('/offices')->with('completed', 'Student has been deleted');
    }
}
