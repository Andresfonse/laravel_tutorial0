<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::all();

      
        return view ('cursos', compact('cursos'));
    }   

    public function create(){
        return view ('create');
    }

    public function show($curso){
        return view ('show'). $curso;
    }
}
