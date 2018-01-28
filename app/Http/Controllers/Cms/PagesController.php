<?php

namespace App\Http\Controllers\Cms;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Contracts\StaticPage;


class PagesController extends Controller
{

    public function index(StaticPage $page)
    {
        $pages = $page::orderBy('id', 'desc')->paginate(10);
        return view('static-pages::index', compact('pages'));
    }


    public function create(StaticPage $page)
    {
        return view('static-pages::create',
            ['action' => 'create', 'page' => $page]);
    }



    public function store(StaticPage $page, Request $request)
    {
        $input = $request->all();
        $page->fill($input);
        $page->save();
        return redirect()->route('pages.index');
    }



    public function show($id)
    {
        //
    }


    public function edit(StaticPage $page)
    {
        return view('static-pages::edit', ['action' => 'edit', 'page' => $page]);
    }



    public function update(StaticPage $page, Request $request)
    {
        $input = $request->all();
        $page->fill($input);
        $page->save();
        return redirect()->route('pages.index');
    }



    public function destroy(StaticPage $page)
    {
        $page->delete();
        return redirect()->route('pages.index');
    }

}
