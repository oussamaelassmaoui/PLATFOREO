<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\team;
use App\Models\Member;
use App\Models\project;
use App\Models\Setting;
use App\Models\Categorie;
use App\Models\project_tag;
use Illuminate\Http\Request;
use App\Models\project_Member;

class projectsController extends Controller
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
        // $projects_Types=project::all();
       
        $projects=project::all();
        return view('projects.index' , compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $projects_Types=project::all();
        $tags=Tag::all();
        $Categories=Categorie::all();
        $Members=Member::all();
        return view('projects.create',compact('tags','Categories','Members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
            'description'=> 'required',
            'date_final'=> 'required',
            'Start_Date'=> 'required',
            'View_website'=> 'required',
            'Client'=> 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'tags.*' => 'nullable|string|max:255',
            'Categorie_id'=>'required',
            'members.*' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $imagePaths[] = $imageName;
            }

            // Add the image paths to the validated data

            $validatedData['images'] = json_encode($imagePaths);
        }

      
        // Store the main photo associated with the project

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('projects','public');
            $validatedData['photo'] = $photoPath;
        }
        
  
        $project = project::create($validatedData);

        if ($request->filled('tags')) {
            $tags = $request->input('tags');
            $project->tags()->attach($tags);
        }
        if ($request->filled('members')) {
            $members = $request->input('members');
            $project->members()->attach($members);
        }
    
    
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projects=project::paginate(3);
        
        $project = Project::findOrFail($id);
        $project->load('members');
        $project->load('tags');
        $Settings = Setting::paginate(1);
        $teams=team::paginate(1);
        // $project = project::findOrFail($id);
        return view('projects.show', compact('project','Settings','projects', 'teams'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $projects_Types=project::all();
        $project = project::findOrFail($id);
        $tags=Tag::all();
        $Categories=Categorie::all();
        $Members=Member::all();
        return view('projects.edit', compact('project','tags','Categories','Members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
            'description'=> 'required',
            'date_final'=> 'required',
            'Start_Date'=> 'required',
            'View_website'=> 'required',
            'Client'=> 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'tags.*' => 'nullable|string|max:255',
            'Categorie_id'=>'required',
            'members.*' => 'nullable|string|max:255',
            
           

        ]);

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $imagePaths[] = $imageName;
            }

            // Add the image paths to the validated data

            $validatedData['images'] = json_encode($imagePaths);
        }

      
        // Store the main photo associated with the project

        
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('projects','public');
            $validatedData['photo'] = $photoPath;
        }
        
    
        $project=project::findOrFail($id);
        $project->update($validatedData);
        
        if ($request->filled('tags')) {
            $tags = $request->input('tags');
            $project->tags()->attach($tags);
        }
        if ($request->filled('members')) {
            $members = $request->input('members');
            $project->members()->attach($members);
        }
     
        return to_route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        project::findOrFail($id)->delete();
        return to_route('projects.index');
    }
}
