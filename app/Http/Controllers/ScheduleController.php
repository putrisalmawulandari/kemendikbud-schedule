<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Officer;
use App\Employee;
use App\TransportationGenerate;
use App\Transportation;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('pages.schedule.index',[
            'data'=>Schedule::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.schedule.create',[
            'officers'=>Officer::all(),
            'employees'=>Employee::where('as','driver')->get(),
            'companions'=>Employee::where('as','staff')->get(),
            'values'=>TransportationGenerate::all(),
            'transforms'=>Transportation::where('transporation_type_id',3)->get(),
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
            'officer_id'=>'required',
            'date'=>'required',
            'departure'=>'required',
            'departure_time'=>'required',
            'employee_id'=>'required',
            'transportationgenerate_id'=>'required',
            'status'=>'required',
            'arrive'
        ]);

        
        // for($i = 1;$i<= 10;$i++)
        // {
            Schedule::create($request->all());
        // }
        
        
        return back()->withMessage('Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        return view('pages.schedule.edit',[
            'data'=>$schedule,
            'officers'=>Officer::all(),
            'employees'=>Employee::where('as','driver')->get(),
            'companions'=>Employee::where('as','staff')->get(),
            'values'=>TransportationGenerate::all(),
            'transforms'=>Transportation::where('transporation_type_id',3)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $this->validate($request,[
            'officer_id'=>'required',
            'date'=>'required',
            'departure'=>'required',
            'departure_time'=>'required',
            'employee_id'=>'required',
            'companion_id'=>'required',
            'transportationgenerate_id'=>'required',
            'status'=>'required',
        ]);

        $schedule->update($request->except('_token','_method'));
        return redirect()->route('schedule.index')->withMessage('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return back()->withMessage('Deleted');
    }
}
