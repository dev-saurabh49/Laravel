<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post/{id?}/comment/{commentid?}',function(string $id = null, string $comment=null){
//     if($id)
//     {
//         return '<h1>Post ID: '.$id.' </h1><h2> Comment  id is : '.$comment.'</h2>';
//     }
//     else
//     {
//         return '<h1>No id Found </h1>';
//     }
    
// });

Route::get('/post/{id}',function(string $id){
    if($id){
        return '<h1>Post ID: '.$id.' </h1>';
    }else{
        return '<h1>Post ID: '.$id.' </h1>';
    }
})->whereNumber('id');

Route::get('/post',function (){
    return view('post');
    // return "<h1>Hello Post Page</h1>";
});

// Route::view("/post","post");

// Route::get('/hello',function(){
//     return view('post');
// });

// Route::get('/post/first_post',function(){
//     return view('first_post');
// });