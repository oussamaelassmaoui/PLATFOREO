<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
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
        $Educations=Education::all();
        $Settings = Setting::paginate(1);
        return view('Educations.index' , compact('Educations', 'Settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Educations.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'name_ecole'=> 'nullable',
            'specialty'=> 'required',
            'Start_Date'=> 'required',
            'date_final'=> 'required',
            'description'=> 'nullable',
        ]);
        
        

  
        Education::create($validatedData);
    
        return redirect()->route('Educations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Educations=Education::paginate(2);
        // $Post=Education::paginate(4);
        // $Education = Education::findOrFail($id);
        // return view('Educations.show', compact('Education','Educations','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Education = Education::findOrFail($id);
        return view('Educations.edit', compact('Education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name_ecole'=> 'nullable',
            'specialty'=> 'required',
            'Start_Date'=> 'required',
            'date_final'=> 'required',
            'description'=> 'nullable',
            
           

        ]);
        $Education=Education::findOrFail($id);
        $Education->update($validatedData);
     
        return to_route('Educations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::findOrFail($id)->delete();
        return to_route('Educations.index');
    }
}
