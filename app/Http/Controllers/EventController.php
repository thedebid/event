<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::all();
        return view('admin/event',['events'=>$events]);
    }
    public function addEvent()
    {
        return view('admin/event');
    }
    public function store(Request $request)
    {
        $request->validate([  
            'heading'=>'required',  
            'desc'=>'required'
        ]); 

        $event = new Event;  
        $event->heading =  $request->get('heading');  
        $event->description = $request->get('desc');  
        $event->status = '1';  
        if ( $event->save()){
            return redirect()->intended('/admin/event')
            ->withSuccess('New event added successfully');
        }else{
            return ['message' => "Unable to add new event"];
        }
         
    }
    public function destroy($id)
    {
        $a = Event::where('id', $id)->delete();
        if($a){
            return redirect()->intended('/admin/event')
            ->withSuccess('Event deleted successfully');
        }else{
            return ['message'=>'Event Not Found'];
        }
    }
}
