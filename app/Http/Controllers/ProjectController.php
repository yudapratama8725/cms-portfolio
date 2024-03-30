<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('admin.projects.index', [
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|in:Website Development, App Development,     graphic Design, Digital Marketing',
            'cover' => 'required|image|mimes:png|max:2048',
            'about' => 'required|string|max:65535'
        ]); 


        //Memastikan Semua Data Terisi Dengan Benar Masuk ke Database
        DB::beginTransaction();

        try{
            if($request->hasFile('cover')){
                $path = $request->file('cover')->store('projects', 'public');
                $validated['cover'] = $path;
            }

            $validated['slug'] = Str::slug($request->name);

            $newProject = Project::create($validated);

            DB::commit();

            return redirect()->route('admin.projects.index')->with('success', 'Project created successfully');
        }
        //Jika Data Tidak Valid Maka Data Tidak Akan Masuk Ke Database / Rollback
        catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'System Error!'.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.index', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
