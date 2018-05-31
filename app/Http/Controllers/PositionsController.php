<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Http\Resources\Positions as PositionsResource;
use App\Http\Resources\Position as PositionResource;

class PositionsController extends Controller
{
    public function index(){
        return PositionsResource::collection(Position::all());
    }
 
    public function show($id){
        return new PositionResource(Position::findOrFail($id));
    }
}
