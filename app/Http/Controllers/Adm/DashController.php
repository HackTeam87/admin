<?php

namespace App\Http\Controllers\Adm;
use App\Http\Requests\ValidateFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Nullable;
use Image;


class DashController extends Controller
{


    //index

    public function index()
    {


        $users = User::all();
        $calen = Event::all();
        return view('administrator.posts.start',compact('calen'))->with('users', $users);
    }


    //create

    public function create()
    {
        $post = Post::paginate(4);
        $categories = Category::all();

        $file = 'media/';

        return view('administrator.posts.create',['file'=>$file], ['post' => $post])->with('categories', $categories);
    }


    //store

    public function store(ValidateFormRequest $request)
    {
        

        $post = new Post();

        $post->title = $request->title;
        $post->text = $request->text;
        $post->video = $request->video;
        $post->category_id = $request->category_id;

        if( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail = $request->file('post_thumbnail');

            $filename = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->resize(400, 400)->opacity(50)->save( public_path('media/' . $filename ) );

            // Set post-thumbnail url
            $post->post_thumbnail = $filename;
        }

        $post->save();

        $calen = Event::all();
        $mtitle = 'An Post'.' '.$request->title.' '.'has been added';
        return redirect('/adm/dash/create')->with(['message'=>$mtitle],compact('calen'));
    }

    //show

    public function show($id)
    {
        $post = Post::find($id);

        $calen = Event::all();
        return view('administrator.posts.show',compact('calen'))->withPost($post);
    }

    //edit

    public function edit($id)
    {
        $post = Post::find($id);

        $categories = Category::all();

        $calen = Event::all();

        return view('administrator.posts.edit', compact('categories'),compact('calen'))->withPost($post);
    }

    //update

    public function update(Request $request, $id)
    {

        $post = Post::find($id);
        $post->title = $request->title;
        $post->text = $request->text;
        $post->category_id = $request->category_id;
        $post->save();

        $calen = Event::all();
        $mtitle = 'An Post'.' '.$request->title.' '.'has been updated';
        return redirect()->route('dash.create', $post->id)->with(compact('calen'),['message'=>$mtitle]);


    }

    //destroy

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('dash.create', $post->id);
    }



}
