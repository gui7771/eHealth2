<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); //tras todas as categorias para montar o combobox de escolha

        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'category_id' => 'required',
            'value_sale' => 'numeric',
            'value_cost' => 'numeric'
        ]);


        try {
            Product::create($request->only(['name','category_id','value_sale','value_cost','obs']));
            return redirect(route('products.index'))->with('status','Produto cadastrado com sucesso');
        } catch (\Exception $exception) {
            return redirect(route('products.index'))->with('error','Erro ao cadastrar o Produto: ' . $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:100',
            'category_id' => 'required',
            'value_sale' => 'numeric',
            'value_cost' => 'numeric'
        ]);


        try {
            $product->name = $request->name;
            $product->category_id = $request->category_id;
            $product->value_sale = $request->value_sale;
            $product->value_cost = $request->value_cost;
            $product->obs = $request->obs;
            $product->save();
            return redirect(route('products.index'))->with('status','Produto cadastrado com sucesso');
        } catch (\Exception $exception) {
            return redirect(route('products.index'))->with('error','Erro ao cadastrar o Produto: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
