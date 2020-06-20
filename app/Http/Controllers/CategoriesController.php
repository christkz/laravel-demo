<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller{

   public function index()
   {
       # code...
       $categories = Category::all();
       return view('categories/index',[
        
        'categories'=> $categories

       ]);
   }
     public function create()
     {
         # code...
         return view('categories/create');
     }

     public function store(Request $request)
     {
         # code...
         $category = new Category();
         $category ->cat_name = $request->cat_name();
         $category->save();
         return redirect('categories');
     }


}