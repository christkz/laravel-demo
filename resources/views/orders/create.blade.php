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
				<h1 class="page-header">Add Order</h1>
			</div>
        </div><!--/.row-->
		<form role="form" action="{{url('orders')}}" method="post">
		{{csrf_field()}}
						<div class="form-group">
							<label for='first_name'>First Name</label>
							<Select name="customer_id" id="" class="forme-control"
									class="@error('first_name') is-danger @enderror">
									<option value="">Select Order</option>
										@foreach($customers as $customer)
										<option value="{{$customer->id}}">{{$customer->first_name}}</option>
										@endforeach
										@error('customer_id')
									<div class="alert alert-danger">{{$message}}</div>
									@enderror
							</Select>
						</div>
						<div class="form-group">
							<label for='first_name'>Product Name</label>
							<Select name="product_id" id="" class="forme-control"
									class="@error('product_name') is-danger @enderror">
									<option value="">Select product</option>
										@foreach($products as $product)
										<option value="{{$product->id}}">{{$product->product_name}}</option>
										@endforeach
										@error('product_id')
									<div class="alert alert-danger">{{$message}}</div>
									@enderror
							</Select>
						</div>
			<div class="form-group">
                    <label for="">Quantity</label>
                    <input type="text" name="quantity" id="" class="form-control" 
                    class="@error('quantity') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('quantity')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
			 </div>
			 <div class="form-group">
                    <label for="">Total</label>
                    <input type="text" name="total" id="" class="form-control" 
                    class="@error('total') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('total')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
				</div>
				
				<button type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-save"> </span>
										save</button>
									
                                <button class="btn btn-default" type="reset">Reset</button>
									
								</div>

								
									
</form>
</body>
</html>
@endsection