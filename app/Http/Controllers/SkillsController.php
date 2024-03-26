<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillsType;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin']);
       
    }
    public function index()
    {
        $Skills_Types=SkillsType::all();
        $Skills=Skill::all();
        return view('Skills.index' , compact('Skills','Skills_Types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Skills_Types=SkillsType::all();
        return view('Skills.index',compact('Skills_Types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
            'SkillsType_id'=> 'required',
        ]);
        if($request->hasFile('Photo')){
            $photoPath = $request->file('Photo')->store('Skills','public');
            $validatedData['Photo']=$photoPath;
        }
        

  
        Skill::create($validatedData);
    
        return redirect()->route('Skills.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Skills=Skill::paginate(2);
        // $Post=Skill::paginate(4);
        // $Skill = Skill::findOrFail($id);
        // return view('Skills.show', compact('Skill','Skills','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Skills_Types=SkillsType::all();
        $Skill = Skill::findOrFail($id);
        return view('Skills.edit', compact('Skill','Skills_Types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
            'SkillsType_id'=> 'required',
            
           

        ]);
        $Skill=Skill::findOrFail($id);
        if($request->hasFile('Photo')){
            $photoPath = $request->file('Photo')->store('Skills','public');
            $validatedData['Photo']=$photoPath;
        }
        $Skill->update($validatedData);
     
        return to_route('Skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::findOrFail($id)->delete();
        return to_route('Skills.index');
    }
}
