<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use App\Gallery;
use App\Saloon;
use App\Category;

class GalleryController extends Controller
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
        return view('admin/gallery')->with('gallery_data',$gallery_data)->with('allGallery',$allGallery)->with('saloon_data',$saloon_data)
        ->with('category_data',$category_data); 
        return view('admin/gallery');
    }
    
     
       public function addGalleryImage(Request $request)
    {
        $this->validate($request, [
            'saloon_name' =>'required',
            'category_name' =>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',    
        ]);
           


        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);  
            
            
            
       $gallery = new Gallery([
            'user_id' => $request->get('user_id'),
           'saloon_id' => $request->get('saloon_name'),
           'category_id' => $request->get('category_name'),
           'pic' => $imageName,
                
       ]);
           $gallery->save();
        $request->session()->flash('success','Image Insert Successfully');
        return redirect('add_gallery');
    }

    public function destroy(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $image=$gallery->pic;
        $image_path = "/images/$image";   // Value is not URL but directory file path 
        unlink(public_path() . $image_path);
        $gallery->delete();
        $request->session()->flash('delete','Image Deleted Successfully');
        return redirect('add_gallery');
        
    }
    
    public function acceptImage(Request $request, $id)
    {
        $accept = Gallery::find($id);
        $accept->status = '1';
        $accept->save();
        $request->session()->flash('success','Image Accepted Successfully');
        return redirect('add_gallery');
    }
    
    
        public function deactiveImage(Request $request, $id)
    {
        $accept = Gallery::find($id);
        $accept->status = '0';
        $accept->save();
        $request->session()->flash('success','Image Deactive Successfully');
        return redirect('add_gallery');
    }  
    
    
}
