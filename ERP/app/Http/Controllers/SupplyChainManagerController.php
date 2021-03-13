<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplyChainManagerController extends Controller
{
    public function index(){
        return view('supply_chain_manager.index');
    }

    public function profile(){
        return view('supply_chain_manager.profile');
    }

    public function changePassword(){
        return view('supply_chain_manager.changePassword');
    }

    public function production(){
        return view('production.index');
    }

}
