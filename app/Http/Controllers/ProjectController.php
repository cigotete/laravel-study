<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::orderBy("id", "asc")->paginate(2);
        return view('projects.index', ['projects' => $projects]);
    }

    public function show($id)
    {
        //
        $project = Project::findOrFail($id);
        return view('projects.show', ['project' => $project]);
    }

}
