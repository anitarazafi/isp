<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public  function index(){
        $posts = Post::latest()->paginate(15);
        return view('admin.posts.index', [
            'title' => "Posts",
            'posts' => $posts
        ]);
    }

    public function create(){
        $topics = Topic::all();

        return view('admin.posts.create', [
            'title' => "Create post",
            'topics' => $topics
        ]);
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'topic_id' => ['required'],
            'post_country' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'mimes:png,jpeg,jpg,gif'],
            'body' => ['required'],
        ]);

        if($request->file('image')){
           $formFields['image']  = $request->file('image')->store('profile-pictures', 'public');
        }

        $post = Post::create([
            'user_id' => $request->user()->id,
            'topic_id' => $formFields['topic_id'],
            'post_country' => $formFields['post_country'],
            'body' => $formFields['body'],
            'image' => $formFields['image'],
            'isApproved' => false,
        ]);

        return redirect('/admin/posts')->with('message', 'Post created successfully.');
    }

    public function edit(Post $post){
        $topics = Topic::all();

        return view('admin.posts.edit', [
            'title' => "Edit post",
            'post' => $post,
            'topics' => $topics,
        ]);
    }

    public function update(Request $request, Post $post){
        $formFields = $request->validate([
            'topic_id' => ['required'],
            'post_country' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'mimes:png,jpeg,jpg,gif'],
            'body' => ['required'],
        ]);

        if($request->file('image')){
            $formFields['image']  = $request->file('image')->store('profile-pictures', 'public');
        }

        $post->update($formFields);

        return redirect('/admin/posts')->with('message', 'Post updated successfully.');
    }

    public function approve(Post $post){
        if($post->isApproved == 0) {
            $newValue = 1;
        } else {
            $newValue = 0;
        }
        $post->update([
            'isApproved' => $newValue,
        ]);

        return redirect('/admin/posts')->with('message', 'Post updated successfully.');
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect('/admin/posts')->with('message', 'Post deleted successfully.');
    }
}
