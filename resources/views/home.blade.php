<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Sabor do Brasil</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

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

    header {
      background: var(--branco);
      padding: 14px 28px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.06);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header .logo-top {
      display:flex;
      gap:12px;
      align-items:center;
    }
    header .logo-top img { width:44px; height:44px; border-radius:8px; border:2px solid var(--laranja-escuro); }
    header .logo-top h1 { font-size:20px; font-weight:700; color:var(--preto); }

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
    .logo { width: 70px; border: 2px solid var(--laranja-escuro); border-radius: 10px; margin-bottom: 10px; }
    .titulo { color: var(--preto); font-weight:700; margin-bottom: 6px; font-size:18px; }
    .linha { width: 80%; border: 1px solid var(--cinza); margin: 8px auto 16px auto; }

    .interacoes { display:flex; justify-content:space-around; align-items:center; margin-top:10px; }
    .interacoes .numero { font-size:22px; font-weight:700; color:var(--laranja-escuro); }
    .interacoes .rotulo { font-size:13px; color:#666; }

    .publicacoes { 
      padding: 0; 
      background: transparent; 
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
      background: transparent;
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
    .card-publicacao:hover{
      transform: translateY(-4px);
      box-shadow: 0 8px 18px rgba(0,0,0,0.08);
    }

    .titulo-prato { color: var(--laranja-escuro); font-size:18px; font-weight:700; margin-bottom:8px; text-align: left; }
    .imagem-prato { width:100%; border-radius:10px; margin-bottom:10px; display:block; }

    .rodape-publicacao {
      display:flex; justify-content:space-between; align-items:center; font-size:14px;
    }
    .lado-esquerdo, .lado-direito { display:flex; align-items:center; gap:8px; }

    .interacoes-prato { display:flex; align-items:center; gap:8px; }
    .icone { width:18px; height:18px; }

    .botao-com-imagem1, .botao-com-imagem2 {
      width: 22px;
      height: 22px;
      border: none;
      background-size: cover;
      cursor: pointer;
      background-repeat: no-repeat;
    }
    .botao-com-imagem1 { background-image: url('flecha_cima_vazia.svg'); }
    .botao-com-imagem1:active { background-image: url('flecha_cima_cheia.svg'); }
    .botao-com-imagem2 { background-image: url('flecha_baixo_vazia.svg'); }
    .botao-com-imagem2:active { background-image: url('flecha_baixo_cheia.svg'); }

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
      border: 2px solid var(--laranja-claro);
      padding: 22px;
      border-radius: 12px;
      width: 320px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.12);
    }
    .popup-content input { width:100%; padding:8px; margin-bottom:10px; border:1px solid #ddd; border-radius:6px; }

    .btn-entrar, .btn-cancelar {
      padding:8px 16px; border-radius:8px; cursor:pointer; font-weight:600;
    }
    .btn-entrar { background: var(--laranja-escuro); color:var(--branco); border: none; }
    .btn-entrar:hover { background: var(--laranja-claro); color:var(--preto); }
    .btn-cancelar { background: transparent; color: var(--laranja-escuro); border: 2px solid var(--laranja-escuro); }
    .btn-cancelar:hover { background: var(--laranja-claro); color: var(--preto); }

    footer {
      background-color: var(--preto);
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
      <img src="logo_sabor_do_brasil.png" alt="Logo Sabor do Brasil" class="logo">
      <h2 class="titulo">Sabor do Brasil</h2>
      <hr class="linha">

      <div class="interacoes">
        <div class="like">
          <p class="numero">{{ $QuantLike }}</p>
          <p class="rotulo">Quantidade Likes</p>
        </div>
        <div class="dislike">
          <p class="numero">{{ $QuantDeslike }}</p>
          <p class="rotulo">Quantidade Dislikes</p>
        </div>
      </div>
    </div>

    <div class="coluna publicacoes">
      <div class="publicacoes-top">Publicações</div>

      <div class="publicacoes-conteudo">

        <div class="card-publicacao">
          <h2 class="titulo-prato">Torresmo Premium com Limão e Molho da Casa</h2>
          <img src="publicacao01.png" alt="Torresmo Crocante" class="imagem-prato" />
          <div class="rodape-publicacao">
            <div class="lado-esquerdo">
              <div class="interacoes-prato">
                <button class="botao-com-imagem1" aria-label="Curtir"></button>
                <span class="numero">2</span>
                <button class="botao-com-imagem2" aria-label="Não curti"></button>
                <span class="numero">1</span>
              </div>
            </div>
            <div class="lado-direito">
              <div class="comentarios">
                <img src="chat.svg" alt="Comentários" class="icone" />
                <span class="numero">4</span>
              </div>
            </div>
          </div>
        </div>

        <div class="card-publicacao">
          <h2 class="titulo-prato">Cuscuz Paulista com Salada Verde</h2>
          <img src="publicacao02.png" alt="Cuscuz Paulista" class="imagem-prato" />
          <div class="rodape-publicacao">
            <div class="lado-esquerdo">
              <div class="interacoes-prato">
                <button class="botao-com-imagem1" aria-label="Curtir"></button>
                <span class="numero">3</span>
                <button class="botao-com-imagem2" aria-label="Não curti"></button>
                <span class="numero">0</span>
              </div>
            </div>
            <div class="lado-direito">
              <div class="comentarios">
                <img src="chat.svg" alt="Comentários" class="icone" />
                <span class="numero">2</span>
              </div>
            </div>
          </div>
        </div>

        <div class="card-publicacao">
          <h2 class="titulo-prato">Frango Grelhado com Crocantes de Batata</h2>
          <img src="publicacao03.png" alt="Frango com cubos de batata" class="imagem-prato" />
          <div class="rodape-publicacao">
            <div class="lado-esquerdo">
              <div class="interacoes-prato">
                <button class="botao-com-imagem1" aria-label="Curtir"></button>
                <img src="flecha_cima_vazia.svg" alt="">
                <span class="numero">2</span>
                <button class="botao-com-imagem2" aria-label="Não curti"></button>
                <span class="numero">1</span>
              </div>
            </div>
            <div class="lado-direito">
              <div class="comentarios">
                <img src="chat.svg" alt="Comentários" class="icone" />
                <span class="numero">2</span>
              </div>
            </div>
          </div>
        </div>

      </div> 
    </div> 

    <div class="coluna login">
      <button class="bt_entrar" id="abrirPopup2">Entrar</button>
    </div>
  </div>

  <div id="popup" class="popup">
    <div class="popup-content">
      <h3>Entrar</h3>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" type="email" name="email" placeholder="Email" required />
        <input id="password" type="password" name="password" placeholder="Senha" required />
        <div style="display:flex; gap:10px; justify-content:center; margin-top:10px;">
          <button type="button" class="btn-cancelar" id="cancelar">Cancelar</button>
          <button type="submit" class="btn-entrar">Entrar</button>
        </div>
      </form>
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

    window.addEventListener('click', function(e){
      if (e.target === popup) popup.style.display = 'none';
    });
  </script>
</body>
</html>