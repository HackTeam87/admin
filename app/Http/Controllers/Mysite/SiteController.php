<?php

namespace App\Http\Controllers\Mysite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tarif;
use App\ProductSlider;

class SiteController extends Controller
{
    public function index ()
    {
        $tarif = Tarif::all();
        $product = ProductSlider::all();

        return view('layouts.mysite.base',compact('tarif'),compact('product'));
    }
}
