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
				<h1 class="page-header">Order</h1>
			</div>
        </div><!--/.row-->
    <a href="{{url('/orders/create')}}">
        <button type="submit"  class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span>
        New product
    
    </button>
    </a>
        
        <table class="table">

        <thead>
 
        <tr>

            <th>Id_Order</th>
            <th>customer_name</th>
            <th>Product_name</th>
            <th>quantity</th>
            <th>Total</th>
        </tr>

        </thead>
        <tbody>
        @foreach($orders as $order): 
            <tr>
                <td> <?= $order->id; ?></td>
                <td> <?= $order->first_name; ?></td>
                <td> <?= $order->product_name; ?></td>
                <td> <?= $order->quantity; ?></td>
                <td> <?= $order->total; ?></td>
                <td>
                    <a href="orders/edit/{{$order->id}}">
                    
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span class="glyphicon glyphicon-edit"> Edit</span>   
                    </button>

                    </a>

                    
                  
                    <form action="orders/destroy/{{$order->id}}" method="POST"> 
                    @csrf     
                        <button type="submit" onclick="return confirm('voulez-vous vraiment supprimer')" class="btn btn-sm btn-danger">
                            <span class="glyphicon glyphicon-trash"> Delete</span> 
                        </button>
                    </form>
             
                        </td>
            </tr>
             @endforeach
        </tbody>
    
        </table>
       
      
</body>
</html>
@endsection