<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\models\user;

use App\models\Course;

class HomeController extends Controller
{
    function index() 
    {  $datas=Course::all(); 
        $user=user::all();
       return view('home',compact('datas','user'));

    }

    function CheckRoute() 
    {
        $datas=Course::all();
        $user=user::all();

        $usertype=Auth::user()->usertype;

        if($usertype=='1')
           {
               return view('admin.AdminHome');
           }
            else
             {
                 return view('home',compact('datas','user'));
             }
    }
}
