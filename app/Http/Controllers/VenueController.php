<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
class VenueController extends Controller
{
    public function index()
    {
        $venues = Venue::all();
        return view('venue',['venues'=>$venues]);
    }


}
