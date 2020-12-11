<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts=Post::all();
        return view('Post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=Customer::all();
        return view('post/create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $posts=new Post([
        //     "title"=>$request->get('title'),
        //     "content"=>$request->get('content'),
        //     "author"=>$request->get('author')
        // ]);
        $posts=Post::create($this->validateRequest());
        $this->storeImage($posts);
        $posts->save();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('post/show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        $customers=Customer::all();
        return view('post/edit',compact("post","customers"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        // $post=[
        //     "title"=>$request->get('title'),
        //     "content"=>$request->get('content'),
        //     "author"=>$request->get('author')
        // ];
        // Post::find($id)->update($post);
        $post->update($this->validateRequest());
        $this->storeImage($post);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
    private function validateRequest(){
        return request()->validate([
            'title'=>'required|min:3',
            'content'=>'required|min:3',
            'author'=>'required',
            'image'=>'sometimes|file|image|max:5000'
            ]);
    }
    private function storeImage($post){
        if(request()->has('image')){
            $post->update([
                'image'=>request()->image->store('uploads','public')
            ]);
        }
        $image=Image::make(public_path('storage/'.$post->image))->fit(250,250);
        $image->save();
    }
}
