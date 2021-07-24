<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class PostsController extends Controller
{
    public function index($id)
    {
        // $nouns = [
        //     "1" => "Pen",
        //     "2" => "Pencil",
        //     "3" => "Book",
        //     "4" => "Baloon",
        //     "5" => "Pappaya"
        // ];

        // if(!isset($nouns[$id]))
        // {
        //     abort(404);
        // }

        // $data = $nouns[$id];
        // $call = [
        //     "properties" => "$data"
        // ];


           
    //    $post = DB::table('user')->where ('id',$id)->first();

        $post = post::where("id",$id)->first();
            if(!$post)
            {
                abort(404);
            }
        // var_dump($post);

        $data = [
            "post" => $post
        ];
       

         return view('posts.index',$data);
    }
}
