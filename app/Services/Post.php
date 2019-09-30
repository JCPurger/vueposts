<?php

namespace App\Services;

use Auth;
use App\Models\Post as PostModel;
use Illuminate\Http\Request;

class Post
{
    /**
     * Create a new contact instance after a valid form.
     *
     * @param  array $data
     * @return ContactModel
     */
    public function store(Request $request)
    {
        $file = $this->uploadImage($request);

        $post = new PostModel;
        $post->title = $request->title;
        $post->slug = str_replace(' ','-',$request->title);
        $post->status = $request->status == "true" ?? 0;
        $post->text = $request->text;
        $post->image = '/storage/'.$file;

        $result = Auth::user()->posts()->save($post);

        if($result)
            return true;
        else
            return false;
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $upload = $request->image->store('posts',['disk' => 'public']);
            if ( !$upload )
                return "";
            
            return $upload;
        }
    }
}