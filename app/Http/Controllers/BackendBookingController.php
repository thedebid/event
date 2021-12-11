<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BackendBookingController extends Controller
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
        $bookings = Book::all();
        return view('admin/bookings',['bookings'=>$bookings]);
    }
    public function reject($id){
        if(Book::Where('id',$id)->update(['status'=>'0'])){
            return redirect()->intended('/admin/bookings')
            ->withSuccess('booking rejected successfully');
        }else{
            return  ['success' => false, 'message' => "Error Occured While Changing Booking Status"];
        }

    }

    public function approve($id){
        if(Book::Where('id',$id)->update(['status'=>'2'])){
            return redirect()->intended('/admin/bookings')
            ->withSuccess('booking rejected successfully');
        }else{
            return  ['success' => false, 'message' => "Error Occured While Changing Booking Status"];
        }

    }

}
