<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Resources\Projects as ProjectsResource;
use App\Http\Resources\Project as ProjectResource;

class ProjectsController extends Controller
{
    public function index(){
        return ProjectsResource::collection(Project::all());
    }
 
    public function show($id){
        return new ProjectResource(Project::findOrFail($id));
    }
}
