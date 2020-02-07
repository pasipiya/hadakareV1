<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use Auth;

class UserController extends Controller
{
  
   
   
    
    
    
    
//check authentication  
  public function __construct()
{
    $this->middleware('auth');
}  
    
    
  public function index()
    {  
      $role=Role::all();
      $users = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->select('users.*', 'roles.name as roleName')
            ->get();
    //return view('admin/create_users',compact('users'));
    return view('admin/create_users')->with('users',$users)->with('role',$role);
    } 
   

    
    public function index_edit_user()
    {   
   $id=Auth::user()->id; 
        $users = DB::table('users')->select('*')->where('id',$id)->get();
    //return view('admin/create_users',compact('users'));
    return view('admin/edit_profile')->with('users',$users);
    } 
    
   
 
    
          public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'email' =>'required',
            'role' =>'required',
        ]);
           
       $user = new User([
           'name' => $request->get('name'),
           'email' =>$request->get('email'),
           'role_id' =>$request->get('role'),
        
           
       ]);
           $user->save();
         $request->session()->flash('success','User Insert Successfully');
        return redirect('create_users');
      
              
    }
    
    
    
    public function destroy(Request $request, $id)
    {
        $saloon = User::find($id);
        $saloon->delete();
        $request->session()->flash('delete','Saloon Deleted Successfully');
        return redirect('create_users');
    }
    
    
    
    
    public function editUser(Request $request, $id)
    {
  request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

  

        request()->image->move(public_path('images'), $imageName);
 
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->address = $request->get('address');
        $user->contact = $request->get('contact');
        $user->pic = $imageName;
        
    
        $user->save();
        
         $request->session()->flash('success','User Information Updated Successfully');
        return redirect('edit_profile');
      
    }
    
    
}


