<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class dashboardController extends Controller
{
    public function dashboard(){
        $product=DB::table('products')->count();
        return view('admin.dashboard',compact('product'));
       
    }
}
