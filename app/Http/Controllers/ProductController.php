<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id = -1)
    {
        $product = Product::find($id);
        $html = $this->getCategories($product);
        if($id != -1)
        {
            return view('admin.editProduct',compact('html','product'));
        }

        return view('admin.addProduct',compact('html'));
    }

    public function add(Request $request)
    {
        $product = new Product();
        foreach ($request->except(['_method','_token','img','add_product']) as $key => $value)
            $product->$key = $value;
        $arr = [];
        $images = $request->file('img');
        foreach ($images as $image) {
            if ( $request->hasFile('img') && !is_null($request->img) ) {
                $path = random_int(0 , 99999).time().'_.'.$image->getClientOriginalExtension();
                $image->move(public_path('upload') , $path);
                $arr[] = $path;
            }
        }
        $product->pics = $arr;
        $product->save();
        return back();
    }

    public function deleteProduct($id)
    {
        $p = Product::find($id);
        if(!$p) return back();
        $this->deleteFile('upload/'.$p->img);
        $p->delete();
        return back();
    }

    public function update($id,Request $request)
    {
        $null = null;
        $html = $this->getCategories($null);

        $product = Product::find($id);
        foreach ($request->except(['_method','_token','img','add_product']) as $key => $value)
        {
            if(!empty($value))
                $product->$key = $value;
        }
        $product->save();

        return back();
    }

    public function manageProducts()
    {
        $products = Product::paginate(10);
        return view('admin.showProduct',compact('products'));
    }

    public function getCategories(&$product)
    {
        $html = '<div class="p-1 lister">';
        $modals = "";
        $categories = Category::all();
        foreach ($categories as $category)
        {
            $check = ($product && $category->id == $product->category->id) ? 'checked' : '';
            $html .= '<h5><span>+ </span> <input type="radio" name="category_id" '.$check.' value="'.$category->id.'"> <span class="text-info">'.$category->name.'</span><span class="col-5"></span>';
            echo "<br>";
            $html .= '</div>';
        }
        $html .= '</div>';
        return $html;
    }

    public function deleteFile($file)
    {
        $file = (isset(glob($file)[0])) ? glob($file)[0] : 'nothing';
        if(is_file($file))
            unlink($file);
    }
}
