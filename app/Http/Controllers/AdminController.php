<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
        return view('administrador.index');
    }

    public function crearestudiante(){

        return view('administrador.create');
    }

    public function verestudiante(){
        return view('administrador.show');
    }

    public function store(Request $request){
        $Student = new Student($request->all());
        $Student->save();
    }

    public function tables(){
        return view('administrador.tables');
    }
}
