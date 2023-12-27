<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $post=Post::all();
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype =='user'){
                return view('home.homepage',compact('post'));
            }else if($usertype =='admin'){
                return view('admin.adminhome');
            }else{
                return redirect()->back();
            }
        }

    }

    public function post()
    {
        return view('post');
    }



    public function homepage()
    {
        $post=Post::all();

        return view('home.homepage',compact('post'));
    }

    public function post_details($id){

        $post = Post::find($id);


        return view('home.post_details',compact('post'));
    }
}
