<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use App\Gallery;
use App\Saloon;
use App\Category;
use App\Package;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
    
    public function index()
    {
        $id=Auth::user()->id;
        $category_data = Category::all();
        $saloon_data = DB::table('saloon')->select('*')->where('user_id',$id)->get();
        $allGallery = Gallery::all();
        $gallery_data = DB::table('gallery')->select('*')->where('user_id',$id)->get();
        $allPackage = Package::all();
        $package_data = DB::table('package')->select('*')->where('user_id',$id)->get();
        return view('admin/package')->with('gallery_data',$gallery_data)->with('allGallery',$allGallery)->with('saloon_data',$saloon_data)
        ->with('category_data',$category_data)->with('package_data',$package_data)
        ->with('allPackage',$allPackage);
    }



    
    public function addPackage(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'saloon_name' =>'required',
            'category_name' =>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',    
        ]);
           

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);  
            
            
            
       $package = new Package([
            'user_id' => $request->get('user_id'),
           'saloon_id' => $request->get('saloon_name'),
           'category_id' => $request->get('category_name'),
           'pic' => $imageName,
           'package_name' => $request->get('name'),
           'price' => $request->get('price'),
                
       ]);
           $package->save();
        $request->session()->flash('success','Pacakge Insert Successfully');
        return redirect('package');
    }

    public function destroy(Request $request, $id)
    {
        $package = Package::find($id);
        $image=$package->pic;
        $image_path = "/images/$image";   // Value is not URL but directory file path 
        unlink(public_path() . $image_path);
        $package->delete();
        $request->session()->flash('delete','Package Deleted Successfully');
        return redirect('package');
        
    }
    
    public function acceptPackage(Request $request, $id)
    {
        $accept = Package::find($id);
        $accept->status = '1';
        $accept->save();
        $request->session()->flash('success','Package Accepted Successfully');
        return redirect('package');
    }
    
    
        public function deactivePackage(Request $request, $id)
    {
        $accept = Package::find($id);
        $accept->status = '0';
        $accept->save();
        $request->session()->flash('success','Package Deactive Successfully');
        return redirect('package');
    }  



}
