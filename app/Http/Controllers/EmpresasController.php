<?php

namespace TSFI\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TSFI\Empresas;

class EmpresasController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $page =10;
        $taula = empresas::orderBy('id_empresa')->paginate($page);

        return view('adminlte::empresas',['dades'=>$taula]);
    }

}
