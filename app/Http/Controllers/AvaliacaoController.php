<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliacaoController extends Controller
   {
    public function like(Request $request)
    {

        $avaliacao = Avaliacao::find($request->publicacao_id);
        $avaliacao->likes++; // incrementa o campo valor (substitua "valor" pelo campo correto)
        $avaliacao->update();

        return redirect()->back()->with('success', 'Valor incrementado com sucesso');
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}