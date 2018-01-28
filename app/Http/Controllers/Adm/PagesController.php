<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use App\Category;
use App\Post;

class PagesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('administrator.page.index', compact('categories'));
    }

    public function category($categorySlug)
    {
        $categories = Category::where ('slug',$categorySlug)->first();
        return view('administrator.page.category', compact('categories'));
    }

    public function post($categorySlug, $postSlug)
    {
        $category = Category::where ('slug',$categorySlug)->first();
        $post = Post::where ('id',$postSlug)->first();
        if ($category->exists() && $post->exists() &&
            $post->category_id == $category->id){

            return view('administrator.page.post', ['post' => $post]);
        }

        abort(404);
    }


}

