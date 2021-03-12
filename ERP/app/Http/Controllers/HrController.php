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

    public function profile($user_name){
        $user = DB::table('hr_manager')
                ->where('user_name', $user_name)
                ->get();
        return view('hr.profile')->with('user',$hr);
    }

    public function changePassword(){
        return view('hr.changePassword');
    }
    public function storeChangePassword($user_id, ChangePasswordRequest $req){
        $hr = new Hr();
        if($hr->password == $req->Opassword){
            if($req->Npassword == $req->CNpassword){
            $hr->password = $req->Npassword;

            $hr->save();

            }else{
                //flash('error','password and confirm passsword doesn't match');
            }
        }else{
            //flash('error','password doesn't match');
        }
    }

}