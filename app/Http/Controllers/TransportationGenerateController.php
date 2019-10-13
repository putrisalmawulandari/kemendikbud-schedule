<?php

namespace App\Http\Controllers;

use App\TransportationGenerate;
use App\Transportation;
use Illuminate\Http\Request;

class TransportationGenerateController extends Controller
{
    public function index()
    {
        return view('pages.transportation_generate.index',[
            'data'=>TransportationGenerate::latest()->get(),
        ]);
    }

    
    public function create()
    {
        return view('pages.transportation_generate.create',[
            'transportations'=>Transportation::whereNotIn('transporation_type_id',[3])->get(),
        ]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'nopol'=>'required',
            'transportation_id'=>'required',
        ]);

        TransportationGenerate::create($request->all());
        return back()->withMessage('Success');
    }

   
    public function show(TransportationGenerate $transportationgenerate)
    {
        //
    }

    
    public function edit($transportationgenerate)
    {
        return view('pages.transportation_generate.edit',[
            'data'=>TransportationGenerate::find($transportationgenerate),
            'transportations'=>Transportation::whereNotIn('transporation_type_id',[3])->get(),
        ]);
    }

   
    public function update(Request $request,$transportationgenerate)
    {
        $this->validate($request,[
            'nopol'=>'required',
            'transportation_id'=>'required',
        ]);

        TransportationGenerate::find($transportationgenerate)->update($request->except('_token','_method'));
        return redirect()->route('transportation_generate.index')->withMessage('Updated');
    }

   
    public function destroy($transportationgenerate)
    {
        TransportationGenerate::find($transportationgenerate)->delete();
        return back()->withMessage('Deleted');
    }
}
