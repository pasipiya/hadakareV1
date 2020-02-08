<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use App\Booking;
use Auth;


class HomeController extends Controller
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
 
    public function index(Request $request)
    {
        
        //return view('home');
           //$booking=Booking::all();
           $id=Auth::user()->id;
           $booking = DB::table('booking')->select('*')->where('saloon_id',$id)->get();
           
           $booking_user = DB::table('booking')->join('users', 'booking.saloon_id', '=', 'users.id')
               ->select('booking.*','users.name as saloonName')->where('user_id',$id)->get(); 
           
            $bookingNO=sizeof($booking);
            $request->session()->flash('bookingNO',"$bookingNO");



            $contact_admin = DB::table('contact')->select('*')->where('role_id','1')->get();
            $contact_saloon = DB::table('contact')->select('*')->where('user_id',$id)->where('role_id','2')->get();
            $ContactNOAdmin=sizeof($contact_admin);
            $request->session()->flash('ContactNOAdmin',"$ContactNOAdmin");
            $ContactNOSaloon=sizeof($contact_saloon);
            $request->session()->flash('ContactNOSaloon',"$ContactNOSaloon");
          
        
           //$booking = DB::table('booking')->where('user_id', '35');
           //return view('admin/booking',compact('booking'));

           $NoUsers = DB::table('users')->select('*')->where('role_id','2')->get();
           $NoUsers=sizeof($NoUsers);
           $request->session()->flash('NoOwners',"$NoUsers");

           $NoUsers = DB::table('users')->select('*')->where('role_id','3')->get();
           $NoUsers=sizeof($NoUsers);
           $request->session()->flash('NoCustomers',"$NoUsers");


           return view('home')->with('booking',$booking)->with('booking_user',$booking_user);
       }

    
public function logout () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/');
}


}
