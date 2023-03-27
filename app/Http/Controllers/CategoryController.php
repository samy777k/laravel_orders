<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.insert_category');
    }

    public function store(Request $request){
        $name=$request['category'];
        $category = new Category();
        $category->name_of_Category=$name;
        $category->save();

        return redirect()->back()->with('status' , $category);

    }

    public function index(){
        $paginate=10;
        $categories = Category::select("*")->paginate($paginate);
        return view('admin.show_category')->with('category' , $categories);

    }

    public function edite(Request $request){
        $id=$request['ide'];
        $category = Category::select("*")->where('id' , $id)->get();
        $index=$category[0];
        return view('admin.edite_category')->with('categoryItem' , $index);
    }

    public function update(Request $request){
        $id=$request['idu'];
        $name=$request['category'];
        Category::where('id' , $id)->update(['name_of_Category' => $name]);
        return $this->index()->with("status" , "success");
    }



    public function destroy(Request $request){
        $id=$request['id'];
        $status=Category::where('id' , $id)->delete();

        return redirect()->back();
    }

}
