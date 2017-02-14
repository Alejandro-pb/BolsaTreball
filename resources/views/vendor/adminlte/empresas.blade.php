@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }} <!-- HEADER DE LA PAGINA -->
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Empresas</div>

					<div class="panel-body">
						<p> PAGINA EMPRESAS </p>
						<table id="table-empresas" class="table text-center table-responsive">
							<th>Nombre empresa</th>
							<th>Direccion</th>
							<th>Campo 3</th>
							<th>Campo 4</th>
							<th>Campo 5</th>
							<th>Campo 6</th>
                            @foreach($dades as $date)
                                <tr>
                                    <td>{{ $date->nom_empresa }}</td>
                                    <td>{{ $date->direccio_empresa }}</td>
                                    <td>{{ $date->test_empresa }}</td>
                                    <td>{{ $date->testing_empresa }}</td>
                                    <td><button id="editarDada" class="btn btn-w-m btn-warning" value="{{ $date->id_empresa }}">Modificar</button></td>
                                    <td><button type="button" id="deleteDada" class="btn btn-w-m btn-danger" value="{{ $date->id_empresa }}">Eliminar</button></td>
                                </tr>
                            @endforeach                            
                    	</table>
					</div>
					<div class="pagintation">
							{{ $dades->hasMorePages() }}
							{{ $dades->links() }}	
					</div>				
					
					

				</div>
			</div>
		</div>
	</div>
<script>
$(document).ready(function() {
    $('#table-empresas').DataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );
} );
</script>
@endsection
