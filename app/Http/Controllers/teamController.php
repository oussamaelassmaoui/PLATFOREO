<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class teamController extends Controller
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
        $teams=team::paginate(1);
        return view('teams.index' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' =>'required| string | max:255',
            'email' => 'required | string | email | max:255',
            'Mobile' =>'required|numeric',
            'work' =>'required|string|max:255',
            'photo' =>'nullable|max:2048',
            'instagram' =>'required|string',
            'Linkedin' =>'required|string',
            'Github' =>'required|string',
            'Twitter' =>'required|string',
            'Facebook' =>'required|string',
            'About_Me' =>'required|string',
          
            'Years_of_Experience'=>'required|numeric',
        ]);
        
        
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('teams','public');
            $validatedData['photo']=$photoPath;
        }
  
        team::create($validatedData);
    
        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $teams=team::paginate(2);
        // $Post=team::paginate(4);
        // $team = team::findOrFail($id);
        // return view('teams.show', compact('team','teams','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = team::findOrFail($id);
        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name' =>'required| string | max:255',
            'email' => 'required | string | email | max:255',
            'Mobile' =>'required|numeric',
            'work' =>'required|string|max:255',
            'photo' =>'nullable|max:2048',
            'instagram' =>'required|string',
            'Linkedin' =>'required|string',
            'Github' =>'required|string',
            'Twitter' =>'required|string',
            'Facebook' =>'required|string',
            'About_Me' =>'required|string',
            
            'Years_of_Experience'=>'required|numeric',
        ]);
        $team=team::findOrFail($id);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('teams','public');
            $validatedData['photo']=$photoPath;
        }
        $team->update($validatedData);
     
        return to_route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        team::findOrFail($id)->delete();
        return to_route('teams.index');
    }
}
