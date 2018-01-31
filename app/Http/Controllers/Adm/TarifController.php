<?php

namespace App\Http\Controllers\Adm;

use App\Tarif;
use App\Category;
use App\ProductSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TarifController extends Controller
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

        $tarif = Tarif::paginate(1);
        $categories = Category::all();

        return view('administrator.tarifs.create', ['tarif' => $tarif],['categories' => $categories]);
    }

    //Srore
    public function store(Request $request)
    {
        $tarif = new Tarif();

        $tarif->plan = $request->plan;
        $tarif->price = $request->price;
        $tarif->priceinfo = $request->priceinfo;

        $tarif->save();

        $mtitle = 'An Post'.' '.$request->plan.' '.'has been added';
        return redirect('/adm/tarifs/create')->with(['message'=>$mtitle]);
    }


    public function show($id)
    {
        //
    }

    //Edit
    public function edit($id)
    {
        $tarif = Tarif::find($id);
        return view('administrator.tarifs.edit' ,compact('tarif'));
    }

    //Update
    public function update(Request $request, $id)
    {
        $tarif = Tarif::find($id);
        $tarif->plan = $request->plan;
        $tarif->price = $request->price;
        $tarif->priceinfo = $request->priceinfo;
        $tarif->save();


        $mtitle = 'An Post'.' '.$tarif->title.' '.'has been updated';
        return redirect()->route('tarifs.create', $tarif->id)->with(['message'=>$mtitle]);
    }

    //Destroy
    public function destroy($id)
    {
        $tarif = Tarif::find($id);

        $tarif->delete();

        return redirect()->route('tarifs.create', $tarif->id);
    }
}
