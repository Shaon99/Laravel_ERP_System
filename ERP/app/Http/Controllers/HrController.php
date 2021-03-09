<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrController extends Controller
{
    public function index(){
        return view('hr.index');
    }

    public function profile(){
        return view('hr.profile');
    }

    public function changePassword(){
        return view('hr.changePassword');
    }

}
