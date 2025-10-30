@extends('layouts.app')
@section('content')
    
    <div class="coluna publicacoes">

        <h1 class="titulo-publicacoes text-center" style = "; 
           color: var(--branco); 
           font-family: 'Arial', sans-serif; 
           font-size: 40px; 
           font-weight: bold; 
           text-align: center; 
           margin: 5px auto; 
           ">Publicações</h1>
    

        @foreach($publicacoes as $publicacao)
        <div class="card-publicacao relative"  x-data="{ open: false }">
            <h2 class="titulo-prato">{{$publicacao->titulo_prato}}</h2>
            <img src="{{ asset($publicacao->foto)}}" class="imagem-prato">
            <div class="rodape-publicacao">
                <div class="interacoes-prato">
                    @auth
                    <form action="{{ route('publicacoes.like', $publicacao)}}" method="POST">
                        @csrf
                        <button 
                        @auth
                            onlick="this.form.submit()"
                        @endauth
                        
                        @guest
                            id="abrirPopup2"
                        @endguest>
                            @php
                                $liked = $publicacao->likes->where('user_id', auth()->id())->count() > 0;
                            @endphp
                            <img src="{{ asset('' . ($liked ? 'flecha_cima_cheia.svg' : 'flecha_cima_vazia.svg'))}}">
                        </button>
                    </form>
                    @endauth
                    <span>{{ $publicacao->likes->count() }}</span>
                    @auth
                    <form action="{{ route('publicacoes.deslike', $publicacao)}}" method="POST">
                        @csrf
                        <button
                        @auth
                            onlick="this.form.submit()"
                        @endauth
                        
                        @guest
                            id="abrirPopup2"
                        @endguest>
                        
                            @php
                                $desliked = $publicacao->deslikes->where('user_id', auth()->id())->count() > 0;
                            @endphp
                            <img src="{{ asset('' . ($desliked ? 'flecha_baixo_cheia.svg' : 'flecha_baixo_vazia.svg'))}}">
                        </button>
                    </form>
                    @endauth
                    <span>{{ $publicacao->deslikes->count() }}</span>
                </div>
                <div class="flex items-center justify-end pr-2 gap-2">
                    <button  @click="open = !open">
                        <img src="chat.svg" class="w-6 h-6">
                    </button>
                    <span>{{ $publicacao->comentarios->count() }}</span>
                </div>
            </div> 

            <div x-show="open" x-transition class="comentarios-container col-span-2 mt-2 space-y-2">
                @auth 
                <div class="comentarios-lista ">
                    <strong>{{Auth::user()->name}}</strong>
                    
                    <form action="{{ route('publicacoes.comentar', $publicacao) }}" method="POST" class="flex gap-2">
                        @csrf
                        <input type="text" name="comentario" placeholder="Escreva um comentário..." class="border rounded p-1 flex-1">
                        <button type="submit" class="bg-[#D97014] text-white px-3 rounded">Enviar</button>
                    </form>
                </div>
                @endauth
                
                @foreach($publicacao->comentarios as $comentario)
                <div x-data="{ editando: false}" class="border p-2 rounded bg-gray grid grid-cols-3">
                    <div class="col-span-2 flex gap-2" >
                        <strong>{{$comentario->user->name}}:</strong>
                        <span x-show="!editando">{{$comentario->comentario}}</span>
                        
                        <form x-show="editando" x-cloak x-transition method="POST" action="{{ route('comentarios.update', $comentario) }}" class="absolute flex gap-2">
                            @csrf 
                            @method('PATCH')
                            <input type="text" class="border rounded p-1 flex-1 h-full" name="comentario" value="{{ $comentario->comentario }}">
                            <button type="submit" class="bg-[#D97014] text-white px-3 rounded">Comentar</button>
                        </form>
                    </div>

                    <div class="justify-items-end py-1">
                        @if(auth()->id() === $comentario->user_id)
                        <div class="flex gap-2 text-sm" x-cloak x-show="!editando">
                            <button @click="editando = true" class="text-[#D97014] hover:underline">
                                <img class="h-4 w-4" src="lapis_editar.svg">
                            <button>

                            <form method="POST" action="{{route('comentarios.destroy', $comentario)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hover:underline">
                                    <img class="p-1 h-6 w-6" src="lixeira_deletar.svg">
                                </button>
                            </form>
                        </div>
                        @endif
                    </div>

                </div>
                @endforeach
            </div>
            </div>
        @endforeach
    </div>

    
@endsection