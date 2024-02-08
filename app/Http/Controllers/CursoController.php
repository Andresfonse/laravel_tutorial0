<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view ('cursos');
    }

    public function create(){
        return view ('create');
    }

    public function show($curso){
        return view ('show'). $curso;
    }
}
