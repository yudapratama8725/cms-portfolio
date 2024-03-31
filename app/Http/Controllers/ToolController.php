<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;
use App\Http\Controllers\ProjectToolController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Munculin Data Yang Soft Deletes
        // $projects = Project::withTrashed()->orderBy('id', 'desc')->get();
        // return view('admin.projects.index', [
        //     'projects' => $projects
        // ]);

        //Munculin Data Yang Tidak Soft Deletes
        $tools = Tool::orderBy('id', 'desc')->get();
        return view('admin.tools.index', [
            'tools' => $tools
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'logo' => 'required|image|mimes:png|max:10048',
        ]); 


        //Memastikan Semua Data Terisi Dengan Benar Masuk ke Database
        DB::beginTransaction();

        try{
            if($request->hasFile('logo')){
                $path = $request->file('logo')->store('tools', 'public');
                $validated['logo'] = $path;
            }

            $newTool = Tool::create($validated);

            DB::commit();

            return redirect()->route('admin.tools.index')->with('success', 'Tool created successfully');
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
    public function show(Tool $tool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tool $tool)
    {
        return view('admin.tools.edit', [
            'tool' => $tool
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tool $tool)
    {
        //Request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'logo' => 'sometimes|image|mimes:png|max:10048',
        ]); 


        //Memastikan Semua Data Terisi Dengan Benar Masuk ke Database
        DB::beginTransaction();

        try{
            if($request->hasFile('logo')){
                $path = $request->file('logo')->store('tools', 'public');
                $validated['logo'] = $path;
            }

            $tool->update($validated);

            DB::commit();

            return redirect()->route('admin.tools.index')->with('success', 'Tool updated successfully');
        }
        //Jika Data Tidak Valid Maka Data Tidak Akan Masuk Ke Database / Rollback
        catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'System Error!'.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tool $tool)
    {
        //
        try {
            $tool->delete();
            return redirect()->back()->with('success', 'Tool deleted sucessfully!');
        } 
        //Jika Data Tidak Valid Maka Data Tidak Akan Masuk Ke Database / Rollback
        catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'System Error!'.$e->getMessage());
        }
    }
}
