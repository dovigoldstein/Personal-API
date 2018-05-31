<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;
use App\Http\Resources\Institutions as InstitutionsResource;
use App\Http\Resources\Institution as InstitutionResource;

class InstitutionsController extends Controller
{
    public function index(){
        return InstitutionsResource::collection(Institution::all());
    }
 
    public function show($id){
        return new InstitutionResource(Institution::findOrFail($id));
    }
}
