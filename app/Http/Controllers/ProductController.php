<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_pro()
    {
        $product = product::all()->toarray();
        return view('admin/product/index',['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create_pro()
    {
        return view('admin/product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_pro(Request $request)
    {
        $data['name'] = $request->input('name');
        $data['price'] = $request->input('price');
        $data['description'] = $request->input('description');
        $data['picture'] = $request->input('picture');
        $data['picture2'] = $request->input('picture2');
        $data['picture3'] = $request->input('picture3');
        Product::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'picture' => $data['picture'],
            'picture2' => $data['picture2'],
            'picture3' => $data['picture3'],
            'description' => $data['description'],
        ]);
        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_pro($id)
    { 
        $product = product::find($id)->toarray();
        return view('admin/product/display',['product' => $product]);
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_pro($id)
    {
       $product = product::find($id)->toarray();
        return view('admin/product/edit',['product' => $product]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_pro(Request $request)
    {
        $id = $request->input('id');
        $data['name'] = $request->input('name');
        $data['price'] = $request->input('price');
        $data['description'] = $request->input('description');
        $data['picture'] = $request->input('picture');
        $data['picture2'] = $request->input('picture2');
        $data['picture3'] = $request->input('picture3');
        Product::find($id)->update([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
            'picture' => $data['picture'],
            'picture2' => $data['picture2'],
            'picture3' => $data['picture3'],

        ]);
        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_pro($id)
    {
        if (product::destroy($id)) {
            return redirect()->route('product');
        }
    }
}
