<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use Auth;
class RoleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    
    
    //check authentication  
  public function __construct()
{
    $this->middleware('auth');
}  
    
    
  public function index()
    {   
        $id=Auth::user()->id; 
        $roles=Role::all();
        return view('admin/create_user_roles')->with('roles',$roles);
    } 
   

    
       public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'description' =>'required'
        ]);
           
       $user = new Role([
           'name' => $request->get('name'),
           'description' =>$request->get('description')
           
           
       ]);
           $user->save();
           $request->session()->flash('success','User Role Insert Successfully');
           return redirect('create_user_roles');
       
      
    }
    
    
        public function destroy(Request $request, $id)
    {
        $saloon = Role::find($id);
        $saloon->delete();
        $request->session()->flash('delete','User Role Deleted Successfully');
        return redirect('create_user_roles');
    }
    
    
    

    
    
    
}
