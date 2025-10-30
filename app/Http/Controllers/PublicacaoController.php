<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacao;
use App\Models\Comentario;
use App\Models\Like;
use App\Models\Deslike;

class PublicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Aqui da para pegar tudo que tem no banco de dado referente as publicações. Não precisava fazer 
        // Publicação de um por um :)
        $publicacoes = Publicacao::all();

        // Aqui conta os Likes e Deslikes em geral
        $QuantLike = Like::count();
        $QuantDeslike = Deslike::count();

        // Aqui conta os Likes e Deslikes do usuario logado
        $QuantLikeUser= Like::where('user_id', auth()->id())->count();
        $QuantDeslikeUser= Deslike::where('user_id', auth()->id())->count();

        return view ('index', compact('publicacoes', 'QuantLike', 'QuantDeslike', 'QuantLikeUser', 'QuantDeslikeUser'));

    }
    // Isso coloca o comentario no banco de dados
    public function comentar(Request $request, Publicacao $publicacao){
        $publicacao->comentarios()->create([
            'user_id' => auth()->id(),
            'comentario' => $request->comentario,
        ]);

        return back();
    }
    
    public function atualizarComentario(Request $request, Comentario $comentario)
    {
        if ($comentario->user_id !== auth()->id()) {
            abort(403, 'Acesso negado');
        }

        $request->validate([
            'comentario' => 'required|string|max:500',
        ]);

        $comentario->update([
            'comentario' => $request->comentario,
        ]);

        return back()->with('success', 'Comentário atualizado com sucesso!');
    }

    public function excluirComentario(Comentario $comentario)
    {
        if ($comentario->user_id !== auth()->id()) {
            abort(403, 'Acesso negado');
        }

        $comentario->delete();

        return back()->with('success', 'Comentário excluído com sucesso!');
    }

    
    // Isso aqui é para adicionar os likes no banco de dados
    // Isso aqui é para adicionar os likes no banco de dados
    public function like(Publicacao $publicacao){
        $user = auth()->user();
        
        if ($publicacao->likes()->where('user_id', $user->id)->exists()){
            $publicacao->likes()->where('user_id', $user->id)->delete();
        } else {
            if ($publicacao->deslikes()->where('user_id', $user->id)->exists()){
            $publicacao->deslikes()->where('user_id', $user->id)->delete();
        }
            $publicacao->likes()->create(['user_id' =>$user->id]);
        }
        return back();
    }
    
    // Isso aqui é para adicionar os deslikes no banco de dados
    public function deslike(Publicacao $publicacao){
        $user = auth()->user();

        if ($publicacao->deslikes()->where('user_id', $user->id)->exists()){
            $publicacao->deslikes()->where('user_id', $user->id)->delete();
        } else {
            if ($publicacao->likes()->where('user_id', $user->id)->exists()){
            $publicacao->likes()->where('user_id', $user->id)->delete();
            }
            $publicacao->deslikes()->create(['user_id' =>$user->id]);
        }
        return back();
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