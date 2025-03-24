<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

// 
Route::controller(PageController::class)->group(function(){
  Route::get('/',[PageController::class,'showHome'])->name('Home');
  Route::get('/user/{id}',[PageController::class,'showUser'])->name('user');
  Route::get('/blog/{id}',[PageController::class,'showBlog'])->name('Blog');
});

Route::get('/test',TestingController::class);




// Route::get('/users', function () {
//   $names= [1 => ['name'=>"anaa", 'phone'=>'9823456781','city'=> 'Goa'],
//   2 => ['name'=>"anya", 'phone'=>'9823456781','city'=> 'Goa'],
//   3 => ['name'=>"amaa", 'phone'=>'9823456781','city'=> 'Goa'],
//   4 => ['name'=>"ayesha", 'phone'=>'9823456781','city'=> 'Goa'],
//   5 => ['name'=>"apexa", 'phone'=>'9823456781','city'=> 'Goa']];


  // return view('users',[
  //   'user'=>$names,'city'=>'Delhi']);

  // return view('users',['user'=>$name,'city'=>'<script>alert("Hello");</script>' ]);
  // return view('users')
  //  ->with('user',$name)
  // ->with('city','Delhi');

  // return view('users')->withUser($name)->withCity('Delhi');
// });

// Route::get('/user/{id}', function ($id) {
//   return "<h1>User: " . $id. "</h1>";
// })->name('view.user');

// Route::get('/post', function () {
//   return view('post');
// });
// Route::get('/test', function () {
//   return view('test');
// });



    //return view('post');
//   // return"<h1>Post Page</h1>";
//  })->whereAlphaNumeric('id');

// Route::view('  /post','post');

//  Route::get('page/postss', function () {
//   return view('post');
// //  //   // return"<h1>Post Page</h1>";
//   })->name('mypost');

//   Route::get('/test', function () {
//     return  view('about'); 
    
//  });
//  Route::redirect('/about','/test');