<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList()
    {
        $categories = Category::latest()->get();
        return view('userpanel.company.category.category-page',compact('categories'));
    }

    public function categoryCreate()
    {
        return view('userpanel.company.category.category-page');
    }

    public function categoryStore(Request $request){
        $request->validate([
       'category_name' => 'required|string|max:100',
   ]);

   Category::create($request->all());

   return redirect()->route('category-list')->with('success','Jobs Category Created Successfully');
    }

    public function categoryEdit(Category $categories){
        return view('userpanel.company.category.category-page',compact('categories'));
    }

    public function categoryUpdate(Request $request, Category $categories){

            $request->validate([
            'category_name' => 'required|string|max:100',
        ]);
        $categories->update($request->all());

        return redirect()->route('category-list')->with('success','Jobs Category Updated Successfully');
    }

    public function categoryDelete(Category $categories){
        $categories->delete();

        return redirect()->route('category-list')->with('success','Jobs Category Deleted Successfully');
    }
}
