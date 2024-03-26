<?php

namespace App\Http\Controllers;
use App\Models\Service_vision;
use Illuminate\Http\Request;

class Service_visionController extends Controller
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
        $Service_visions=Service_vision::all();
        return view('Service_vision.index' , compact('Service_visions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Service_vision.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);
        
        

  
        Service_vision::create($validatedData);
    
        return redirect()->route('Service_vision.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Service_vision=Service_vision::paginate(2);
        // $Post=Service_vision::paginate(4);
        // $Service_vision = Service_vision::findOrFail($id);
        // return view('Service_vision.show', compact('Service_vision','Service_vision','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Service_vision = Service_vision::findOrFail($id);
        return view('Service_vision.edit', compact('Service_vision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            
           

        ]);
        $Service_vision=Service_vision::findOrFail($id);
        $Service_vision->update($validatedData);
     
        return to_route('Service_vision.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service_vision::findOrFail($id)->delete();
        return to_route('Service_vision.index');
    }
}
