<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $event = [];
        // echo "<pre>";
        // print_r($events);
        foreach ($events as $row) {
            // $eventdate = $row->end_date." 24:00:00";
            $event = \Calendar::event(
                $row->title,
                true,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'color'=>$row->color,
                ]
            );  
        }
        $calendar = \Calendar::addEvents($event);
        return view('eventpage', compact('events','calendar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function display(){
        return view('addevents');
    }


    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  echo "kkkkkkkkkkk";
        // die;
        // $this->validate($request, [
        //     'title' => 'required',
        //     'color' => 'required',
        //     'start_date' => 'required',
        //     'start_end' => 'required',
        // ]);

        $events = new Event;

        $events->title =$request->input('title');
        $events->color =$request->input('color');
        $events->start_date =$request->input('start_date');
        $events->end_date =$request->input('end_date');
        $events->save();
        return redirect('events')->with('success','Event Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
