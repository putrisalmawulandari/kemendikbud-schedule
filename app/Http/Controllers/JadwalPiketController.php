<?php

namespace App\Http\Controllers;

use App\JadwalPiket;
use App\Employee;
use Illuminate\Http\Request;

class JadwalPiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.jadwalpiket.index',[
            'data'=>JadwalPiket::orderBy('day','ASC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwal = JadwalPiket::latest()->pluck('employee_id');

        return view('pages.jadwalpiket.create',[
            'employees'=>Employee::whereNotIn('id',$jadwal)->get(),
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
            'employee_id'=>'required',
            'day'=>'required',
        ]);

        JadwalPiket::create($request->all());
        return back()->withMessage('Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JadwalPiket  $jadwalPiket
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalPiket $jadwalPiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JadwalPiket  $jadwalPiket
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalPiket $jadwalPiket)
    {
        // $jadwal = JadwalPiket::latest()->pluck('employee_id');

        return view('pages.jadwalpiket.edit',[
            'data'=>$jadwalPiket,
            'employees'=>Employee::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JadwalPiket  $jadwalPiket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalPiket $jadwalPiket)
    {
        $this->validate($request,[
            'employee_id'=>'required',
            'day'=>'required',
        ]);

        $jadwalPiket->update($request->except('_token','_method'));
        return redirect()->route('jadwalpiket.index')->withMessage('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JadwalPiket  $jadwalPiket
     * @return \Illuminate\Http\Response
     */
    public function destroy($jadwalPiket)
    {
        JadwalPiket::destroy($jadwalPiket);
        return back()->withMessage('Deleted');
    }

    public function roling()
    {
        foreach(JadwalPiket::all() as $jadwal)
        {
            if($jadwal->day == "senin")
            {
                $jadwal->update(['day'=>'selasa']);
            }

            else if($jadwal->day == "selasa")
            {
                $jadwal->update(['day'=>'rabu']);
            }

            else if($jadwal->day == "rabu")
            {
                $jadwal->update(['day'=>'kamis']);
            }

            else if($jadwal->day == "kamis")
            {
                $jadwal->update(['day'=>'jumat']);
            }

            else if($jadwal->day == "jumat")
            {
                $jadwal->update(['day'=>'sabtu']);
            }

            else if($jadwal->day == "sabtu")
            {
                $jadwal->update(['day'=>'minggu']);
            }

            else if($jadwal->day == "minggu")
            {
                $jadwal->update(['day'=>'senin']);
            }
        }

        return back()->with('message','Berhasil Melakukan Roling');
    }
}
