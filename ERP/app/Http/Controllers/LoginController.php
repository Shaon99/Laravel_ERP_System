<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(LoginRequest $req){

        $hr = DB::table('hr_manager')
                ->where('password', $req->password)
                ->where('user_name', $req->username)
                ->get();
        $suply_manager = DB::table('supply_chain_manager')
                           ->where('password', $req->password)
                           ->where('user_name', $req->username)
                           ->get();

        if($req->username == "" || $req->password == ""){
           $req->session()->flash('msg', 'null username or password...');
           return redirect('/login');

        }
        elseif(count($hr) > 0 ){
            $req->session()->put('user_name', $req->user_name);
            $req->session()->put('user_type','hr_manager');
            return redirect()->route('HR.dashboard');
               
        }
        elseif(count($suply_manager) > 0 ){
            $req->session()->put('user_name', $req->user_name);
            $req->session()->put('user_type','supply_chain_manager');
            return redirect()->route('SupplyChainManager.dashboard');

        }
        else{
            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
}