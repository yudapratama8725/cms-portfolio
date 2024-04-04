<?php

namespace App\Http\Controllers;

use App\Models\Project;

class FrontController extends Controller
{
    public function index(){
        $projects = Project::orderBy('id', 'desc')->take(6)->get();
        return view('front.index', [
            'projects' => $projects
        ]);
    }

    public function details(Project $project){
        return view('front.details', [
            'project' => $project
        ]);
    }

    public function book(){
        return view('front.book');
    }
}
