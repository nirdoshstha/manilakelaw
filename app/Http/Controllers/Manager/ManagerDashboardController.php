<?php

namespace App\Http\Controllers\Manager;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerDashboardController extends Controller
{
    public function index(){
        $user = User::all();
        return view('manager.manager-dashboard')->with('user',$user);
    }

    public function userRegister(){
        $user = User::all();
        return view('manager.user-registered')->with('user',$user);
    }
}
