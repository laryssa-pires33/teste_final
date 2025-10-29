<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sabor do Brasil</title>
  

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #e8a56b;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ======= GRID PRINCIPAL ======= */
    .container {
      display: grid;
      grid-template-columns: 330px 600px 350px;
      flex: 1;
    }

    .coluna {
      padding: 20px;
      background-color: #e8a56b;
    }

    /* ======= COLUNA PERFIL ======= */
    .perfil {
      text-align: center;
      
    }

    .logo {
      width: 90px;
      margin-bottom: 10px;
    }

    .titulo {
      color: #ffff;
      margin-bottom: 5px;
      font-family: "Quicksand", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: bold;
    }

    .linha {
      width: 80%;
      border: 2px solid #d97014;
      margin: 0 auto 15px auto;
    }

    .interacoes {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-top: 10px;
    }

    .interacoes .numero {
      font-size: 24px;
      font-weight: bold;
      margin: 0;
      font-family: "Quicksand", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
    }

    .interacoes .rotulo {
      font-size: 14px;
      color: #fff;
      margin: 0;
      font-family: "Quicksand", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: bold;
    }

    /* ======= COLUNA PUBLICAÇÕES ======= */
    .publicacoes {
      background-color: #e8a56b;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    .titulo-publicacoes {
      text-align: center;
      color: #d97014;
      font-size: 30px;
      border-bottom: 2px solid #9c4909ff;
      padding-bottom: 40px;
      padding-top: 40px;
      padding-left: 40px;
      background-color: #ffff;
      width: 100%;
      font-family: "Lobster Two", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

    .card-publicacao {
      border: 1px solid #181616ff;
      border-radius: 5px;
      padding: 10px 15px;
      background-color: #fff;
      width: 90%;
      max-width: 600px;
    }

    .titulo-prato {
      color: #000;
      font-size: 18px;
      margin: 5px 0;
      text-align: left;
      font-family: "Quicksand", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: normal;
    }

    .imagem-prato {
      width: 100%;
      margin-bottom: 10px;
      border-radius: 10px;
      border: 2px solid #181616ff;
    }

    .rodape-publicacao {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
    }

    .lado-esquerdo {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .interacoes-prato {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .icone {
      width: 18px;
      height: 18px;
    }

    /* ======= COLUNA LOGIN ======= */
    .login {
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: #e8a56b;
    }

    .bt_entrar {
      background-color: #d97014;
      color: white;
      padding: 12px 40px;
      border-radius: 15px;
      border: 2px solid #181616ff;
      font-size: 18px;
      cursor: pointer;
      transition: 0.3s;
      font-family: "Quicksand", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: bold;
    }

    .bt_entrar:hover {
      background-color: #e08e00;
    }

    /* ======= BOTÕES LIKE/DISLIKE ======= */
    .botao-com-imagem1, .botao-com-imagem2 {
      width: 20px;
      height: 20px;
      border: none;
      background-size: cover;
      cursor: pointer;
    }

    .botao-com-imagem1 {
      background-image: url('flecha_cima_vazia.svg');
    }

    .botao-com-imagem2 {
      background-image: url('flecha_baixo_vazia.svg');
    }


    /* ======= POP-UP ======= */
     /* ======= POP-UP LOGIN ======= */
    .popup {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0,0,0,0.5);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .popup-content {
      background-color: white;
      padding: 25px 30px;
      border-radius: 15px;
      text-align: center;
      width: 300px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .popup-content h2 {
      margin-bottom: 20px;
    }

    .popup-content input {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .popup-content input.erro {
      border-color: red;
    }

    .botoes-popup {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
    }

    .btn-cancelar {
      background: none;
      border: 2px solid #D97014;
      color: #D97014;
      padding: 8px 18px;
      border-radius: 10px;
      cursor: pointer;
    }

    .btn-entrar {
      background-color: #D97014;
      color: #fff;
      border: none;
      padding: 8px 18px;
      border-radius: 10px;
      cursor: pointer;
    }

    .mensagem-erro {
      color: red;
      font-size: 13px;
      margin-top: 10px;
    }

    footer {
      background-color: #D97014;
      color: white;
      text-align: center;
      padding: 12px 0;
      font-size: 14px;
      font-weight: bold;
      margin-top: auto;
    }

    /* ===== RODAPÉ ===== */
footer {
  background-color: #D97014;
  color: white;
  text-align: center;
  padding: 12px 0;
  font-size: 14px;
  font-weight: bold;
  margin-top: auto;
}

.rodape-conteudo {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 900px;
  margin: 0 auto;
  padding: 0 20px;
}

.rodape-texto-esquerda,
.rodape-texto-direita {
  flex: 1;
  text-align: center;
}

.rodape-icones {
  display: flex;
  gap: 15px;
  align-items: center;
  justify-content: center;
  flex: 1;
}

.icone-rodape {
  width: 20px;
  height: 20px;
  cursor: pointer;
  filter: brightness(0) invert(1); /* deixa branco */
  transition: transform 0.2s;
}

.icone-rodape:hover {
  transform: scale(1.2);
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
          <p class="numero">444</p>
          <p class="rotulo">Likes</p>
        </div>
        <div class="dislike">
          <p class="numero">34</p>
          <p class="rotulo">Dislikes</p>
        </div>
      </div>
    </div>

    <div class="coluna publicacoes">
      <h1 class="titulo-publicacoes">Publicações</h1>
      <div class="card-publicacao">
        <h2 class="titulo-prato">Delícia de Peixe</h2>
        <img src="publicacao01.png" alt="Delícia de Peixe" class="imagem-prato">

        <div class="rodape-publicacao">
          <div class="lado-esquerdo">
            <div class="interacoes-prato">
              <button class="botao-com-imagem1" ></button>

              <span class="numero">148</span>
              <button class="botao-com-imagem2"></button>
              <span class="numero">6</span>
            </div>
          </div>
          <div class="lado-direito">
            <div class="comentarios">
              <img src="chat.svg" alt="Comentários" class="icone">
              <span class="numero">10</span>
            </div>
          </div>
        </div>
      </div>

      <div class="card-publicacao">
        <h2 class="titulo-prato">Tesouro Paulista</h2>
        <img src="publicacao02.png" alt="Tesouro Paulista" class="imagem-prato">

        <div class="rodape-publicacao">
          <div class="lado-esquerdo">
            <div class="interacoes-prato">
              <button class="botao-com-imagem1" ></button>
              <span class="numero">56</span>
              <button class="botao-com-imagem2"></button>
              <span class="numero">19</span>
            </div>
          </div>

          <div class="lado-direito">
            <div class="comentarios">
              <img src="chat.svg" alt="Comentários" class="icone">
              <span class="numero">10</span>
            </div>
          </div>
        </div>
      </div>

      <div class="card-publicacao">
        <h2 class="titulo-prato">Filé de Frango com Batatas Douradas</h2>
        <img src="publicacao03.png" alt="Filé de Frango com Batatas Douradas" class="imagem-prato">

        <div class="rodape-publicacao">
          <div class="lado-esquerdo">
            <div class="interacoes-prato">
              <button class="botao-com-imagem1"></button>
              <span class="numero">210</span>
              <button class="botao-com-imagem2"></button>
              <span class="numero">9</span>
            </div>
          </div>
          <div class="lado-direito">
            <div class="comentarios">
              <img src="chat.svg" alt="Comentários" class="icone">
              <span class="numero">33</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="coluna login">
      <button class="bt_entrar" id="abrirPopup">Entrar</button>
    </div>
  </div>

        <div id="popup" class="popup">
          <div class="popup-content">
            <form method="POST" action="{{ route('login') }}" id="formLogin">@csrf
              <h2>Login</h2>
              <input id="email" type="email" name="email" placeholder="Digite seu email"required >
              <input id="password" type="password" name="password" placeholder="Digite sua senha"required>
              <div class="botoes-popup">
                <button type="button" class="btn-cancelar" id="cancelar">Cancelar</button>
                <button type="submit" class="btn-entrar" id="entrar">Entrar</button>
              </div>
            </form>
          </div>
        </div>

 <footer>
  <div class="rodape-conteudo">
    <span class="rodape-texto-esquerda">Sabor do Brasil</span>

    <div class="rodape-icones">
      <img src="instagram.svg" alt="Instagram" class="icone-rodape">
      <img src="Twitter.svg" alt="Twitter" class="icone-rodape">
      <img src="whatsapp.svg" alt="WhatsApp" class="icone-rodape">
      <img src="Globe.svg" alt="WhatsApp" class="icone-rodape">
    </div>

    <span class="rodape-texto-direita">Copyright - 2024</span>
  </div>
</footer>

<script>
    const popup = document.getElementById('popup');
    const abrir = document.getElementById('abrirPopup');
    const cancelar = document.getElementById('cancelar');
    const entrar = document.getElementById('entrar');

    abrir.onclick = () => popup.style.display = 'flex';
    cancelar.onclick = () => popup.style.display = 'none';

    entrar.onclick = () => {
      usuario.classList.remove('erro');
      senha.classList.remove('erro');
      msgErro.textContent = '';
    };
</script>
</body>
</html>
</body>
</html>