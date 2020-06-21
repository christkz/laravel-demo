@extends('templates.default_layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metalusa</title>
</head>
<body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Customer</h1>
			</div>
        </div><!--/.row-->
		<form role="form" action="/customers/{{$customer->id}}" method="post">
		@csrf 
		@method('PUT')
								<div class="form-group">
									<label>First_name</label>
									<input class="form-control" name="first_name" value="{{($customer->first_name)}}" class = placeholder="First_name">
								</div>

								<div class="form-group">
									<label>Last_name</label>
									<input class="form-control" name="last_name" value="{{($customer->last_name)}}" class = placeholder="Last_name">
								</div>

								<div class="form-group">
									<label>Tel</label>
									<input class="form-control" name="tel" value="{{($customer->tel)}}" class = placeholder="telephone">
								</div>
								
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" value="{{($customer->email)}}" class = placeholder="email">
								</div>

								<div class="form-group">
									<label>Address</label>
									<input class="form-control" name="address" value="{{($customer->address)}}" class = placeholder="Address">

		

								<button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-save"></span>    
                                Enregistre</button>
									<button type="reset" class="btn btn-default">Annuler</button>
</form>
</body>
</html>
@endsection