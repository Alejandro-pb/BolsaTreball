<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Alumnos;

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
        $taula = Alumnos::orderBy('nom')->get();
        return view('home',['dades'=>$taula]);
    }

    public function insertDada(Request $request)
    {
        $dada = new Dada;
        $dada->nom = $request->input('informacio');
        $dada->save();
    }

    public function deleteDada(Request $request)
    {
        $deleteDada = Dada::where('id_dada',$request->input('data'));
        $deleteDada->delete();
    }
}
