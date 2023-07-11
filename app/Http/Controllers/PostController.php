<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\UntukSubscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Database\Factories\PostFactory;


class PostController extends Controller
{
    /**
     * index
     *
     * 
     */


    public function index()
    {
        //get posts
        $posts = Post::latest()->paginate();

        $kirimemailsubscriber = UntukSubscribe::latest()->paginate();

        return view('admin.index', compact('posts', 'kirimemailsubscriber'));

        //render view with posts


    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'email' => 'required|min:8',
            'kuantitas' => 'required|min:1',
            'no_telepon' => 'required|min:10'
        ]);


        //create post
        Post::create([
            'email' => $request->email,
            'kuantitas' => $request->kuantitas,
            'no_telepon' => $request->no_telepon
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['berhasil' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Post $post)
    {
        return view('admin.edit', compact('post'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Post $post)
    {
        //validate form

        $post->update([
            'email' => $request->email,
            'kuantitas' => $request->kuantitas,
            'no_telepon' => $request->no_telepon
        ]);


        //redirect to index
        return redirect()->route('posts.index')->with(['berhasil' => 'hell yeah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy(Post $post)
    {

        //delete post
        echo $post;
        $post->delete();


        return redirect()->route('posts.index')->with(['berhasil' => 'HAPUS DAH!']);

        

        //redirect to index
    }
}