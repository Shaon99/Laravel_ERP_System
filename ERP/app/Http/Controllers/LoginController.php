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

        $user = DB::table('hr_manager')
                    ->where('password', $req->password)
                    ->where('user_name', $req->username)
                    ->get();

        if($req->username == "" || $req->password == ""){
           $req->session()->flash('msg', 'null username or password...');
           return redirect('/login');

        }elseif(count($user) > 0 ){

             $req->session()->put('username', $req->username);

            return redirect()->route('HR.dashboard');   
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
}
