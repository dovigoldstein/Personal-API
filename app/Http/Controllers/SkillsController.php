<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Http\Resources\Skills as SkillsResource;

class SkillsController extends Controller
{
    public function index(){
        return SkillsResource::collection(Skill::all());
    }
}
