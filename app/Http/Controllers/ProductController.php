<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /// list all product with pagination

    public function index()
    {
    
       /// list all product with pagination 
         $products = Product::paginate(5);

        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    
/// delete product 
public function destroy($id){
    /// delete product where id 
    Product::where('id', $id)->delete();
    return redirect()->route('products')->with('success', 'Product deleted successfully');
}

public function store(Request $request){
    /// validate data 
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'quantity' => 'required',
    ]);
    /// create new product 
    Product::create($request->all());
    return redirect()->route('products');
}
public function edit($id){
    /// find product by id 
    $product = Product::find($id);
    return view('products.edit', compact('product'));
}
public function update(Request $request, Product $product){
  
    $product->fill($request->post())->save();
    return redirect()->route('products');
}
}
