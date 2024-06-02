<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $products =  Product::get();
       return view('pages.home',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $file = $request->file('image');
        $path=   $file?$file->Store('images','public'):null;

       Product::create([
        'title'=>$request->title,
        'details'=>$request->details,
        'status'=>$request->status,
        'stock'=>$request->stock,
        'image'=>$path,
       ]);

    return  redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      $product = Product::find($id);

       
        return view('pages.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

     $product =   Product::find($id);

        $product-> update([
            'title'=>$request->title,
            'details'=>$request->details,
            'status'=>$request->status,
            'stock'=>$request->stock,
           ]);

           return  redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {

        $product =Product::find($id);
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        
       
        Product::where('id',$id)->delete();
        return  redirect()->route('home');
        
    }
  
}
