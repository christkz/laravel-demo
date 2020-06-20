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

        $request->validate([
          'cat_name'=>'required'

        ]);

         $category = new Category();
         $category ->cat_name = $request->cat_name;
         $category->save();
         return redirect('categories');
     }
     //depandence 
     public function edit(Category $category)
     {
         # code...
         $category= Category::find($category->id);
         return view('categories/edit', [
          'category'=>$category
         ]);
     }
     public function update(Request $request,Category $category)
     {
         # code...
         $category->cat_name = $request->cat_name;
         $category->save();
         return redirect('categories');
     }
     public function destroy(Category $category)
     {
         # code...
         $category=Category::find($category->id);
         $category->delete();
         return redirect('categories');
     }
 
}