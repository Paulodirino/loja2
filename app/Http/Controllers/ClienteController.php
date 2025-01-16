<?php

namespace App\Http\Controllers;
use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProductRequest;






class ClienteController extends Controller
{
    public function index(cliente $product)
    {
        $cliente = $cliente->all();
        //print_r('Teste');
        return view("cliente.index", compact('clientes'));

        //
    }
    public function create()
    {
        return view("cliente.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateclienteRequest $request)
    {
        $cliente = cliente::create($request->validated());
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = cliente::find((int)$id);
        
        if(isset($cliente)){
            back();
        }
        //print_r($cliente);
        return view('cliente.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
   
        $cliente = cliente::find((int)$id);
        
        if(isset($cliente)){
            back();
        }
        //print_r($cliente);
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateclienteRequest $request, string $id)
    {

        $cliente = cliente::find ((int)$id);
        if(isset($cliente)){
            back();
        }
        $cliente->update($request->validated());
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = cliente::find($id);

    if ($cliente) {
        // Adicione esta linha para ver se a função é chamada
        logger('Método destroy foi chamado para o cliente ID: ' . $id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'cliente deletado com sucesso.');
    }

    return redirect()->route('clientes.index')->with('error', 'cliente não encontrado.');

    }

}
