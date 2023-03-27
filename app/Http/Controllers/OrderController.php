<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Item;
use App\Models\Category;
use App\Http\Requests\OrderRequest;
class OrderController extends Controller
{
    public function index(){
        $paginate=10;
        $orders = Order::with("item")->select("*")->paginate($paginate);
        return view('admin.show_orders')->with('order' , $orders);
    }

    public function client(){
        $mealClient = Item::with('category')->select('*')->get();
        $categorySort= Category::select("*")->get();
        return view('client.index')->with('meal' , $mealClient)->with('sort' , $categorySort);
    }

    public function sort(Request $request){
        $cSort= $request['categorySort'];
        $mealClient = Item::with('category')->where("category_id" , $cSort)->select('*')->get();
        $categorySort= Category::select("*")->get();
        return view('client.index')->with('meal' , $mealClient)->with('sort' , $categorySort);
    }


    public function create(Request $request){
        $id=$request['id'];
        $meal=Item::with('category')->where("id" , $id)->select('*')->get();
        return view('client.order')->with("id" , $id)->with("meal" , $meal);
    }

    public function store(OrderRequest $request){
        $id=$request['id'];
        $nameOfClient=$request['name'];
        $phone=$request['phone'];
        $location=$request['location'];
        $quentity=$request['quentity'];


        $order = new Order();
        $order->item_id=$id;
        $order->name_of_client=$nameOfClient;
        $order->phone=$phone;
        $order->location=$location;
        $order->quentity=$quentity;
        // Session(['alert1' => "alert alert-success" ,'msg' => "Attempt Your Order"]);
        $order->save();


        return $this->client()->with('success' , "Attempt Your Request");

    }

    public function destroy(Request $request){
        $id = $request['id'];
        Order::where('id' , $id)->delete();
        return redirect()->back();
    }
}
