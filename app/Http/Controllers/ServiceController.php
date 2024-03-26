<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;

class ServiceController extends Controller
{
    public function index(){
        $servic_edetails=ServiceDetail::all();
        $Settings = Setting::paginate(1);
        $teams=team::paginate(1);
        return view('pages.Service',compact('servic_edetails', 'Settings', 'teams'));
       }
}
