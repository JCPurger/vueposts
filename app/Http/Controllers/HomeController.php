<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Show the main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::where('status',true)->paginate(20)->toJson();

        // $posts = Post::where('status',true)
        //     ->take(20)
        //     ->get()
        //     ->toJson();
            
        return view('home')
            ->with(compact('posts'));
    }
}
