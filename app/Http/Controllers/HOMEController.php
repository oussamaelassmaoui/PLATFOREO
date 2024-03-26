<?php

namespace App\Http\Controllers;

use App\Models\team;

use App\Models\Skill;
use App\Models\Article;
use App\Models\project;
use App\Models\Setting;
use App\Models\Education;
use App\Models\Experience;
use App\Models\SkillsType;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;

class HOMEController extends Controller
{
    public function index()
    {
        $Articles = Article::paginate(2);
        $SkillsTypeId = 1;
        $Skills = Skill::where('SkillsType_id', $SkillsTypeId)->get();
        $Skills_Type = Skill::where('SkillsType_id', $SkillsTypeId)->limit(1)->get();

        $SkillsTypeId2 = 2;
        $SkillsF = Skill::where('SkillsType_id', $SkillsTypeId2)->get();
        $Skills_TypeF = Skill::where('SkillsType_id', $SkillsTypeId2)->limit(1)->get();

        $SkillsTypeId3 = 3;
        $SkillsO = Skill::where('SkillsType_id', $SkillsTypeId3)->get();
        $Skills_TypeO = Skill::where('SkillsType_id', $SkillsTypeId3)->limit(1)->get();
        
        $servic_edetails=ServiceDetail::paginate(6);
        $Testimonials=Testimonial::all();

        $Educations=Education::all();
        $Experiences=Experience::all();

        $teams=team::paginate(1);
        $Settings = Setting::paginate(1);
        $totalProject= project::count();
        $projects=project::paginate(6);
        return view('pages.HOME', compact('Articles', 'SkillsTypeId', 'Skills', 'Skills_Type', 
        'SkillsTypeId3', 'SkillsTypeId2','SkillsF', 'Skills_TypeF', 'SkillsO', 'Skills_TypeO',
        'servic_edetails','Testimonials','Educations','Experiences','teams','Settings',"totalProject",'projects'));
    }
}
