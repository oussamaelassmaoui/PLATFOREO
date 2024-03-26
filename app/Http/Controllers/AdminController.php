<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Visit;
use App\Models\project;
use App\Models\Setting;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function __construct()
    {
     
        $this->middleware(['auth','role:admin']);
       
    }
    public function AdminDashboard(){
      $Settings = Setting::paginate(1);
      $visits = Visit::latest()->paginate(5);
      $totalVisits = Visit::count();
      $totalProject= project::count();
      $totalArticle= Article::count();
      return view('admin.dashboard',compact('Settings','visits', 'totalVisits','totalProject','totalArticle'));
     }
     public function getVisitChartData()
     {
         $visits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                         ->groupBy('date')
                         ->orderBy('date')
                         ->get();
 
         $chartData = [];
         foreach ($visits as $visit) {
             $chartData[$visit->date] = $visit->count;
         }
 
         return response()->json($chartData);
     }
}
