<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DeshboardController extends Controller
{
    public function counts(){
        $countC= DB::table('categorys')->select("*")->count();
        $countM= DB::table('items')->select("*")->count();
        $countO= DB::table('orders')->select("*")->count();

        return view("admin.dashboard")->with("countC" , $countC)->with("countM" , $countM)
        ->with("countO" , $countO);

    }
}
