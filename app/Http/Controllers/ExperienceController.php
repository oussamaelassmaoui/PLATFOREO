<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
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
        $Experiences=Experience::all();
        $Settings = Setting::paginate(1);
        return view('Experiences.index' , compact('Experiences', 'Settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Experiences.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'name_company'=> 'nullable',
            'Start_Date'=> 'required',
            'subject'=> 'required',
            'date_final'=> 'required',
            'description'=> 'required',
        ]);
        
        

  
        Experience::create($validatedData);
    
        return redirect()->route('Experiences.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Experiences=Experience::paginate(2);
        // $Post=Experience::paginate(4);
        // $Experience = Experience::findOrFail($id);
        // return view('Experiences.show', compact('Experience','Experiences','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Experience = Experience::findOrFail($id);
        return view('Experiences.edit', compact('Experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name_company'=> 'nullable',
            'Start_Date'=> 'required',
            'subject'=> 'required',
            'date_final'=> 'required',
            'description'=> 'required',
            
           

        ]);
        $Experience=Experience::findOrFail($id);
        $Experience->update($validatedData);
     
        return to_route('Experiences.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Experience::findOrFail($id)->delete();
        return to_route('Experiences.index');
    }
}
