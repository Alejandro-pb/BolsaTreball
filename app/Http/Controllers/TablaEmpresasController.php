<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Empresas;

class TablaAlumnosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taula = Empresas::orderBy('id_empresa')->get();
        return view('empresas',['dades'=>$taula]);
    }

    public function insertDada(Request $request)
    {
        $dada = new Empresas;
        $dada->nom = $request->input('informacio');
        $dada->save();
    }

    public function deleteDada(Request $request)
    {
        $deleteDada = Dada::where('id_dada',$request->input('data'));
        $deleteDada->delete();
    }
}
