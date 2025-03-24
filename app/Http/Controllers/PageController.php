<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function showHome(){
        // return"<h1>Welcome to Controller Lecture</h1>";
        return view('welcome');
    }
    public function showUser(string $id){
        // return"<h1>Welcome to Controller Lecture</h1>";
        return view('user',compact('id'));
    }
    public function showBlog(){
        // return"<h1>Welcome to Controller Lecture</h1>";
        return view('Blog');
}
}
    //

