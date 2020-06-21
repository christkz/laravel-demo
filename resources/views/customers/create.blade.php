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
				<h1 class="page-header">Add Customers</h1>
			</div>
        </div><!--/.row-->
		<form role="form" action="{{url('customers')}}" method="post">
         		@csrf
								<div class="form-group">
									<label>Frist_name</label>
									<input class="form-control" class="@error('first_name') is-danger @enderror" name="first_name" placeholder="First_name">
									@error('first_name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
								</div>

						   <div class="form-group">
								<label>Last_name</label>
								<input class="form-control" class="@error('last_name') is-danger @enderror" name="last_name" placeholder="Last_name">
								@error('last_name')
								<div class="alert alert-danger">{{$message}}</div>
									@enderror
							</div>

							<div class="form-group">
								<label>Telephone</label>
									<input class="form-control" class="@error('tel') is-danger @enderror" name="tel" placeholder="Name_category">
									@error('tel')
									<div class="alert alert-danger">{{$message}}</div>
									@enderror
							</div>

							<div class="form-group">
								<label>Email</label>
									<input class="form-control" class="@error('email') is-danger @enderror" name="email" placeholder="Name_category">
									@error('email')
									<div class="alert alert-danger">{{$message}}</div>
									@enderror
							</div>
							<div class="form-group">
								<label>Address</label>
									<input class="form-control" class="@error('address') is-danger @enderror" name="address" placeholder="Name_category">
									@error('address')
									<div class="alert alert-danger">{{$message}}</div>
									@enderror
							</div>
						

								<button type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-save"> </span>
						
								Save</button>
								<button type="reset">Reset</button>
									
</form>
</body>
</html>


@endsection