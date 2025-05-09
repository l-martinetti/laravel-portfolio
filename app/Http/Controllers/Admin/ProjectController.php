<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->Name = $data['Name'];
        $newProject->Client = $data['Client'];
        $newProject->Time = $data['Time'];
        $newProject->Brief = $data['Brief'];

        $newProject->save();

        return redirect()->route("admin.projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project = Project::find($project->id);

        return view('admin.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.edit', compact('project'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->Name = $data['Name'];
        $project->Client = $data['Client'];
        $project->Time = $data['Time'];
        $project->Brief = $data['Brief'];

        $project->update();

        return redirect()->route('admin.projects.show', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
