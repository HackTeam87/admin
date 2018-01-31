<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\ProductSlider;
use App\Category;
use Image;
use Illuminate\Http\Request;


class ProductSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $product = ProductSlider::paginate(1);
        $categories = Category::all();

        return view('administrator.pslider.create', ['product' => $product],['categories' => $categories]);
    }

    //Srore
    public function store(Request $request)
    {
        $product = new ProductSlider();

        $product->title = $request->title;
        $product->price = $request->price;
        $product->text = $request->text;



        if( $request->hasFile('image') ) {
            $image = $request->file('image');

            $filename = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(1200, 500)->save( public_path('/media/product-slider/' . $filename ) );

            // Set post-thumbnail url
            $product->image = $filename;
        }

        $product->save();

        $mtitle = 'An Post'.' '.$request->plan.' '.'has been added';
        return redirect('/adm/pslider/create')->with(['message'=>$mtitle]);
    }


    public function show($id)
    {
        //
    }

    //Edit
    public function edit($id)
    {
        $product = ProductSlider::find($id);
        return view('administrator.pslider.edit' ,compact('product'));
    }

    //Update
    public function update(Request $request, $id)
    {
        $product = ProductSlider::find($id);
        $product->title = $request->title;
        $product->text = $request->text;
        $product->price = $request->price;



        if( $request->hasFile('image') ) {
            $image = $request->file('image');

            $filename = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(1200, 500)->save( public_path('/media/product-slider/' . $filename ) );

            // Set post-thumbnail url
            $product->image = $filename;
        }


        $product->save();


        $mtitle = 'An Post'.' '.$product->title.' '.'has been updated';
        return redirect()->route('pslider.create', $product->id)->with(['message'=>$mtitle]);
    }

    //Destroy
    public function destroy($id)
    {
        $product = ProductSlider::find($id);

        $product->delete();

        return redirect()->route('pslider.create', $product->id);
    }
}
