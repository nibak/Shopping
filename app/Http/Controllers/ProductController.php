<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = product::all();
      return view('shop.index', ['products'=>$products]);
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
      request()->validate([
        'title'=> 'required',
        'content'=> 'required',
        'image'=> 'required',
        'category_id'=> 'required',
]);

$product = new post();
$product->title = request('title');
$product->colour = request('content');
$product->content = request('image');
$product->user_id = Auth::user()->id;
$product->category_id =category()->id;
$product->save();

return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('products.show', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('shop.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
      equest()->validate([
        'title'=> 'required',
        'content'=> 'required',
        'image'=> 'required',
        'category_id'=> 'required',

    ]);

    $product->update($request->all());

    return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
      $post->delete();
return redirect('posts');
    }
}
