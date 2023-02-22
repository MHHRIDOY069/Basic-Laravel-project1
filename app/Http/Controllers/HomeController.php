<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }


    public function upload(Request $request)
    {
        $data= new Post;
        $data->username=Auth::user()->name;
        $data->description= $request->description;
       //image adding
        $image= $request->image;

        if($image)
        {
        $imagename= time().'.'.$image->getClientOriginalExtension();
        $request->image->move('post',$imagename);
        //image adding close
        $data->image=$imagename;
        }
        $data->save();

        return redirect()->back();
    }

    public function view_post()
    {
        $name= Auth::user()->name;
        $post= Post::where('username','=',$name)->get();

        return view('post_page',compact('post'));
    }

    public function delete_post($id)
    {
        $data= Post::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function update_post($id)
    {
        $data= Post::find($id);

        return view('update_page',compact('data'));
    }

    public function confirm_update(Request $request, $id)
    {
        $post= Post::find($id);

        $post->description= $request->description;
        $image= $request->image;
        if($image)
        {
        $imagename= time().'.'.$image->getClientOriginalExtension();
        $request->image->move('post',$imagename);
    
        $post->image=$imagename;
        }

        $post->save();

        return redirect()->back();


    }
}
