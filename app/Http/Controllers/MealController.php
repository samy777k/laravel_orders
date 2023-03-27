<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MealRequest;



class MealController extends Controller
{
   public function create(){
    $category_name=Category::select("*")->get();
       return view('admin.insert_meal')->with('category_name' , $category_name);
   }

   public function store(MealRequest $request){
       $name=$request['meal'];
       $price=$request['price'];
       $category=$request['category'];

        $img_name = '_img' . rand(00000 , 99999) . time() . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('upload/') , $img_name);


    //    // 2. name the file
    //    $time = Carbon::now();
    //    $directory = date_format($time,'Y').'/'.date_format($time,'m');
    //    $fileName = date_format($time,'h').date_format($time,'s').rand(1,9).'.'.$file->extension();
    //    // 3. upload
    //    Storage::disk('public')->putFileAs($directory,$file,$fileName);

       $meal= new Item();
       $meal->name = $name;
       $meal->price=$price;
       $meal->category_id=$category;
       $meal->image= $img_name;


       $meal->save();
       return redirect()->back()->with("statusMeal" , $meal);
   }

   public function index(){
       $paginate=10;
       $allMeal = Item::with('category')->select('*')->paginate($paginate);
       return view('admin.show_meal')->with('allMeal' , $allMeal);
   }

//    public function client(){
//     $mealClient = Item::with('category')->select('*')->get();

//     return view('client.index')->with('meal' , $mealClient);
// }

   public function edite(Request $request){
       $ide=$request['ide'];
       $meal=Item::select("*")->where('id' , $ide)->get();
       $category=Category::select("*")->get();
       $the_meal=$meal[0];
       return view('admin.edite_meal')->with('meal' , $the_meal)->with('category' , $category);
   }

   public function update(MealRequest $request){
       $idu = $request['idu'];
    $name = $request['meal'];
    $price = $request['price'];
    $category= $request['category'];

    $img_name = '_img' . rand(00000 , 99999) . time() . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('upload/') , $img_name);


    $status=Item::where('id' , $idu)->update(['name' => $name , 'price' => $price , 'category_id' => $category , 'image' => $img_name]);

    return $this->index()->with("statusUpdateMeal" ,$status);
   }

   public function destroy(Request $request){
       $id= $request['id'];
       Item::where('id' , $id)->delete();
       return redirect()->back();
   }
}
