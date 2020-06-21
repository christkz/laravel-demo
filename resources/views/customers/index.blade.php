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
				<h1 class="page-header">Customers</h1>
			</div>
        </div><!--/.row-->
    <a href="{{url('/customers/create')}}">
        <button type="submit"  class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span>
        Nouveau customer
    
    </button>
    </a>
        
        <table class="table">

        <thead>
 
        <tr>

            <th>Id_customer</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Tel</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        </thead>
        <tbody>
        <?php foreach($customers as $customer): ?>
            <tr>
                <td> <?= $customer->id; ?></td>
                <td> <?= $customer->first_name; ?></td>
                <td> <?= $customer->last_name; ?></td>
                <td> <?= $customer->tel; ?></td>
                <td> <?= $customer->email; ?></td>
                <td> <?= $customer->address; ?></td>
                <td>
                    <a href="customers/edit/{{$customer->id}}">
                    
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span class="glyphicon glyphicon-edit"> Edit</span>   
                    </button>

                    </a>

                    <form action="customers/destroy/{{$customer->id}}" method="post"> 
                    @csrf     
                        <button type="submit" onclick="return confirm('voulez-vous vraiment supprimer')" class="btn btn-sm btn-default">
                            <span class="glyphicon glyphicon-trash"> Delete</span> 
                        </button>
                    </form>
                    
                        </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    
        </table>
       
      
</body>
</html>
@endsection