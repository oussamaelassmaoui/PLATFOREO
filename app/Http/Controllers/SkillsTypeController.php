<?php

namespace App\Http\Controllers;

use App\Models\SkillsType;
use Illuminate\Http\Request;

class SkillsTypeController extends Controller
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
        return view('Skills-Types.index' , compact('Skills_Types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Skills-Types.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);
        
        

  
        SkillsType::create($validatedData);
    
        return redirect()->route('Skills-Types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Skills_Types=SkillsType::paginate(2);
        // $Post=SkillsType::paginate(4);
        // $Skills_Type = SkillsType::findOrFail($id);
        // return view('Skills-Types.show', compact('Skills_Type','Skills_Types','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Skills_Type = SkillsType::findOrFail($id);
        return view('Skills-Types.edit', compact('Skills_Type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            
           

        ]);
        $Skills_Type=SkillsType::findOrFail($id);
        $Skills_Type->update($validatedData);
     
        return to_route('Skills-Types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SkillsType::findOrFail($id)->delete();
        return to_route('Skills-Types.index');
    }
}
