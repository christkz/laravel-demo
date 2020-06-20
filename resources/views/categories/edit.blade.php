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
				<h1 class="page-header">Edit Categories</h1>
			</div>
        </div><!--/.row-->
		<form role="form" action="{{url('/categories/edit/')}}<?= $data['id'] ?>" method="post">
								<div class="form-group">
									<label>Text Input</label>
									<input class="form-control"  placeholder="Name_category">
								</div>

								<button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-save"></span>    
                                Enregistre</button>
									<button type="reset" class="btn btn-default">Annuler</button>
</form>
</body>
</html>
@endsection