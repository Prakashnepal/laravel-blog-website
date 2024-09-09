<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{



    public function index()
    {

        if (Auth::id()) {
            $post = Post::where('post_status', '=', 'active')->get();

            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home.homepage', compact('post'));
            } else if ($usertype == 'admin') {
                return view('admin.dashboard');
            } else {
                return redirect()->back();
            }
        }
    }

    // public function homepage(){

    //     $post = Post::all();
    //     return view('home.homepage',compact('post'));
    // }
    public function homepage()
    {
        // Retrieve the four most recent active posts
        $post = Post::where('post_status', 'active')
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        // Return the 'homepage' view with the retrieved posts
        return view('home.homepage', compact('post'));
    }
    // data in decending order

    // public function homepage() {
    //     $posts = Post::inRandomOrder()->limit(4)->get();
    //     return view('home.homepage', compact('posts'));
    // }

    // for only four post get random order


    public function post_details($id)
    {

        $post = Post::find($id);

        return view('home.post_details', compact('post'));
    }



    public function register()
    {
        return view('home.homepage');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('ad.logout');
    }

    public function create_post()
    {

        return view('home.create_post');
    }

    public function user_post(Request $request)
    {

        $user = Auth()->user();

        $userid = $user->id;

        $username = $user->name;

        $usertype = $user->usertype;

        $post = new Post();

        $post->title = $request->title;

        $post->description = $request->description;

        $post->user_id = $userid;

        $post->name = $username;

        $post->usertype = $usertype;

        $post->post_status = 'pending';


        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);

            $post->image = $imagename;
        }

        $post->save();

        Alert::success('Congrates', 'You have Added the data Successfully');

        return redirect()->back();
    }

    public function my_post()
    {

        $user = Auth::user();
        $userid = $user->id;
        $data = Post::where('user_id', '=', $userid)->get();
        return view('home.my_post', compact('data'));
    }

    public function my_post_del($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Post deleted Successfully');
    }

    public function my_post_edit($id)
    {

        $data = Post::find($id);

        return view('home.post_update', compact('data'));
    }
    public function update_post_data(Request $request, $id)
    {
        $data = Post::find($id);

        $data->title = $request->title;

        $data->description = $request->description;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back()->with('message', 'Post Updated Successfully');
    }
}
