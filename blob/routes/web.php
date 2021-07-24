<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{id}', function () {
//     echo request("id");
//     die;
//     return view('welcome');
// });



// Route::get('/index', function () {
//     $data = [
//         "name" => "Soorya S Das",
//         "Address" => "Vrindavanam, Elamba p.o , Paruthy, Avanavanchery, Attingal",

//         "item" =>[
//             "one","two","three","four","five"
//         ]
//         ];
//     return view('index',$data);
// });



// Route :: get('/contact/{id}/{name}', function($id,$name)
// {
//     $data = [
//         "id" => "$id",
//         "name" =>"$name"
//     ];
//     return view ('contact',$data);
// });



// Route::get('/about', function () {

//     $data = [
//         "message" => "This is a message",
//         "totalprice" => 101,
//         "items" => [
//             "apple", "Orange", "Banana", "kiwi","jackfruit"
//         ]
//         ];
//     return view('about',$data);
// });


Route::get("/posts/{id}",[PostsController::class,"index"]);

// Route::get("/posts/{id}","PostsController@index");


Route::get("/",function()
{
    return view('home');
});


Route::get("/contact",function()
{
    return view("contact");
});

Route::get("/article",function()
{
    // $article = App\Models\Article :: all();
  $article = App\Models\Article :: take(2)->get();
// $article = App\Models\Article :: latest()->take(2);
    $data = [
        "article" => $article
    ];
     return view("list-article",$data);
});