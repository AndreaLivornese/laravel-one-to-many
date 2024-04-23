<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = new Project();

        $projects = $data->all();

        return view('admin.dashboard', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        
        $data= $request->all();

        $newProject = new Project();

        // inserimento dell'immagine nella cartella "project_img"
        $img_path = Storage::put('project_img', $data['img']);
        $newProject->img = $img_path;

        $newProject->name= $data['name'];
        $newProject->username_creator=$data['username_creator'];
        $newProject->link_github = $data['link_github'];
        $newProject->program_langs=$data['program_langs'];

        $newProject->save();

        return redirect()->route('admin.index');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('admin.specs', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        // dd($project);

        $project = Project::find($id);

        return view("admin.projectEdit", compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request,  $id)
    {

        $project = Project::find($id);

        $data= $request->all();

        // dd($data);
        // aggiornamento dell'immagine 
        $img_path = Storage::put('project_img', $data['img']);

        // dd($img_path);

        $project->img = $img_path;

        $project->name= $data['name'];
        $project->username_creator=$data['username_creator'];
        $project->link_github = $data['link_github'];
        $project->program_langs=$data['program_langs'];

        $project->save();

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        $project->delete();

        return redirect()->route('admin.index');
    }
}
