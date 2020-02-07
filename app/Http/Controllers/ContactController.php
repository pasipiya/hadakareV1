<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;
use App\User;
use Auth;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }  


    public function index(Request $request)
    {
        $id=Auth::user()->id;
        $contact_admin = DB::table('contact')->select('*')->where('user_id',$id)->where('role_id','1')->get();
        $contact_saloon = DB::table('contact')->select('*')->where('user_id',$id)->where('role_id','2')->get();
        $ContactNOAdmin=sizeof($contact_admin);
        $request->session()->flash('ContactNOAdmin',"$ContactNOAdmin");
        $ContactNOSaloon=sizeof($contact_saloon);
        $request->session()->flash('ContactNOSaloon',"$ContactNOSaloon");
        return view('admin/contact')->with('contact_admin',$contact_admin)
        ->with('contact_saloon',$contact_saloon);
        

        //->with('booking_user',$booking_user);
    }

    public function destroy(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
         $request->session()->flash('delete','Contact Deleted Successfully');
        return redirect('contact');
    }



}

