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



    public function main_index(Request $request)
    {
        return view('main/contact_us');
    }


    public function index(Request $request)
    {
        $id=Auth::user()->id;
        $contact_admin = DB::table('contact')->select('*')->where('role_id','1')->get();
        $contact_saloon = DB::table('contact')->select('*')->where('user_id',$id)->where('role_id','2')->get();
        $ContactNOAdmin=sizeof($contact_admin);
        $request->session()->flash('ContactNOAdmin',"$ContactNOAdmin");
        $ContactNOSaloon=sizeof($contact_saloon);
        $request->session()->flash('ContactNOSaloon',"$ContactNOSaloon");
        return view('admin/contact')->with('contact_admin',$contact_admin)
        ->with('contact_saloon',$contact_saloon);
        

    }


    public function submitcontact(Request $request)
    {
        

        
        request()->validate([
            'name' =>'required',
            'email' =>'required',
            'msg' =>'required',
        ]);

           
        $contact = new Contact([
           'name' => $request->get('name'),
           'email' =>$request->get('email'), 
           'contactNo' =>$request->get('contactNo'),
           'msg' =>$request->get('msg'),
           'role_id' =>$request->get('role_id')
       ]);
        $contact->save();
        $request->session()->flash('success','Message Submit Successfully');
        return redirect('contact_us');
        
        return view('main/contact_us');
    }




    public function destroy(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
         $request->session()->flash('delete','Contact Deleted Successfully');
        return redirect('contact');
    }



}

