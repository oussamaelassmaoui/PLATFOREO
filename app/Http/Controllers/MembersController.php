<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\Member;
use App\Models\Setting;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin'])->except(['show']);
       
    }
    public function index()
    {
        $Members=Member::all();
        return view('Members.index' , compact('Members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' =>'required| string | max:255',
           
            'work' =>'required|string|max:255',
            'photo' =>'nullable|max:2048',
           
            'Linkedin' =>'required|string',
            'Github' =>'required|string',
            
        ]);
        
        
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Members','public');
            $validatedData['photo']=$photoPath;
        }
  
        Member::create($validatedData);
    
        return redirect()->route('Members.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Members=Member::paginate(2);
        // $Post=Member::paginate(4);
        $teams=team::paginate(1);
        $Settings = Setting::paginate(1);
        $Member = Member::findOrFail($id);
        return view('Members.show', compact('teams','Member','Settings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Member = Member::findOrFail($id);
        return view('Members.edit', compact('Member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name' =>'required| string | max:255',
            'work' =>'required|string|max:255',
            'photo' =>'nullable|max:2048',
            'Linkedin' =>'required|string',
            'Github' =>'required|string',
        ]);
        $Member=Member::findOrFail($id);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Members','public');
            $validatedData['photo']=$photoPath;
        }
        $Member->update($validatedData);
     
        return to_route('Members.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Member::findOrFail($id)->delete();
        return to_route('Members.index');
    }
}
