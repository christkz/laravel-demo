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
				<h1 class="page-header">Categories</h1>
			</div>
        </div><!--/.row-->
    <a href="{{url('/categories/create')}}">
        <button type="submit"  class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span>
        Nouveau categorie
    
    </button>
    </a>
        
        <table class="table">

        <thead>
 
        <tr>

            <th>Id_categorie</th>
            <th>Nom-categorie</th>
            <th>Action</th>
        </tr>

        </thead>
        <tbody>
        <?php foreach($categories as $category): ?>
            <tr>
                <td> <?= $category->id; ?></td>
                <td> <?= $category->cat_name; ?></td>
                <td>
                    <a href="categories/edit/{{$category->id}}">
                    
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span class="glyphicon glyphicon-edit"> Edit</span>   
                    </button>

                    </a>

                    
                    <form action="categories/destroy/{{$category->id}}" method="post"> 
                    @csrf     
                        <button type="submit" class="btn btn-sm btn-danger">
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