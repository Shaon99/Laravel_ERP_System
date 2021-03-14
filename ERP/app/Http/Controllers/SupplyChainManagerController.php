<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Supply_chain_manager;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ChangePasswordRequest;


class SupplyChainManagerController extends Controller
{
    public function index(){
        return view('supply_chain_manager.index');
    }

    public function profile(Request $req){
        $supply_chain_manager = DB::table('supply_chain_manager')
              ->where('user_name', 'supply_manager')
              ->get();
        return view('supply_chain_manager.profile')->with('user',$supply_chain_manager);
    }

    public function changePassword(){
        return view('supply_chain_manager.changePassword');
    }

    public function storeChangePassword(Request $request, ChangePasswordRequest $req){
        $supply_chain_manager = DB::table('supply_chain_manager')
              ->where('user_name', 'supply_manager')
              ->get();
        if($supply_chain_manager[0]->password == $req->Opassword){
            if($req->Npassword == $req->CNpassword){

            $flag = DB::table('supply_chain_manager')->where('user_name', $supply_chain_manager[0]->user_name)->update(['password' => $req->Npassword]);

            $req->session()->flash('msg', 'Congratulations! Password change successfully..');
            return redirect()->route('SupplyChainManager.changePassword');

            }else{
                $req->session()->flash('msg', 'Password and confirm password do not match...');
                return redirect()->route('SupplyChainManager.changePassword');
            }
        }else{
            $req->session()->flash('msg', 'Old password does not match...');
            return redirect()->route('SupplyChainManager.changePassword');
        }
    }

    public function production(){
        $products = Product::all();
        return view('production.index')->with('products', $products);
    }

    public function readyProduction(){
        $products = DB::table('production')
                    ->where('status', "ready")
                     ->get();
        return view('production.ready')->with('products', $products);
    }

    public function upcomingProduction(){
        $products = DB::table('production')
                    ->where('status', "upcoming")
                     ->get();
        return view('production.upcoming')->with('products', $products);
    }

    public function edit($product_id){
        $product = Product::find($product_id);
        return view('production.edit')->with('product', $product);
    }

    public function editProduction($product_id,Request $req){

        $flag = DB::table('production')->where('product_id', $product_id)->update(['status' => $req->status]);

        $req->session()->flash('msg', 'Status updated successfully');
        return redirect()->route('SupplyChainManager.ready');

    }

}