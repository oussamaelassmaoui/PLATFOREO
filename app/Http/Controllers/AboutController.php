<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use App\Models\Service_vision;

class AboutController extends Controller
{
    public function index(){
        $Testimonials=Testimonial::all();
        $teams=team::paginate(1);
        $servic_edetails=ServiceDetail::paginate(4);
        $Service_visions=Service_vision::all();
        $Settings = Setting::paginate(1);
        return view('pages.about',compact("Testimonials",'teams','servic_edetails','Service_visions', 'Settings'));
       }
}
