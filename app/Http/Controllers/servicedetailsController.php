<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use Illuminate\Support\Facades\Auth;

class servicedetailsController extends Controller
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
        $servic_edetails=ServiceDetail::all();
        return view('servic-edetails.index' , compact('servic_edetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('servic-edetails.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            'slug'=> 'required',
            'description'=> 'required',
            'icon'=> 'required',
            'text'=> 'required',
            'title_Golobale'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
           
        ]);

       
        $validatedData['user_id'] = Auth::id();
         // Handle photo1 upload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('servic-edetails', 'public');
            $validatedData['photo'] = $photoPath;
        }
      
        ServiceDetail::create($validatedData);
    
        return redirect()->route('servic-edetails.index');
    }
    
      /**
     * Display the specified resource.
      */

    public function show(string $id)
    {
        $Testimonials=Testimonial::all();
        $servic_edetails=ServiceDetail::paginate(4);
        $user=ServiceDetail::paginate(1);
        $servic_edetail = ServiceDetail::findOrFail($id);
        $Settings = Setting::paginate(1);
        $teams=team::paginate(1);
        return view('servic-edetails.show', compact('servic_edetail','servic_edetails','user','Testimonials',"Settings",'teams')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servic_edetail = ServiceDetail::findOrFail($id);
        return view('servic-edetails.edit', compact('servic_edetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validatedData=$request->validate([
            'title'=> 'required',
            'slug'=> 'required',
            'description'=> 'required',
            'icon'=> 'required',
            'text'=> 'required',
            'title_Golobale'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
           

        ]);
        $validatedData['user_id'] = Auth::id();
        $servic_edetail=ServiceDetail::findOrFail($id);

        if($request->hasFile('photo')){
            $photoPath1 = $request->file('photo')->store('servic-edetails','public');
            $validatedData['photo']=$photoPath1;
        }
        
       
        $servic_edetail->update($validatedData);
     
        return to_route('servic-edetails.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ServiceDetail::findOrFail($id)->delete();
        return to_route('servic-edetails.index');
    }
}
