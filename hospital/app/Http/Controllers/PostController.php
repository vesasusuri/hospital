<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('user.contact-us');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->message = $request->message;
        $post->save();
        return redirect('contact-us')->with('status', 'Your contact was sended to us we will return to you as soon as possible!');
    }

    public function showContact()
    {
        $post = post::all();
        return view('admin.show_contact_us',compact('post'));
    }

    public function deletepost($id){
        $post = post::find($id);

        $post -> delete();

        return redirect()->back();
    }
}
