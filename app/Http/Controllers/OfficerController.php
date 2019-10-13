<?php

namespace App\Http\Controllers;

use App\Officer;
use App\Agency;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.officer.index',[
            'data'=>Officer::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.officer.create',[
            'agencys'=>Agency::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'agency_id'=>'required',
        ]);

        Officer::create($request->all());
        return back()->withMessage('Success');
    }

   
    public function show(Officer $officer)
    {
        //
    }

    
    public function edit(Officer $officer)
    {
        return view('pages.officer.edit',[
            'data'=>$officer,
            'agencys'=>agency::all(),
        ]);
    }

   
    public function update(Request $request, Officer $officer)
    {
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'agency_id'=>'required',
        ]);

        $officer->update($request->except('_token','_method'));
        return redirect()->route('officer.index')->withMessage('Updated');
    }

   
    public function destroy(Officer $officer)
    {
        $officer->delete();
        return back()->withMessage('Deleted');
    }
}
