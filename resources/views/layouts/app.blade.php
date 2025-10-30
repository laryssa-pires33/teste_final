<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quicksand:wght@300..700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sabor do Brasil</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@01" type="module"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
    
      :root{
        --branco: #FFFFFF;
        --preto: #000000;
        --laranja-escuro: #D97014; 
        --laranja-claro: #E8A56B;  
        --cinza: #C2BEBE;
        --vermelho: #FF0000;
        --fundo-suave: #FFF5E9; 
      }

      *{ box-sizing: border-box; margin: 0; padding: 0; }
      html,body{ height:100%; }
      body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--fundo-suave);
        color: var(--preto);
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      .container {
        display: grid;
        grid-template-columns: 330px 1fr 350px; 
        gap: 20px;
        width: 100%;
        max-width: 1200px;
        margin: 18px auto;
        align-items: start;
        padding: 0 12px;
        flex: 1;
      }

      .coluna {
        background-color: var(--branco);
        padding: 20px;
        border: 1px solid var(--cinza);
        border-radius: 8px;
      }

      .perfil { text-align: center; }
      .logo { width: 70px; border: 2px solid var(--laranja-escuro); border-radius: 10px; margin-bottom: 10px; margin-left:100px; }
      .titulo { color: var(--laranja-escuro); font-weight:700; margin-bottom: 6px; font-size:18px; }
      .linha { width: 80%; border: 1px solid var(--cinza); margin: 8px auto 16px auto; }

      .interacoes { display:flex; justify-content:space-around; align-items:center; margin-top:10px; }
      .interacoes .numero { font-size:22px; font-weight:700; color:var(--preto); }
      .interacoes .rotulo { font-size:13px; color:#666; }

      .publicacoes { 
        padding: 8; 
        background-color: var(--laranja-escuro);
        border: none;
      }

      .publicacoes-top {
        background-color: var(--laranja-claro);
        color: var(--preto);
        border-radius: 12px;
        padding: 14px;
        text-align: center;
        font-weight: 700;
        font-size: 22px;
        margin-bottom: 18px;
        width: 100%;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        letter-spacing: 0.6px;
      }

      .publicacoes-conteudo {
        display: flex;
        flex-direction: column;
        gap: 18px;
        align-items: center;
        padding-top: 6px;       
        border-radius: 8px;
      }

      .card-publicacao {
        width: 100%;
        max-width: 680px;
        background-color: var(--branco);
        border: 2px solid var(--cinza);
        border-radius: 12px;
        padding: 12px 14px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        transition: transform .15s ease, box-shadow .15s ease;
      }
      .titulo-prato { 
        color: var(--laranja-escuro); 
        font-size:18px; font-weight:700; 
        margin-bottom:8px; 
        text-align: left; 
      }

      .imagem-prato { 
        width:100%; 
        border-radius:10px; 
        margin-bottom:10px; 
        display:block; 
        border: 1px solid var(--preto); 
      }

      .rodape-publicacao {
        display:flex; 
        justify-content:space-between; 
        align-items:center; 
        font-size:14px;
      }

      .lado-esquerdo, .lado-direito 
      { display:flex; 
        align-items:center; 
        gap:8px; }

      .interacoes-prato { 
        display:flex; 
        align-items:center; 
        gap:8px;
      }

      .icone { 
        width:18px; 
        height:18px; 
      }

      .botao-com-imagem{
        width: 1.5rem;
        height: 1.5rem;
        border: none;
        background-size: cover;
        cursor: pointer;
        background-repeat: no-repeat;
      }

      .login { display:flex; flex-direction:column; align-items:center; gap:18px; }
      .bt_entrar {
        background-color: var(--laranja-escuro);
        color: var(--branco);
        padding: 12px 40px;
        border-radius: 15px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        cursor:pointer;
        transition: background .2s;
      }
      .bt_entrar:hover { background-color: var(--laranja-claro); color: var(--preto); }


      .popup { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:1200; }
      .popup-content {
        background: var(--branco);
        border: 2px solid #908080ff;
        padding: 22px;
        border-radius: 10px;
        width: 320px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.12);
      }

      .popup-login{
        font-family: "Urbanist", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: bold;
      }
      .popup-content input { width:100%; padding:8px; margin-bottom:10px; border:2px solid #908080ff; border-radius:6px; }

      .btn-entrar, .btn-cancelar {
        padding:8px 16px; border-radius:8px; cursor:pointer; font-weight:600;
      }
      .btn-entrar { background: var(--laranja-escuro); color:var(--branco); border: none; }
      .btn-entrar:hover { background: var(--laranja-claro); color:var(--preto); }
      .btn-cancelar { background: transparent; color: var(--laranja-escuro); border: 2px solid var(--laranja-escuro); }
      .btn-cancelar:hover { background: var(--laranja-claro); color: var(--preto); }

      footer {
        background-color: var(--laranja-escuro);
        color: var(--branco);
        text-align:center;
        padding: 20px 10px;
        font-weight:600;
        margin-top: auto;
      }

      .rodape-conteudo {
        display:flex;
        gap:10px;
        align-items:center;
        justify-content: space-between;
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 12px;
      }

      .rodape-icones { display:flex; gap:14px; align-items:center; justify-content:center; }
      .icone-rodape { width:22px; height:22px; cursor:pointer; filter: brightness(0) invert(1); transition: transform .18s; }
      .icone-rodape:hover { transform: scale(1.2); }

      @media (max-width: 1000px) {
        .container { grid-template-columns: 1fr; padding: 12px; max-width: 900px; }
        .coluna { margin-bottom: 12px; }
        .publicacoes-conteudo { align-items: stretch; }
        .rodape-conteudo { flex-direction: column; gap:8px; padding: 12px 0; }
      }
    </style>
  </head>
  <body>  
    <div class="container">

      <div class="coluna perfil">
        @auth
          <div class="">
            <img src="{{ Auth::user()->foto}}" class="logo">
          </div>
          <h1>{{ Auth::user()->name }}</h1>
        @endauth
        @guest
          <img src="logo_sabor_do_brasil.png" alt="Logo Sabor do Brasil" class="logo">
          <h2 class="titulo">Sabor do Brasil</h2>
        @endguest
        <hr class="linha">

        <div class="interacoes">
          <div class="like">
            @auth
              <p class="numero">{{ $QuantLikeUser }}</p>
            @endauth
            @guest
              <p class="numero">{{ $QuantLike }}</p>
            @endguest
            <p class="rotulo">Quantidade Likes</p>
          </div>
          <div class="dislike">
            @auth
              <p class="numero">{{ $QuantDeslikeUser }}</p>
            @endauth
            @guest
              <p class="numero">{{ $QuantDeslike }}</p>
            @endguest
            <p class="rotulo">Quantidade Dislikes</p>
          </div>
        </div>

      </div>

      <main>
        @yield('content')
      </main>

      <div class="coluna login">
        @guest
          <button class="bt_entrar" id="abrirPopup">Entrar</button>
        @endguest

        @auth
        <form method="POST" action="{{route('logout')}}">
          @csrf
          <button type="submit" class="bt_entrar">Sair</button>
        </form> 
        @endauth
      </div>

      <div id="popup" class="popup">
        <div class="popup-content">
          <h3 class="popup-login">Login</h3>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <input id="email" type="email" name="email" placeholder="Digite seu email" required />
            <input id="password" type="password" name="password" placeholder="Digite sua senha" required />
            <div style="display:flex; gap:10px; justify-content:center; margin-top:10px;">
              <button type="button" class="btn-cancelar" id="cancelar">Cancelar</button>
              <button type="submit" class="btn-entrar">Entrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <footer>
      <div class="rodape-conteudo">
        <div style="flex:1; text-align:left;">Sabor do Brasil</div>
        <div class="rodape-icones">
          <img src="Instagram.svg" alt="Instagram" class="icone-rodape" />
          <img src="Twitter.svg" alt="Twitter" class="icone-rodape" />
          <img src="Whatsapp.svg" alt="WhatsApp" class="icone-rodape" />
          <img src="Globe.svg" alt="Site" class="icone-rodape" />
        </div>
        <div style="flex:1; text-align:right;">&copy; 2025 Sabor do Brasil</div>
      </div>
    </footer>

    <script>
      const popup = document.getElementById('popup');
      const abrir = document.getElementById('abrirPopup');
      const abrir2 = document.getElementById('abrirPopup2');
      const cancelar = document.getElementById('cancelar');

      if(abrir) abrir.onclick = () => popup.style.display = 'flex';
      if(abrir2) abrir2.onclick = () => popup.style.display = 'flex';
      if(cancelar) cancelar.onclick = () => popup.style.display = 'none';

            // fechar ao clicar fora
      window.addEventListener('click', function(e){
          if (e.target === popup) popup.style.display = 'none';
      });
    </script>

  </body>
</html>