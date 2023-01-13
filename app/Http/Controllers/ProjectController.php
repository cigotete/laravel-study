<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveProjectRequest;
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
        return view('projects.create',  [
            'project' => new Project // new Project object is passed in order to normalize create and edit form views.
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        Project::create( $request->validated() );
        //Project::create( request()->all() ); //Not recommended due allow other fields.
        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        //
        return view('projects.edit', ['project' => $project]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update( $request->validated() );
        return redirect()->route('projects.show', $project);
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
