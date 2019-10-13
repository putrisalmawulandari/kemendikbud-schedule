<?php

namespace App\Http\Controllers;

use App\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.galery.index',[
            'data'=>Galery::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.galery.create');
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
            'description'=>'required',
        ]);

        if($request->hasFile('name'))
        {
            $name = $request->file('name')->store('upload');
            Galery::create([
                'name'=>$name,
                'description'=>$request->description
            ]);

            return back()->withMessage('Success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('pages.galery.edit',[
            'data'=>$galery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        $this->validate($request,[
            'description'=>'required',
        ]);

        if($request->hasFile('name'))
        {
            $name = $request->file('name')->store('upload');
            $galery->update([
                'name'=>$name,
                'description'=>$request->description
            ]);

            return redirect()->route('galery.index')->withMessage('Success');
        }else{
            $galery->update([
                'description'=>$request->description
            ]);

            return redirect()->route('galery.index')->withMessage('Success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        $galery->delete();
        return back()->withMessage('Deleted');
    }
}
