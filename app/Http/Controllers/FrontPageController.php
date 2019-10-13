<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Schedule;
use App\JadwalPiket;
use Carbon\Carbon;
class FrontPageController extends Controller
{
    public function index()
    {
        return view('pages.user.front',[
            'news'=>News::latest()->get(),
        ]);
    }

    public function loading()
    {

        // $date = Carbon::now();
        // if($date->formatLocalized('%A') == "Saturday")
        // {
        //     $array['senin']['date']  = $date->addDays(-5)->formatLocalized('%d %B %Y');
        //     $array['selasa']['date'] = $date->addDays(-4)->formatLocalized('%d %B %Y');
        //     $array['rabu']['date']   = $date->addDays(-3)->formatLocalized('%d %B %Y');
        //     $array['kamis']['date']  = $date->addDays(-2)->formatLocalized('%d %B %Y');
        //     $array['jumat']['date']  = $date->addDays(-1)->formatLocalized('%d %B %Y');
        //     $array['sabtu']['date']  = $date->addDays(0)->formatLocalized('%d %B %Y');
        //     $array['minggu']['date'] = $date->addDays(1)->formatLocalized('%d %B %Y'); 
        // }

        // else if($date->formatLocalized('%A') == "Sunday")
        // {
        //     $array['senin']['date']  = $date->addDays(-6)->formatLocalized('%d %B %Y');
        //     $array['selasa']['date'] = $date->addDays(-5)->formatLocalized('%d %B %Y');
        //     $array['rabu']['date']   = $date->addDays(-4)->formatLocalized('%d %B %Y');
        //     $array['kamis']['date']  = $date->addDays(-3)->formatLocalized('%d %B %Y');
        //     $array['jumat']['date']  = $date->addDays(-2)->formatLocalized('%d %B %Y');
        //     $array['sabtu']['date']  = $date->addDays(1)->formatLocalized('%d %B %Y');
        //     $array['minggu']['date'] = $date->addDays(0)->formatLocalized('%d %B %Y');
        // }

        // else if($date->formatLocalized('%A') == "Monday")
        // {
        //     $array['senin']['date']  = $date->addDays(0)->formatLocalized('%d %B %Y');
        //     $array['selasa']['date'] = $date->addDays(1)->formatLocalized('%d %B %Y');
        //     $array['rabu']['date']   = $date->addDays(2)->formatLocalized('%d %B %Y');
        //     $array['kamis']['date']  = $date->addDays(3)->formatLocalized('%d %B %Y');
        //     $array['jumat']['date']  = $date->addDays(4)->formatLocalized('%d %B %Y');
        //     $array['sabtu']['date']  = $date->addDays(5)->formatLocalized('%d %B %Y');
        //     $array['minggu']['date'] = $date->addDays(6)->formatLocalized('%d %B %Y');
        // }

        // else if($date->formatLocalized('%A') == "Tuesday")
        // {
        //     $array['senin']['date']  = $date->addDays(-1)->formatLocalized('%d %B %Y');
        //     $array['selasa']['date'] = $date->addDays(0)->formatLocalized('%d %B %Y');
        //     $array['rabu']['date']   = $date->addDays(1)->formatLocalized('%d %B %Y');
        //     $array['kamis']['date']  = $date->addDays(2)->formatLocalized('%d %B %Y');
        //     $array['jumat']['date']  = $date->addDays(3)->formatLocalized('%d %B %Y');
        //     $array['sabtu']['date']  = $date->addDays(4)->formatLocalized('%d %B %Y');
        //     $array['minggu']['date'] = $date->addDays(5)->formatLocalized('%d %B %Y');
        // }

        // else if($date->formatLocalized('%A') == "Wednesday")
        // {
        //     $array['senin']['date']  = $date->addDays(-2)->formatLocalized('%d %B %Y');
        //     $array['selasa']['date'] = $date->addDays(-1)->formatLocalized('%d %B %Y');
        //     $array['rabu']['date']   = $date->addDays(0)->formatLocalized('%d %B %Y');
        //     $array['kamis']['date']  = $date->addDays(1)->formatLocalized('%d %B %Y');
        //     $array['jumat']['date']  = $date->addDays(2)->formatLocalized('%d %B %Y');
        //     $array['sabtu']['date']  = $date->addDays(3)->formatLocalized('%d %B %Y');
        //     $array['minggu']['date'] = $date->addDays(4)->formatLocalized('%d %B %Y');
        // }

        // else if($date->formatLocalized('%A') == "Thuesday")
        // {
        //     $array['senin']['date']  = $date->addDays(-3)->formatLocalized('%d %B %Y');
        //     $array['selasa']['date'] = $date->addDays(-2)->formatLocalized('%d %B %Y');
        //     $array['rabu']['date']   = $date->addDays(-1)->formatLocalized('%d %B %Y');
        //     $array['kamis']['date']  = $date->addDays(0)->formatLocalized('%d %B %Y');
        //     $array['jumat']['date']  = $date->addDays(1)->formatLocalized('%d %B %Y');
        //     $array['sabtu']['date']  = $date->addDays(2)->formatLocalized('%d %B %Y');
        //     $array['minggu']['date'] = $date->addDays(3)->formatLocalized('%d %B %Y');
        // }

        // else if($date->formatLocalized('%A') == "Friday")
        // {
        //     $array['senin']['date']  = $date->addDays(-4)->formatLocalized('%d %B %Y');
        //     $array['selasa']['date'] = $date->addDays(-3)->formatLocalized('%d %B %Y');
        //     $array['rabu']['date']   = $date->addDays(-2)->formatLocalized('%d %B %Y');
        //     $array['kamis']['date']  = $date->addDays(-1)->formatLocalized('%d %B %Y');
        //     $array['jumat']['date']  = $date->addDays(0)->formatLocalized('%d %B %Y');
        //     $array['sabtu']['date']  = $date->addDays(1)->formatLocalized('%d %B %Y');
        //     $array['minggu']['date'] = $date->addDays(2)->formatLocalized('%d %B %Y');
        // }

        // return $array;

        $array['senin']['list']  = JadwalPiket::where('day','senin')->get();
        $array['selasa']['list'] = JadwalPiket::where('day','selasa')->get();
        $array['rabu']['list']   = JadwalPiket::where('day','rabu')->get();
        $array['kamis']['list']  = JadwalPiket::where('day','kamis')->get();
        $array['jumat']['list']  = JadwalPiket::where('day','jumat')->get();
        $array['sabtu']['list']  = JadwalPiket::where('day','sabtu')->get();
        $array['minggu']['list'] = JadwalPiket::where('day','minggu')->get();

        $latest = Schedule::orderBy('date','DESC')->first();
        if($latest == null)
        {
            $schedule = Schedule::latest()->get();
        }else{
            $schedule = Schedule::whereBetween('date',[date("Y-m-d"),$latest->date])->where('status','aktif')->orderBy('date','ASC')->get();
        }



        return view('pages.user.loading',[
            'routines'=>Schedule::where('routine','1')->orderBy('departure_time','ASC')->get(),
            'schedules'=>$schedule,
            'jadwals'=>$array,
        ]);
    }

    public function report()
    {
        return view('pages.report.index',[
            'news'=>News::latest()->get(),
        ]);
    }
}
