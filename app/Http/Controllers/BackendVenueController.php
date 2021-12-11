<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
class BackendVenueController extends Controller
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

    public function bakendindex(){
        $venues = Venue::all();
        return view('admin/venue',['venues'=>$venues]);
    }

    public function addvenue()
    {
        return view('admin/venue');
    }

    public function store(Request $request)
    {
        $request->validate([  
            'heading'=>'required',  
            'desc'=>'required'
        ]); 

        $v = new Venue;  
        $v->title =  $request->get('heading');  
        $v->image =  "null";
        $v->description = $request->get('desc');  
        $v->status = '1';  
        if ( $v->save()){
            return redirect()->intended('/admin/venue')
            ->withSuccess('New venue added successfully');
        }else{
            return ['message' => "Unable to add new venue"];
        }
         
    }
    public function destroy($id)
    {
        $a = Venue::where('id', $id)->delete();
        if($a){
            return redirect()->intended('/admin/venue')
            ->withSuccess('Venue deleted successfully');
        }else{
            return ['message'=>'Venue Not Found'];
        }
    }
}
