<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "cursos Aqui";
    }

    public function create(){
        return "Aqui crearas un curso ";
    }

    public function show($curso){
        return "Aqui tu cursoo es: ". $curso;
    }
}
