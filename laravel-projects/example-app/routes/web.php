<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function (){
    return view('services');
});

Route::get('/blogs', function (){
    return view('blogs');
});

Route::get('/blog/{blog_id?}/category/{category_id?}', function (string $blog_id=null, string $category_id = null){
    if($blog_id && $category_id){
        return "<h1> Post ID : ". $blog_id ."</h1> <br><h1>Category ID : " . $category_id . "</h1>";
    }else{
        return "No ID Found";
    }
    
});

// Laravel Rout Constraints
// Laravel Named Routes

Route::view('/about', 'about_view');