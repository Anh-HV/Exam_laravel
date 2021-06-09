<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

use App\Models\Products;

use App\Models\Category;

class ProductsController extends Controller
{
    public function indexUser(){
        $categories = Category::all();
        $products = Products::all();

        return view('products.List-product',compact('categories','products'));
    }
    public function index(){
        $categories = Category::all();

    
        $products = Products::all();

        return view('backend.products.List-product',compact('categories','products'));
    }
    public function store(){
        $categories = Category::all();  

        return view('backend.products.Store-product',compact('categories'));
    }
    public function create(ProductRequest $request){    
        $product = new Products();
        $product->fill($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('products', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('list.product')->with('add_success','Thêm Sản Phẩm Thành Công');;
    }
    public function delete($id){

        $product= Products::find($id);
        dd($product);
        $product->delete();  
        return redirect()->route('list.product')->with('delete_success','Xóa Sản Phẩm Thành Công');;  
    }
    public function search(Request $request){
        $categories = Category::all();  
        $products = Products::where('price','like', "%$request->search%");
        return redirect()->route('search.product')->with('delete_success','Tim Phẩm Thành Công');;  
    }
}
