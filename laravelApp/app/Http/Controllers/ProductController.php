<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index',['products'=>Product::get()]);
    }
    public function create(){
        return view('products.create'); 
    }
    public function store(Request $request){
        //dd($request);
        $request->validate([
            'name' => 'required',
            'price' =>  'required',
            'status' => 'required',
            'image' => 'required'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'),$imageName);
        $product = new Product;
        $product->image=$imageName;
        $product->name=$request->name;
        $product->status=$request->status;
        $product->price=$request->price;
        $product->save();
         return redirect('/');


         
    }

    public function edit($id){
        $product=Product::where('id',$id)->first();
        return view('products.edit',['product'=>$product]); 
    }

    public function update(Request $request, $id){
        //dd($request);
        $request->validate([
            'name' => 'required',
            'price' =>  'required',
            'status' => 'required',
            'image' => 'required'
        ]);

        $product=Product::where('id',$id)->first();

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'),$imageName);
        
        $product->image=$imageName;
        $product->name=$request->name;
        $product->status=$request->status;
        $product->price=$request->price;
         $product->save();
         return redirect('/')->withSuccess('goodly worked..!!');
    
    }
    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back();
    }


}
