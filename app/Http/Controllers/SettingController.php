<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
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
        $Settings = Setting::paginate(1);
        return view('Settings.index', compact('Settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo_profil'=> 'nullable',
            'Testimonial_photo1'=> 'nullable',
            'Testimonial_photo2'=> 'nullable',
            'Testimonial_photo3'=> 'nullable',
            'Testimonial_photo4'=> 'nullable',
            'Contact_photo'=> 'nullable',
            'logo'=> 'nullable',
            'banner_About1'=> 'nullable',
            'banner_About2'=> 'nullable',
            'banner_Services'=> 'nullable',
            'banner_Services_Details'=> 'nullable',
            'banner_Portfolio'=> 'nullable',
            'banner_blog'=> 'nullable',
            'banner_Portfolio_details'=> 'nullable',
        ]);
        // Handle photo1 upload
        if ($request->hasFile('photo_profil')) {
            $photoPath1 = $request->file('photo_profil')->store('Settings', 'public');
            $validatedData['photo_profil'] = $photoPath1;
        }
        if ($request->hasFile('Testimonial_photo1')) {
            $photoPath2 = $request->file('Testimonial_photo1')->store('Settings', 'public');
            $validatedData['Testimonial_photo1'] = $photoPath2;
        }
        if ($request->hasFile('Testimonial_photo2')) {
            $photoPath3 = $request->file('Testimonial_photo2')->store('Settings', 'public');
            $validatedData['Testimonial_photo2'] = $photoPath3;
        }
        if ($request->hasFile('Testimonial_photo3')) {
            $photoPath4 = $request->file('Testimonial_photo3')->store('Settings', 'public');
            $validatedData['Testimonial_photo3'] = $photoPath4;
        }
        if ($request->hasFile('Testimonial_photo4')) {
            $photoPath5 = $request->file('Testimonial_photo4')->store('Settings', 'public');
            $validatedData['Testimonial_photo4'] = $photoPath5;
        }
        if ($request->hasFile('Contact_photo')) {
            $photoPath6 = $request->file('Contact_photo')->store('Settings', 'public');
            $validatedData['Contact_photo'] = $photoPath6;
        }
        if ($request->hasFile('logo')) {
            $photoPath7 = $request->file('logo')->store('Settings', 'public');
            $validatedData['logo'] = $photoPath7;
        }
        if ($request->hasFile('banner_About1')) {
            $photoPath8 = $request->file('banner_About1')->store('Settings', 'public');
            $validatedData['banner_About1'] = $photoPath8;
        }
        if ($request->hasFile('banner_About2')) {
            $photoPath9 = $request->file('banner_About2')->store('Settings', 'public');
            $validatedData['banner_About2'] = $photoPath9;
        }
        if ($request->hasFile('banner_Services')) {
            $photoPath10 = $request->file('banner_Services')->store('Settings', 'public');
            $validatedData['banner_Services'] = $photoPath10;
        }
        if ($request->hasFile('banner_Services_Details')) {
            $photoPath11 = $request->file('banner_Services_Details')->store('Settings', 'public');
            $validatedData['banner_Services_Details'] = $photoPath11;
        }
        if ($request->hasFile('banner_Portfolio')) {
            $photoPath12 = $request->file('banner_Portfolio')->store('Settings', 'public');
            $validatedData['banner_Portfolio'] = $photoPath12;
        }
        if ($request->hasFile('banner_blog')) {
            $photoPath13 = $request->file('banner_blog')->store('Settings', 'public');
            $validatedData['banner_blog'] = $photoPath13;
        }
        if ($request->hasFile('banner_Portfolio_details')) {
            $photoPath14 = $request->file('banner_Portfolio_details')->store('Settings', 'public');
            $validatedData['banner_Portfolio_details'] = $photoPath14;
        }
        Setting::create($validatedData);

        return redirect()->route('Settings.index');
    }

    /**
     * Display the specified resource.
     */

    // public function show(string $id)
    // {

    //     $Settings = Setting::paginate(2);

    //     $Setting = Setting::findOrFail($id);
    //     return view('Settings.show', compact('Setting', 'Settings'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Setting = Setting::findOrFail($id);

        return view('Settings.edit', compact('Setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'photo_profil'=> 'nullable',
            'Testimonial_photo1'=> 'nullable',
            'Testimonial_photo2'=> 'nullable',
            'Testimonial_photo3'=> 'nullable',
            'Testimonial_photo4'=> 'nullable',
            'Contact_photo'=> 'nullable',
            'logo'=> 'nullable',
            'banner_About1'=> 'nullable',
            'banner_About2'=> 'nullable',
            'banner_Services'=> 'nullable',
            'banner_Services_Details'=> 'nullable',
            'banner_Portfolio'=> 'nullable',
            'banner_blog'=> 'nullable',
            'banner_Portfolio_details'=> 'nullable',
        ]);

        $Setting = Setting::findOrFail($id);
         // Handle photo1 upload
        if ($request->hasFile('photo_profil')) {
            $photoPath1 = $request->file('photo_profil')->store('Settings', 'public');
            $validatedData['photo_profil'] = $photoPath1;
        }
        if ($request->hasFile('Testimonial_photo1')) {
            $photoPath2 = $request->file('Testimonial_photo1')->store('Settings', 'public');
            $validatedData['Testimonial_photo1'] = $photoPath2;
        }
        if ($request->hasFile('Testimonial_photo2')) {
            $photoPath3 = $request->file('Testimonial_photo2')->store('Settings', 'public');
            $validatedData['Testimonial_photo2'] = $photoPath3;
        }
        if ($request->hasFile('Testimonial_photo3')) {
            $photoPath4 = $request->file('Testimonial_photo3')->store('Settings', 'public');
            $validatedData['Testimonial_photo3'] = $photoPath4;
        }
        if ($request->hasFile('Testimonial_photo4')) {
            $photoPath5 = $request->file('Testimonial_photo4')->store('Settings', 'public');
            $validatedData['Testimonial_photo4'] = $photoPath5;
        }
        if ($request->hasFile('Contact_photo')) {
            $photoPath6 = $request->file('Contact_photo')->store('Settings', 'public');
            $validatedData['Contact_photo'] = $photoPath6;
        }
        if ($request->hasFile('logo')) {
            $photoPath7 = $request->file('logo')->store('Settings', 'public');
            $validatedData['logo'] = $photoPath7;
        }
        if ($request->hasFile('banner_About1')) {
            $photoPath8 = $request->file('banner_About1')->store('Settings', 'public');
            $validatedData['banner_About1'] = $photoPath8;
        }
        if ($request->hasFile('banner_About2')) {
            $photoPath9 = $request->file('banner_About2')->store('Settings', 'public');
            $validatedData['banner_About2'] = $photoPath9;
        }
        if ($request->hasFile('banner_Services')) {
            $photoPath10 = $request->file('banner_Services')->store('Settings', 'public');
            $validatedData['banner_Services'] = $photoPath10;
        }
        if ($request->hasFile('banner_Services_Details')) {
            $photoPath11 = $request->file('banner_Services_Details')->store('Settings', 'public');
            $validatedData['banner_Services_Details'] = $photoPath11;
        }
        if ($request->hasFile('banner_Portfolio')) {
            $photoPath12 = $request->file('banner_Portfolio')->store('Settings', 'public');
            $validatedData['banner_Portfolio'] = $photoPath12;
        }
        if ($request->hasFile('banner_blog')) {
            $photoPath13 = $request->file('banner_blog')->store('Settings', 'public');
            $validatedData['banner_blog'] = $photoPath13;
        }
        if ($request->hasFile('banner_Portfolio_details')) {
            $photoPath14 = $request->file('banner_Portfolio_details')->store('Settings', 'public');
            $validatedData['banner_Portfolio_details'] = $photoPath14;
        }
        $Setting->update($validatedData);

        return to_route('Settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Setting::findOrFail($id)->delete();
        return to_route('Settings.index');
    }
}
