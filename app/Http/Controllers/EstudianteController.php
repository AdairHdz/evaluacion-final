<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstudianteRequest;
use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    function index()
    {
        $estudiantes = Estudiante::all();
        return view("pages.index")->with("estudiantes", $estudiantes);
    }

    function store(StoreEstudianteRequest $request)
    {
        
    }

    function destroy($studentId)
    {
        
    }    
}
