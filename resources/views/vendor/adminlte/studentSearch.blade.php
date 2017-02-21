@extends('adminlte::layouts.app')

@section('main-content')
	<div class="container">
        <div class="panel panel-default col-xs-12 container">
            <div class="panel-heading" style="background-color: #fff;">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-th-list">
                    </span>  Buscar alumnos</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
            		<form action="{{ action('StudentController@studentCreated') }}" method='GET' id="noticiaForm">
            			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			        	<div class="row">
			        		<div class="row col-xs-12">
								<div class="row col-xs-6">
									<div class="form-group col-xs-12">
										DNI/NIE:
										<input type="text" class="form-control" name="DNI" placeholder="Inserte el DNI/NIE">
									</div>

									<div class="form-group col-xs-12">
										Apellidos:
										<input type="text" class="form-control" name="apellidos" placeholder="Inserte el apellido">
									</div>

									<div class="form-group col-xs-12">
										Demanda empleo:
										<input type="checkbox" checked data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="danger" class="pull-right">
									</div>

									<div class="form-group col-xs-12">
										Trabajando:
										<input type="checkbox" checked data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="danger" class="pull-right">
									</div>

									<div class="form-group col-xs-12">
										Fin de curso:
										<div class="dropdown col-xs-12">
										    <button class="btn btn-default dropdown-toggle col-xs-12" type="button" data-toggle="dropdown"> Fecha actual
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu col-xs-12">
										      <li><a>Sí</a></li>
										      <li><a>No</a></li>
										    </ul>
									  	</div>
									</div>

									<div class="form-group col-xs-12">
										Provincia:
										<div class="dropdown col-xs-12">
										    <button class="btn btn-default dropdown-toggle col-xs-12" type="button" data-toggle="dropdown">Seleccione provincia
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu col-xs-12">
										      <li><a>Sí</a></li>
										      <li><a>No</a></li>
										    </ul>
									  	</div>
									</div>

									<div class="form-group col-xs-12">
										Ciclo formativo cursado:
										<div class="dropdown col-xs-12">
										    <button class="btn btn-default dropdown-toggle col-xs-12" type="button" data-toggle="dropdown">Seleccione ciclo formativo cursado
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu col-xs-12">
										      <li><a>Sí</a></li>
										      <li><a>No</a></li>
										    </ul>
									  	</div>
									</div>
								</div>

								<div class="row col-xs-6">
									<div class="form-group col-xs-12">
										Nombre: <br>
										<input type="text" class="form-control" name="nombre" placeholder="Inserte el nombre">
									</div>

									<div class="form-group col-xs-12">
										Confirmación:
										<input type="checkbox" checked data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="danger" class="pull-right">
									</div>

									<div class="form-group col-xs-12">
										Estudiando:
										<input type="checkbox" checked data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="danger" class="pull-right">
									</div>

									<div class="form-group col-xs-12">
										Inicio de curso:
										<div class="dropdown col-xs-12">
										    <button class="btn btn-default dropdown-toggle col-xs-12" type="button" data-toggle="dropdown">Seleccione el inicio de curso
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu col-xs-12">
										      <li><a>Sí</a></li>
										      <li><a>No</a></li>
										    </ul>
									  	</div>
									</div>
									
									<div class="form-group col-xs-12">
										Experiencia:
										<input type="checkbox" checked data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="danger" class="pull-right">
									</div>

									<div class="form-group col-xs-12">
										Localidad:
										<div class="dropdown col-xs-12">
										    <button class="btn btn-default dropdown-toggle col-xs-12" type="button" data-toggle="dropdown">Seleccione localidad
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu col-xs-12">
										      <li><a>Sí</a></li>
										      <li><a>No</a></li>
										    </ul>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12">
								<input type="submit" class="btn btn-default" value="Buscar">
					        	<input type="reset" class="btn btn-reset" value="Cancelar">
				        	</div>
						</div>
					</form>
                </div>
            </div>
        </div>
	</div>
@endsection