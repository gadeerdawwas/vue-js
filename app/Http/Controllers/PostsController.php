<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::latest()->with('User')->get();
        // $posts=Post::latest()->with('User')->paginate(10);
        foreach($posts as $post){
            $post->setAttribute('added_at',$post->created_at->diffForHumans());
            $post->setAttribute('comment_count' , $post->Comment->count());
        }
        return response()->json( $posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json([
            'id' => $post->id,
            'title' => $post->title,
            'slug' => $post->slug,
            'body' => $post->body,
            'iamge' => $post->iamge,
            'user_id' => $post->user,
            'Categoryname' => $post->Category->name,
            'comments_count' => $post->Comment->count(),
            'username' => $post->User->name,
            'added_at'=> $post->created_at->diffForHumans(),
            'comments' => $this->commentsFormatted($post->Comment)
        ]);
    }
    public function commentsFormatted($comments)
    {
        $new_comments=[];
        foreach ($comments as $comment) {
            array_push($new_comments ,
            [
                'id' => $comment->id,
                'body' => $comment->body,
                'User' => $comment->User ,
                'added_at' => $comment->created_at->diffForHumans()
            ]
            );
        }
        return $new_comments;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function CategoryPost($slug)
    {

        $category = Category::whereSlug($slug)->first();
        $posts = Post::where('category_id' ,$category->id)->with('User')->get();
        foreach($posts as $post){
            $post->setAttribute('added_at',$post->created_at->diffForHumans());
            $post->setAttribute('comments_count',$post->Comment->count());
        }
        return response()->json($posts);
    }
    public function searchposts($query)
    {

        $posts = Post::where('title' ,'like','%'.$query.'%')->with('User')->get();
        foreach($posts as $post){
            $post->setAttribute('added_at',$post->created_at->diffForHumans());
            $post->setAttribute('comments_count',$post->Comment->count());
        }
        return response()->json($posts);
    }
}
