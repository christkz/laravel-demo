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
				<h1 class="page-header">Update Products</h1>
			</div>
        </div><!--/.row-->
		<form role="form" action="/products/{{$product->id}}" method="post">
		@csrf 
		@method('PUT')
				<div class="form-group">
					<label for="cat_name">Category name</label>
						<select name="category_id" id="" class="form-control">
                         <!-- <option value="{{$category->id}}">{{$category->cat_name}}</option> -->
								<option value="">Select category...</option>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->cat_name}}</option>
								@endforeach
						</select>
				 </div>
				 <div class="form-group">
						<label for="">Product name</label>
						<input type="text" name="product_name" id="" value="{{$product->product_name}}" class="form-control" class="@error('product_name') is-danger @enderror" placeholder="" aria-describedby="helpId">
						@error('product_name')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
				 </div>
				 <div class="form-group">
						<label for="">Unit price</label>
						<input type="text" name="unit_price" id="" value="{{$product->unit_price}}" class="form-control" class="@error('unit_price') is-danger @enderror" placeholder="" aria-describedby="helpId">
						@error('unit_price')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
                </div>
								<button type="submit" class="btn btn-primary">
                                 <span class="glyphicon glyphicon-save"></span>    
                                     Save</button>
								<button type="reset" class="btn btn-default">Annuler</button>
</form>
</body>
</html>
@endsection