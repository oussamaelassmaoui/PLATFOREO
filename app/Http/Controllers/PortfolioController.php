<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\project;
use App\Models\Setting;
use App\Models\Categorie;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request){
        $Settings = Setting::paginate(1);
        $projects=project::all();
        $teams=team::paginate(1);
        $Categories=Categorie::all();
       
        return view('pages.Portfolio',compact('Settings','projects','teams', 'Categories'));
       }


    public function filter(Request $request , string $id)
    {
        $category = Categorie::findOrfail($id);
        $projects =  $category->project()->get();
        $Settings = Setting::paginate(1);
        $teams=team::paginate(1);
        $Categories=Categorie::all();

       return view('pages.filter', compact('category','Settings','projects','teams', 'Categories','projects'));
    }
  
}
