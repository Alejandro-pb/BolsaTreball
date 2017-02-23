
@extends('adminlte::layouts.app')

@section('main-content')
@if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach($errors->all() as  $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>   
        </div>
@endif
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion"> 
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th-list">
                            </span>Empresa</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                
                              <form method="POST" action="{{ action('EmpresaController@Actualizar') }}" enctype="multipart/form-data">  
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Imagen</label>
                                            <input type="file" id="ImagenEmpresa" class="form-control" placeholder="Title" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>CIF</label>
                                            <input type="text" id="CIF" class="form-control" placeholder="Description" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" id="Nombre" class="form-control" placeholder="Description"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Como describiria su empresa en unas lineas</label>
                                        <textarea class="form-control" id="Descripcion" placeholder="Keywords" ></textarea>
                                    </div>
                                    
                                </div>   
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h2>Contacto</h2>
                                        <div class="form-group">
                                            <label>Direccion(*)</label>
                                            <input type="text" id="Direccion" class="form-control" placeholder="Description"  />
                                        </div>
                                        <div class="form-group">
                                            <label>Provincia(*):</label>
                                            <select id="Provincia" class="form-control">
                                                <option value="Barcelona">Barcelona</option>
                                                <option value="Madrid">Madrid</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Localidad(*):</label>
                                            <select id="Provincia" class="form-control">
                                                <option value="Barcelona">Barcelona</option>
                                                <option value="Madrid">Madrid</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Codigo Postal(*)</label>
                                            <input type="text" id="CP" class="form-control" placeholder="Description"  />
                                        </div>
                                        <div class="form-group">
                                            <label>Email(*):</label>
                                            <input type="text" id="Email" class="form-control" placeholder="Description"  />
                                        </div>
                                        <div class="form-group">
                                           <label>Web:</label>
                                           <input type="text" id="Web" class="form-control" placeholder="Description"  />
                                        </div>

                                        <h2>Redes Sociales</h2>
                                        <div class="form-group">
                                           <label>Facebook:</label>
                                           <input type="text" id="Facebook" class="form-control" placeholder="Description"  />
                                        </div>
                                        <div class="form-group">
                                           <label>Twitter:</label>
                                           <input type="text" id="Twitter" class="form-control" placeholder="Description"  />
                                        </div>
                                        <div class="form-group">
                                           <label>Skype:</label>
                                           <input type="text" id="Skype" class="form-control" placeholder="Description"  />
                                        </div>
                                        <div class="form-group">
                                           <label>Google +:</label>
                                           <input type="text" id="Google" class="form-control" placeholder="Description"  />
                                        </div>
                                        <div class="form-group">
                                           <label>Flicker:</label>
                                           <input type="text" id="Flicker" class="form-control" placeholder="Description"  />
                                        </div>
                                        <div class="form-group">
                                           <label>Youtube:</label>
                                           <input type="text" id="Youtube" class="form-control" placeholder="Description"  />
                                        </div>
                                        <input type="submit" value="Actualizar" class="btn btn-default"></input>
                                    </div>
                                    <div class="col-md-6">
                                            <h2>Contacto Telefonico</h2>
                                            <div class="form-group">
                                               <label>Contacto Telefonico:</label>
                                               <input type="text" id="Telefono" class="form-control" placeholder="Description"  />
                                            </div>
                                            <div class="form-group">
                                               <label>Fax:</label>
                                               <input type="text" id="Fax" class="form-control" placeholder="Description"  />
                                            </div>
                                            <div class="form-group">
                                               <label>Movil:</label>
                                               <input type="text" id="Movil" class="form-control" placeholder="Description"  />
                                            </div>
                                            <div class="form-group">
                                               <label>Persona de contacto:</label>
                                               <input type="text" id="Contacto" class="form-control" placeholder="Description"  />
                                            </div>
                                            <div class="form-group">
                                               <label>Gerente:</label>
                                               <input type="text" id="Gerente" class="form-control" placeholder="Description"  />
                                            </div>
                                            <div class="form-group">
                                               <label>Empresa:</label>
                                               <input type="radio" name="Empresa" value="Privada"  placeholder="Description" >Privada</input>
                                               <input type="radio" name="Empresa" value="Publica"  placeholder="Description" >Publica</input>
                                            </div>
                                            <div class="form-group">
                                               <label>Distancia del centro (km):</label>
                                               <input type="text" id="Distancia" class="form-control" placeholder="Description"  />
                                            </div>   
                                            <div class="form-group">
                                               <label>Nº Trabajadores:</label><input type="text" id="Trabajadores" class="form-control" placeholder="Description"  />
                                            </div>    
                                            <div class="form-group">
                                              <label>Tipo de empresa:</label> 
                                                <input type="radio" name="TEmpresa" value="Fundacion"  placeholder="Description" >Fundacion</input>
                                                <input type="radio" name="TEmpresa" value="Sin animo de lucro"  placeholder="Description" >Sin animo de lucro</input>
                                               <input type="radio" name="TEmpresa" value="Otro ( S.A, S.L., S.  COOP )"  placeholder="Description" >Otro ( S.A, S.L., S.  COOP )</input>
                                            </div>
                                            <div class="form-group">
                                               <label>Actividad Principal:</label>
                                               <input type="text" id="ActividadPrincipal" class="form-control" placeholder="Description"  />
                                            </div>  
                                            
                                    </div>
                                    

                                </div>
                               
                                
                                    
                                    
                                
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection