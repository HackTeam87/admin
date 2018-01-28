<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Calendar;
use App\Event;

class EventController extends Controller
{
    //index

    public function index()
    {
        $events = [];

        $data = Event::all();

        if ($data->count()) {

            foreach ($data as $key => $value) {

                $events[] = Calendar::event(

                    $value->title,

                    true,

                    new \DateTime($value->start_date),

                    new \DateTime($value->end_date . ' +1 day')

                );

            }
        }

            $calendar = Calendar::addEvents($events);
            $calen = Event::paginate(2);

            return view('administrator.calendar.date', compact('calendar'))->with('calen', $calen);

    }


    //create

    public function create()
    {
        //
    }

   //store

    public function store(Request $request)
    {
        $post = new Event();

        $post->title = $request->title;
        $post->start_date = $request->start_date;
        $post->end_date = $request->end_date;

        $post->save();


        $mtitle = 'An Post' . ' ' . $request->title . ' ' . 'has been added';
        return redirect('adm/calendar')->with(['message' => $mtitle]);
    }

    //show

    public function show($id)
    {
        //
    }

   //edit

    public function edit($id)
    {
        //
    }

   //update

    public function update(Request $request, $id)
    {
        //
    }

   //destroy

    public function destroy(Request $request, $id )
    {
        $post = Event::find($id);

        $post->delete();

        $mtitle = 'An Post' . ' ' . $request->title . ' ' . 'has been deleted';
        return redirect('adm/calendar')->with(['message' => $mtitle]);
    }
}
