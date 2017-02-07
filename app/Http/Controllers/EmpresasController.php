<?php

namespace TSFI\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('adminlte::empresas');
    }

}
