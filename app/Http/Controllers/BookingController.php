<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Venue;
use App\Models\Book;

class BookingController extends Controller
{
    
    public function index(){
        $events = Event::all();
        $venues = Venue::all();
        return view('book',['venues'=>$venues,'events'=>$events]);
    }

    public function store(Request $request)
    {
        
        $request->validate([  
            'custname' => ['required'],
            'custmob' => ['required'],
            'event' => ['required'],
            'venue' => ['required'],
            'totalguests' => ['required'],
            'date' => ['required'],
        ]); 
        
        print_r($request->input());

        if ( Book::create([
            'name' => $request['custname'],
            'mobile' => $request['custmob'],
            'event' => $request['event'],
            'venue' => $request['venue'],
            'guests' => $request['totalguests'],
            'date' => $request['date'],
            'status' => '1'
            
        ])){
            return redirect()->intended('/')
            ->withSuccess('Booked successfully');
        }else{
            return ['message' => "Unable to Book"];
        }
         
    }
}
