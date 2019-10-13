<?php

namespace App\Http\Controllers;

use App\Transportation;
use Illuminate\Http\Request;
use App\TransportationType as Type;
class TransportationController extends Controller
{
    public function index()
    {
        return view('pages.transportation.index',[
            'data'=>Transportation::whereNotIn('transporation_type_id',[3])->latest()->get(),
        ]);
    }

    
    public function create()
    {
        return view('pages.transportation.create',[
            'types'=>Type::latest()->get(),
        ]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'logo'=>'required',
            'description'=>'required',
        ]);
        
        if($request->hasFile('logo'))
        {
            $logo = $request->file('logo')->store('upload');
            Transportation::create([
                'name'=>$request->name,
                'description'=>$request->description,
                'logo'=>$logo,
                'transporation_type_id'=>$request->transporation_type_id,
            ]);

            return back()->withMessage('Success');
        }
    }

    
    public function show(Transportation $transportation)
    {
        //
    }

    
    public function edit(Transportation $transportation)
    {
        return view('pages.transportation.edit',[
            'data'=>$transportation,
            'types'=>Type::latest()->get(),
        ]);
    }

   
    public function update(Request $request, Transportation $transportation)
    {
        $this->validate($request,[
            'name'=>'required',
            'logo'=>'required',
            'description'=>'required',
        ]);

        if($request->hasFile('logo'))
        {
            $logo = $request->file('logo')->store('upload');
            $transportation->update([
                'logo'=>$logo,
                'name'=>$request->name,
                'description'=>$request->description
            ]);

            return redirect()->route('transportation.index')->withMessage('Success');
        }else{
            $transportation->update([
                'name'=>$request->name,
                'description'=>$request->description,
            ]);

            return redirect()->route('transportation.index')->withMessage('Success');
        }
    }

    
    public function destroy(Transportation $transportation)
    {
        $transportation->delete();
        return back()->withMessage('Deleted');
    }
}
