<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\Posts\UpdatePostRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Posts\CreatePostsRequest;
use Illuminate\Support\Facades\Storage;
use App\Post;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostsRequest $request)
    {
        $image = $request->image->store('public/storage/posts');

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'dob' => $request->dob,
            'address' => $request->address,
            'email' => $request->email,
            'phonenum' => $request->phonenum,
            'noofprojects' => $request->noofprojects,
            'content' => $request->content,
            'category_id' => $request->category,
            'classten' => $request->classten,
            'classtw' => $request->classtw,
            'university' => $request->university,
            'projectonename' => $request->projectonename,
            'projecttwoname' => $request->projecttwoname,
            'projectthreename' => $request->projectthreename,
            'projectone' => $request->projectone,
            'projecttwo' => $request->projecttwo,
            'projectthree' => $request->projectthree,
            'experienceone' => $request->experienceone,
            'experiencetwo' => $request->experiencetwo,
            'experiencethree' => $request->experiencethree,
            'image' => $image
        ]);

        session()->flash('success', 'Post created Successfully');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create')->with('post',$post)->with('categories',Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request,Post $post)
    {
        $data=$request->only(['title','description','published_at','content']);
        if($request->hasFile('image'))
        {
            $image=$request->image->store('posts');
            $post->deleteImage();
            $data['image']=$image;
        }
        $post->update($data);
        session()->flash('success','Post Updated Successfully');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id',$id)->firstOrFail();
//        $post->delete();
        if($post->trashed())
        {
            $post->deleteImage();
            $post->forceDelete();
        }
        else{
            $post->delete();
        }
        session()->flash('success', 'Post deleted Successfully');
        return redirect(route('posts.index'));
    }

    public function trashed(Post $post)
    {
        $trashed = Post::onlyTrashed()->get();
        return view('posts.index')->withPosts($trashed);
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id',$id)->firstOrFail();
        $post->restore();
        session()->flash('success', 'Post restore Successfully');
        return redirect()->back();
    }
}
