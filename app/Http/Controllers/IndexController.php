<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function sayhello()
    {
        return view("hello");
    }
    public function sayhello2()
    {
        return view("welcome");
    }
    public function login()
    {
        return view("user");
    }
    public function sayHello3()
    {
        $message = "Laravel User";
        return view("hello",['msg' => $message]);
    }
   
}
