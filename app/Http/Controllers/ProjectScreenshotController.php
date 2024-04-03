<?php

namespace App\Http\Controllers;

use App\Models\ProjectScreenshot;
use Illuminate\Http\Request;

use App\Models\Tool;
use App\Models\Project;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectScreenshotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        return view('admin.project_screenshot.create', [
            'project' => $project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        //Request
        $validated = $request->validate([
            'screenshot' => 'required|image|mimes:png|max:10048',
        ]); 


        //Memastikan Semua Data Terisi Dengan Benar Masuk ke Database
        DB::beginTransaction();

        try{
            if($request->hasFile('screenshot')){
                $path = $request->file('screenshot')->store('project_screenshot', 'public');
                $validated['screenshot'] = $path;
            }

            $validated ['project_id'] = $project->id;

            $newScreenshot = ProjectScreenshot::create($validated);

            DB::commit();

            return redirect()->back()->with('success', 'Screenshot Added successfully');
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
    public function show(ProjectScreenshot $projectScreenshot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectScreenshot $projectScreenshot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectScreenshot $projectScreenshot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectScreenshot $projectScreenshot)
    {
        //
        try {
            $projectScreenshot->delete();
            return redirect()->back()->with('success', 'Screenshot deleted sucessfully!');
        } 
        //Jika Data Tidak Valid Maka Data Tidak Akan Masuk Ke Database / Rollback
        catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'System Error!'.$e->getMessage());
        }
    }
}
