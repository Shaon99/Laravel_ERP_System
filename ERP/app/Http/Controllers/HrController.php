<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hr;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ChangePasswordRequest;


class HrController extends Controller
{
    public function index(){
        return view('hr.index');
    }

    public function profile($user_id){
        $hr = Hr::find($user_id);
        return view('hr.profile')->with('user',$hr);
    }

    public function changePassword(){
        return view('hr.changePassword');
    }
    public function storeChangePassword(ChangePasswordRequest $req){
        $hr = new Hr();
        if($hr->password == $req->Opassword){
            if($req->Npassword == $req->CNpassword){
            $hr->password = $req->Npassword;

            $hr->save();
            return redirect()->route('Hr.dashboard');

            }else{
                //flash('error','password and confirm passsword doesn't match');
            }
        }else{
            //flash('error','password doesn't match');
        }
    }

}