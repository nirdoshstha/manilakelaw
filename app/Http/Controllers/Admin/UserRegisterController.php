<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRegisterController extends Controller
{
    public function index(){
        $user = User::all();
        return view('backend.users.index')->with('user',$user);
    }

    public function editUser($id){
        $user = User::find($id);
        return view('backend.users.edit-user')->with('user',$user);
    }

    public function updateUser(Request $request, $id){
        $user= User::find($id);
        $user->name =$request->input('name');
        $user->email =$request->input('email');
        $user->user_role =$request->input('user_role');
        $user->is_ban =$request->input('ban_unban');
        $user->update();
        return redirect('/dashboard/user-registered')->with('status','You have successfully updated data..');
    }

    public function deleteUser(Request $request, $id){
        $user = User::find($id);
        $user->delete();
        return redirect('/dashboard/user-registered')->with('status','You have successfully deleted data.');
    }
}
