<?php

namespace TSFI\Http\Controllers;

use Illuminate\Http\Request;
use TSFI\Empresas;
use TSFI\Http\Requests\EmpresaRequest;
class EmpresaController extends Controller
{
    //
	public function Empresa (){
		$Empresa = Empresa::where('IdEmpresa', 1)->first();

		return view('empresaform')->with('Empresa', $Empresa);
	}

    protected function Actualizar(Request $empresa){
    	$Empresa = Empresas::where('IdEmpresa', 1)->first();
    	//$file = $empresa->file('ImagenEmpresa');
        //$nombreimagen = $file->getClientOriginalName();
        //\Storage::disk('local')->put($nombreimagen, \File::get($file));
    	//$Empresa -> Imagen = $nombreimagen;
    	$Empresa -> Descripcion_Empresa = $empresa -> Descripcion;
    	$Empresa -> CIF = $empresa -> CIF;
    	$Empresa -> Nombre = $empresa -> Nombre;
    	$Empresa -> Direccion = $empresa -> Direccion;
    	$Empresa -> Provincia = $empresa -> Provincia;
    	$Empresa -> Localidad = $empresa -> Localidad;
    	$Empresa -> Codigo_Postal = $empresa -> CP;
    	$Empresa -> Email = $empresa -> Email;
    	$Empresa -> Web = $empresa -> Web;
    	$Empresa -> TelefFijo = $empresa -> Telefono;
    	$Empresa -> Fax = $empresa -> Fax;
    	$Empresa -> Movil = $empresa -> Movil;
    	$Empresa -> Persona_Contacto = $empresa -> Contacto;
    	$Empresa -> Gerente = $empresa -> Gerente;
    	$Empresa -> Empresa = $empresa -> empresa;
    	$Empresa -> Distancia_Centro = $empresa -> Distancia;
    	$Empresa -> Numero_Trabajadores = $empresa -> Numero_Trabajadores;
    	$Empresa -> Tipo_Empresa = $empresa -> TEmpresa;
    	$Empresa -> Actividad_Principal = $empresa->ActividadPrincipal;
    	$Empresa -> Facebook = $empresa -> Facebook;
  		$Empresa -> Twitter = $empresa -> Twitter;
  		$Empresa -> Skype = $empresa -> Skypes;
  		$Empresa -> Google = $empresa -> Google;
  		$Empresa -> Flicker = $empresa -> Flicker;
  		$Empresa -> Youtube = $empresa -> Youtube; 
  		$Empresa -> Save();
  		return redirect()->action('EmpresaController@Empresa'); 		  	
    }
}
