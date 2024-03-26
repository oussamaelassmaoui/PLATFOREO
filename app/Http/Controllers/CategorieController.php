<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
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
        $Categories=Categorie::all();
        $Settings = Setting::paginate(1);
        return view('Categories.index' , compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categories.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);
        
        

  
        Categorie::create($validatedData);
    
        return redirect()->route('Categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Categories=Categorie::paginate(2);
        // $Post=Categorie::paginate(4);
        // $Categorie = Categorie::findOrFail($id);
        // return view('Categories.show', compact('Categorie','Categories','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Categorie = Categorie::findOrFail($id);
        return view('Categories.edit', compact('Categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            
           

        ]);
        $Categorie=Categorie::findOrFail($id);
        $Categorie->update($validatedData);
     
        return to_route('Categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categorie::findOrFail($id)->delete();
        return to_route('Categories.index');
    }
}
