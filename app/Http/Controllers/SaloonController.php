<?php

namespace App\Http\Controllers;

use App\Saloon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

class SaloonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
public function __construct()
{
    $this->middleware('auth');
}  
    
    
    public function index()
    {
        $id=Auth::user()->id;
        $allSaloon = Saloon::all();
        $saloon_data = DB::table('saloon')->select('*')->where('user_id',$id)->get();
         return view('admin/edit_saloon')->with('saloon_data',$saloon_data)->with('allSaloon',$allSaloon);
        //return view('admin/edit_saloon',compact('saloon_data'));
    }

    
      public function acceptSaloon(Request $request, $id)
    {
        $accept = Saloon::find($id);
        $accept->status = '1';
        $accept->save();
        $request->session()->flash('success','Saloon Accepted Successfully');
        return redirect('edit_saloon');
    }
    
    
        public function deactiveSaloon(Request $request, $id)
    {
        $accept = Saloon::find($id);
        $accept->status = '0';
        $accept->save();
        $request->session()->flash('success','Saloon Deactive Successfully');
        return redirect('edit_saloon');
    }  
    
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    
        public function addSaloon(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'address' =>'required',
            'city'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',    
        ]);
           


        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);  
            
            
            
       $saloon = new Saloon([
           'saloon_name' => $request->get('name'),
           'city' => $request->get('city'),
           'address' =>$request->get('address'),
           'user_id'=>$request->get('saloon_id'),
           'logo' => $imageName,
                
       ]);
           $saloon->save();
        $request->session()->flash('success','Saloon Insert Successfully');
        return redirect('edit_saloon');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function show(Saloon $saloon)
    {
        $id = $_GET['salon'];
        $salons = Saloon::where ( 'id', 'LIKE', '%' . $id . '%' )->get ();
        return view ( 'main.account' )->with('saloons',$salons)->withQuery ( $id );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function edit(Saloon $saloon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saloon $saloon)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $saloon = Saloon::find($id);
        $saloon->delete();
        $request->session()->flash('delete','Saloon Deleted Successfully');
        return redirect('edit_saloon');
    }

    public function main_index()
    {
        $salons = Saloon::all();
        return view('main/salon')->with('saloons',$salons);
    }

    public function main_search_salons(){
        $q = $_GET['search1'];
        $salons = Saloon::where ( 'saloon_name', 'LIKE', '%' . $q . '%' )->orWhere ( 'city', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $salons ) > 0)
        // return User::find($users);
            return view ( 'main.salon' )->with('saloons',$salons)->withQuery ( $q );
         else
             return view ('main.salon')->withMessage ('No Details found. Try to search again !')->with('saloons',$salons);
    }
}
