<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hr;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ChangePasswordRequest;


class HrController extends Controller
{
    public function index(){
        return view('hr.index');
    }

    public function profile(Request $req){
        $hr = DB::table('hr_manager')
              ->where('user_name', 'hr_manager')
              ->get();
        return view('hr.profile')->with('user',$hr);
    }

    public function changePassword(){
        return view('hr.changePassword');
    }

    public function storeChangePassword(Request $request, ChangePasswordRequest $req){
        $hr = DB::table('hr_manager')
                ->where('user_name', 'hr_manager')
                ->get();
        if($hr[0]->password == $req->Opassword){
            if($req->Npassword == $req->CNpassword){

            $flag = DB::table('hr_manager')->where('user_name', $hr[0]->user_name)->update(['password' => $req->Npassword]);

            $req->session()->flash('msg', 'Congratulations! Password change successfully..');
            return redirect()->route('HR.changePassword');

            }else{
                $req->session()->flash('msg', 'Password and confirm password do not match...');
                return redirect()->route('HR.changePassword');
            }
        }else{
            $req->session()->flash('msg', 'Old password does not match...');
            return redirect()->route('HR.changePassword');
        }
    }

}