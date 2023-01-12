<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateProjectRequest;
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
        $projects = Project::orderBy("id", "asc")->paginate(10);
        return view('projects.index', ['projects' => $projects]);
    }

    public function show(Project $project)
    {
        //
        return view('projects.show', ['project' => $project]);
    }

    public function create()
    {
        //
        return view('projects.create');
    }

    public function store(CreateProjectRequest $request)
    {
        Project::create( $request->validated() );
        //Project::create( request()->all() ); //Not recommended due allow other fields.
        return redirect()->route('projects.index');
    }
}
