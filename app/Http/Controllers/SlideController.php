<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function show()
    {
        $slides = Slide::all();
        $products = Product::where('available',1)->get();
        return view('admin.manageSlides',compact('slides','products'));
    }

    public function delete($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return back();
    }

    public function add(Request $request)
    {
        $slide = new Slide;
        $slide->category_id = $request->category;
        $slide->restaurant_id = 1;
        $file = $request->file('img');
        if ( $request->hasFile('img') && !is_null($request->img) ) {
            $path = random_int(0 , 99999).time().'_.'.$request->img->getClientOriginalExtension();
            $file->move(public_path('upload') , $path);
            $slide->img = $path;
        }
        $slide->save();
        return back();
    }
}
