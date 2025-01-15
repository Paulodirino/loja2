<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $products = $product->all();
        //print_r('Teste');
        return view("product.index", compact('products'));

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateProductRequest $request)
    {
        $product = Product::create($request->validated());
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find((int)$id);
        
        if(isset($product)){
            back();
        }
        //print_r($product);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
   
        $product = Product::find((int)$id);
        
        if(isset($product)){
            back();
        }
        //print_r($product);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateProductRequest $request, string $id)
    {

        $product = Product::find ((int)$id);
        if(isset($product)){
            back();
        }
        $product->update($request->validated());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

    if ($product) {
        // Adicione esta linha para ver se a função é chamada
        logger('Método destroy foi chamado para o produto ID: ' . $id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produto deletado com sucesso.');
    }

    return redirect()->route('products.index')->with('error', 'Produto não encontrado.');

    }
}
