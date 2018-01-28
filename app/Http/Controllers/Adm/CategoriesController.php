<?php

namespace App\Http\Controllers\Adm;

use App\Http\Requests\ValidateForm2Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Event;

class CategoriesController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $categories = Category::all();
        $calen = Event::all();
        return view('administrator.categories.index',['calen'=>$calen])
            ->with('categories', $categories);
    }



    /**
     * Create
     */
    public function create()
    {

        $categories = Category::paginate(3);
        $calen = Event::all();

        return view('administrator.categories.category-create',['categories' => $categories],compact('calen'));
    }

    /**
     * Store
     */
    public function store(ValidateForm2Request $request)
    {

        $cat = new Category();

        $cat->title = $request->title;
        $cat->slug = $request->slug;

        $cat->save();

//        Category::create($request->all());
        $mtitle = 'An Category'.' '.$request->title.' '.'has been added';
        return redirect('adm/categories/create')->with(['message'=>$mtitle]);
    }

    /**
     * Show
     */
    public function show($id)
    {
        //
    }

    /**
     * Edit
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     Destroy
     */
    public function destroy($id)
    {
        $cat = Category::find($id);

        $cat->delete();

        return redirect()->route('categories.create',$cat->id)->with('message','Category deleted');;
    }
}
