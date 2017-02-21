<?php

namespace TSFI\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TSFI\Empresas;
use Yajra\Datatables\Facades\Datatables;

class EmpresasController extends Controller
{
    //
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
      $empresas = Empresas::all();
      return view('adminlte::empresas')->with('empresas', $empresas);
    }

    public function insertEmpresa(Request $request)
    {
        $empresa = new Empresas;
        $empresa->nom = ucfirst($request->input('nom'));
        $empresa->imatge = $request->input('imatge');
        $empresa->save();
    }

    public function deleteEmpresa($id)
    {
        $deleteCEmp = Empresas::find($id);
        $deleteEmp->delete();
    }

    public function updateEmpresa(Request $request)
    {

        $empresa=Empresas::find($request->input('id'));
        $empresa->nom=ucfirst($request->input('nom'));
        $categoria->save();

    }
    public function datatable()
    {
      $empresa = Empresas::all();
      return Datatables::of($empresa)
          ->addColumn('edit', function ($empresa) {
              return '<button value="'.$empresa->id.'" data-toggle="modal" data-target="#myModalEmpresa3" class="editar btn btn-xs btn-primary"><i class="fa fa-edit"></i> Modificar</button>';
          })
          ->addColumn('delete', function ($empresa) {
              return '<button value="'.$empresa->id.'" data-toggle="modal" data-target="#myModalEmpresa1" class="eliminar btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Eliminar</button>';
          })
          ->make(true);
    }

}
