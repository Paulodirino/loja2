<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\StoreUpdateProduct;
=======

use App\Http\Requests\StoreUpdateProductRequest;
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
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
<<<<<<< HEAD
        return view('product.index', compact('products'));
=======
        //print_r('Teste');
        return view("product.index", compact('products'));

        //
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('product.create');
=======
        return view("product.create");
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(StoreUpdateProduct $request)
    {
        //criar meu produto no banco
        $pd = Product::create($request->validated());

        // redirecionar para index
=======
    public function store(StoreUpdateProductRequest $request)
    {
        $product = Product::create($request->validated());
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find((int)$id);
        
<<<<<<< HEAD
        if(!isset($product)){
            return back();
        }

        return view('product.show', compact('product'));
=======
        if(isset($product)){
            back();
        }
        //print_r($product);
        return view('product.show',compact('product'));
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
<<<<<<< HEAD
        $product = Product::find((int)$id);
        
        if(!isset($product)){
            return back();
        }

        return view('product.edit', compact('product'));
=======
   
        $product = Product::find((int)$id);
        
        if(isset($product)){
            back();
        }
        //print_r($product);
        return view('product.edit',compact('product'));
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(StoreUpdateProduct $request, string $id)
    {
        $product = Product::find((int)$id);
        if(!isset($product)){
            return back();
        }

        //atualizar meu produto no banco
        $pd = $product->update($request->validated());

        // redirecionar para index
=======
    public function update(StoreUpdateProductRequest $request, string $id)
    {

        $product = Product::find ((int)$id);
        if(isset($product)){
            back();
        }
        $product->update($request->validated());
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        $product = Product::find((int)$id);
        if(!isset($product)){
            return back();
        }

        $product->delete();
        return redirect()->route('products.index');
=======
        $product = Product::find($id);

    if ($product) {
        // Adicione esta linha para ver se a função é chamada
        logger('Método destroy foi chamado para o produto ID: ' . $id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produto deletado com sucesso.');
    }

    return redirect()->route('products.index')->with('error', 'Produto não encontrado.');

>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
    }
}
