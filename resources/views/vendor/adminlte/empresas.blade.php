@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }} <!-- HEADER DE LA PAGINA -->
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Empresas</div>

					<div class="panel-body">
						<p> PAGINA EMPRESAS </p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
