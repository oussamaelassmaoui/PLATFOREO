<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $teams=team::paginate(1);
        $Articles=Article::all();
        $Settings = Setting::paginate(1);
        return view('pages.Blog',compact('Articles','Settings', 'teams'));
       }
}
