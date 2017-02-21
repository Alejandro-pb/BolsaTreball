@extends('adminlte::layouts.app')

@section('htmlheader_title')
	
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<?php //{{ trans('adminlte_lang::message.logged') }}?>

					<div class="box box-danger col-xs-6">
			            <div class="box-header with-border">
			              <h3 class="box-title">Donut Chart</h3>

			              <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
			                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			              </div>
			            </div>
			            <div class="box-body">
			              <canvas id="mycanvas" height="269" width="539"></canvas>
			            </div>
			            <!-- /.box-body -->
		        	</div>
		        	<div class="box box-danger col-xs-6">
		        		<div class="box-header with-border">
			              <h3 class="box-title">Donut Chart</h3>

			              <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
			                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			              </div>
			            </div>
			            <div class="box-body">
			              <canvas id="mycanvas2" height="269" width="539"></canvas>
			            </div>
		        	</div>
		        	<div class="box box-danger col-xs-6">
		        		<div class="box-header with-border">
			              <h3 class="box-title">Donut Chart</h3>

			              <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
			                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			              </div>
			            </div>
			            <div class="box-body">
			              <canvas id="mycanvas3" height="269" width="539"></canvas>
			            </div>
		        	</div>
		        	<div class="box box-danger col-xs-6">
		        		<div class="box-header with-border">
			              <h3 class="box-title">Donut Chart</h3>

			              <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
			                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			              </div>
			            </div>
			            <div class="box-body">
			              <canvas id="mycanvas4" height="269" width="539"></canvas>
			            </div>
		        	</div>
		        	<div class="box box-danger col-xs-6">
		        		<div class="box-header with-border">
			              <h3 class="box-title">Donut Chart</h3>

			              <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
			                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			              </div>
			            </div>
			            <div class="box-body">
			              <canvas id="mycanvas5" height="269" width="539"></canvas>
			            </div>
		        	</div>
		        	<div class="box box-danger col-xs-6">
		        		<div class="box-header with-border">
			              <h3 class="box-title">Donut Chart</h3>

			              <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
			                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			              </div>
			            </div>
			            <div class="box-body">
			              <canvas id="mycanvas6" height="269" width="539"></canvas>
			            </div>
		        	</div>
				</div>
				
			</div>
		</div>
	</div>
	<script>
			$(document).ready(function(){
				var ctx = $("#mycanvas").get(0).getContext("2d");

				//pie chart data
				//sum of values = 360
				var data = [
					{
						value: 270,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "Corn Flower Blue"
					},
					{
						value: 50,
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Lightgreen"
					},
					{
						value: 40,
						color: "orange",
						highlight: "darkorange",
						label: "Orange"
					}
				];

				//draw
				var piechart = new Chart(ctx).Doughnut(data);
			});
			$(document).ready(function(){
				var ctx = $("#mycanvas2").get(0).getContext("2d");

				//pie chart data
				//sum of values = 360
				var data = [
					{
						value: 270,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "Corn Flower Blue"
					},
					{
						value: 50,
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Lightgreen"
					},
					{
						value: 40,
						color: "orange",
						highlight: "darkorange",
						label: "Orange"
					}
				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
			});
			$(document).ready(function(){
				var ctx = $("#mycanvas3").get(0).getContext("2d");

				//pie chart data
				//sum of values = 360
				var data = [
					{
						value: 270,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "Corn Flower Blue"
					},
					{
						value: 50,
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Lightgreen"
					},
					{
						value: 40,
						color: "orange",
						highlight: "darkorange",
						label: "Orange"
					}
				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
			});
			$(document).ready(function(){
				var ctx = $("#mycanvas4").get(0).getContext("2d");

				//pie chart data
				//sum of values = 360
				var data = [
					{
						value: 270,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "Corn Flower Blue"
					},
					{
						value: 50,
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Lightgreen"
					},
					{
						value: 40,
						color: "orange",
						highlight: "darkorange",
						label: "Orange"
					}
				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
			});
			$(document).ready(function(){
				var ctx = $("#mycanvas5").get(0).getContext("2d");

				//pie chart data
				//sum of values = 360
				var data = [
					{
						value: 270,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "Corn Flower Blue"
					},
					{
						value: 50,
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Lightgreen"
					},
					{
						value: 40,
						color: "orange",
						highlight: "darkorange",
						label: "Orange"
					}
				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
			});
			$(document).ready(function(){
				var ctx = $("#mycanvas6").get(0).getContext("2d");

				//pie chart data
				//sum of values = 360
				var data = [
					{
						value: 270,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "Corn Flower Blue"
					},
					{
						value: 50,
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Lightgreen"
					},
					{
						value: 40,
						color: "orange",
						highlight: "darkorange",
						label: "Orange"
					}
				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
			});
		</script>
	</script>
@endsection
