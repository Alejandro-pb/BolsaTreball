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
						<div class="ibox-title">
	                        <h5>Categories:</h5>
	                            <a href="" data-toggle="modal" data-target="#myModalEmpresa2" class="pull-right btn btn-success btn-xs"><i class="fa fa-plus"></i> Nova empresa</a>
	                  		</div>
						<div class="table-responsive">
                            <table id="empresas" class="table table-striped table-hover dataTables-example" >
                                <thead>
                                    <th>Empresas</th>
                                    <th>Direccio</th>
                                    <th>Test</th>
                                    <th>Testing</th>
                                    <th class="tr-btn"></th>
                                    <th class="tr-btn"></th>
                                </thead>
                            </table>
                          </div>
                          @include('adminlte::modals.modalsEmpresas')
					</div>

					
					

				</div>
			</div>
		</div>

	</div>

<script>
</script>
@endsection
