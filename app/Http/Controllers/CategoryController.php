<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\User;
use App\Role;
use Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
        
    public function index()
    {
        $category=Category::all();
        return view('admin/create_category')->with('category',$category);
    }

    public function acceptCategory(Request $request, $id)
    {
        $accept = Category::find($id);
        $accept->status = '1';
        $accept->save();
        $request->session()->flash('success','Category Accepted Successfully');
        return redirect('create_category');
    }
    
    
        public function deactiveCategory(Request $request, $id)
    {
        $accept = Category::find($id);
        $accept->status = '0';
        $accept->save();
        $request->session()->flash('success','Category Deactive Successfully');
        return redirect('create_category');
    }  

    public function addCategory(Request $request)
    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

  

        request()->image->move(public_path('images'), $imageName);

            $this->validate($request, [
            'category_name' =>'required',
            
            
           
        ]);
           
       $category = new Category([
           'category_name' => $request->get('category_name'),
           'category_des' =>$request->get('category_des'), 
           'pic' =>$imageName,    
       ]);
        $category->save();
        $request->session()->flash('success','Category Insert Successfully');
        return redirect('create_category');
    }

    public function destroy(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        $request->session()->flash('delete','Category Deleted Successfully');
        return redirect('create_category');
    }

    public function main_index()
    {
        $category=Category::all();
        return view('main/trending')->with('category',$category);
    }

    
}


