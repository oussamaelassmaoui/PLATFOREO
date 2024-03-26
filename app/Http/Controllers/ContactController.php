<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin'])->except(['create','store']);
       
    }
    public function index()
    {
        $Settings = Setting::paginate(1);
        $Contacts = Contact::all();
        return view('Contacts.index', compact('Contacts', 'Settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.HOME');
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'subject'=> 'nullable',
            'message'=> 'required',
        ]);
        Contact::create($validatedData);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Contacts=Contact::paginate(2);
        // $Post=Contact::paginate(4);
        // $Contact = Contact::findOrFail($id);
        // return view('Contacts.show', compact('Contact','Contacts','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $Contact = Contact::findOrFail($id);
    //     return view('Contacts.edit', compact('Contact'));
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $validatedData=$request->validate([
    //         'name'=> 'required',



    //     ]);
    //     $Contact=Contact::findOrFail($id);
    //     $Contact->update($validatedData);

    //     return to_route('Contacts.index');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::findOrFail($id)->delete();
        return to_route('Contacts.index');
    }
}
