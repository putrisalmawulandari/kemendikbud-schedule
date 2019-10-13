<?php

namespace App\Http\Controllers;

use App\TransportationType;
use Illuminate\Http\Request;

class TransportationTypeController extends Controller
{
    public function index()
    {
        return view('pages.transportation_type.index',[
            'data'=>TransportationType::latest()->get(),
        ]);
    }

    
    public function create()
    {
        return view('pages.transportation_type.create');   
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);

        TransportationType::create($request->all());
        return back()->withMessage('Success');
    }

    
    public function show(TransportationType $transportation_type)
    {
        //
    }

    
    public function edit(TransportationType $transportation_type)
    {
        return view('pages.transportation_type.edit',[
            'data'=>$transportation_type,
        ]);
    }

    
    public function update(Request $request, TransportationType $transportation_type)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);

        $transportation_type->update($request->except('_token','_method'));
        return redirect()->route('transportation_type.index')->withMessage('Updated');
    }

    
    public function destroy(TransportationType $transportation_type)
    {
        $transportation_type->delete();
        return back()->withMessage('Deleted');
    }
}
