@extends('templates.default_layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Metalusa</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Metalusa</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-6 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-first-order color-"></em>
							<div class="large">Orders</div>
                      </div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-6 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-calendar color-dark"></em>
							<div class="large">Customers</div>
							
						</div>
					</div>
				</div>
							
			</div><!--/.row-->
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-6 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-product-hunt color-dark"></em>
							<div class="large">Products</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-6 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-user color-dark"></em>
							<div class="large">Profil</div>
							
						</div>
					</div>
				</div>
							
			</div><!--/.row-->
</body>
</html>