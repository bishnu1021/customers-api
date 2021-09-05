<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    //

    // if(isset($_POST['submit'])){
    //     echo 'working now';
    // }
    // else{
    //    echo "not working now";
    // }

    function login(){
        return view ('auth.login');
    }


    function check(Request $request){
        //return $request->input();
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required|unique:admins',
        //     'password'=>'required|min:5|max:12'
        // ]);

        // $userInfo = Admin::where('email', '=',$request->email)->first();

        // if(!$userInfo){
        //     return back()->with('fail','We do no recognie your email address');
        // }
        // else{

        //     if(Hash::check($request->password, $userInfo->password)){
        //         $request->session()->put('LoggedUser',$userInfo->id);
        //         return redirect('auth/dashboard');
        //     }
        //     else{
        //         return back()->with('fail','Incorrect password');
        //     }
        // }



    }


}


