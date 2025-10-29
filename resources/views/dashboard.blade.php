<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sabor do Brasil - Usuário Logado</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .container {
      display: grid;
      grid-template-columns: 330px 1fr 200px;
      flex: 1;
    }

    .coluna {
      padding: 20px;
      background-color: #fff;
    }

    .perfil {
      text-align: center;
      border-right: none;
    }

    .foto-usuario {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 3px solid #D97014;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .usuario-nome {
      font-weight: bold;
      font-size: 25px;
      margin-bottom: 10px;
      color: #b45a0cff;
      font-family: "Quicksand", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: bold;
    }

    .interacoes {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-top: 20px;
    }

    .interacoes .numero {
      font-size: 22px;
      font-weight: bold;
      margin: 0;
      font-family: "Quicksand", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: bold;
    }

    .interacoes .rotulo {
      font-size: 13px;
      color: #555;
      margin: 0;
      font-family: "Quicksand", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: bold;
    }

    .linha {
      width: 80%;
      border: 2px solid #e8a56b;
      margin: 15px auto;
    }

    /* ===== PUBLICAÇÕES ===== */
    .publicacoes {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }

    .titulo-publicacoes {
      text-align: center;
      color: #ffffff;
      font-size: 30px;
      border-bottom: 2px solid #9c4909ff;
      padding-bottom: 40px;
      padding-top: 40px;
      padding-left: 40px;
      background-color: #d97014;
      width: 100%;
      font-family: "Lobster Two", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

    .card-publicacao {
      border: 2px solid #d97014;
      border-radius: 10px;
      padding: 10px 15px;
      background-color: #fff;
      width: 95%;
      max-width: 600px;
      margin-bottom: 20px;
    }

    .titulo-prato {
      color: #000;
      font-size: 18px;
      margin-bottom: 5px;
      text-align: left;
      font-family: "Quicksand", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: bold;
    }

    .imagem-prato {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 10px;
      border: 1px solid #0000;
    }

    .rodape-publicacao {
      display: flex;
      justify-content: space-between;
      font-size: 14px;
      align-items: center;
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

    .botao-com-imagem1 {
      border: none;
      background: transparent;
      cursor: pointer;
    }

    .botao-com-imagem2 {
      border: none;
      background: transparent;
      cursor: pointer;
    }

    .botao-com-imagem1 img,
    .botao-com-imagem2 img {
      width: 20px;
      transition: 0.2s;
    }

    .botao-com-imagem1.ativo img,
    .botao-com-imagem2.ativo img {
      filter: hue-rotate(330deg) #ff0000;
    }

    /* ===== COMENTÁRIOS ===== */
    .comentarios-container {
      display: none;
      margin-top: 10px;
      border-top: 1px solid #ccc;
      padding-top: 10px;
    }

    .comentario {
      background-color: #f2f2f2;
      border-radius: 10px;
      padding: 8px 10px;
      margin-bottom: 8px;
      position: relative;
    }

    .comentario strong {
      color: #D97014;
    }

    .botoes-comentario {
      position: absolute;
      top: 5px;
      right: 10px;
      display: flex;
      gap: 5px;
    }

    .input-comentario {
      display: flex;
      gap: 5px;
      margin-top: 8px;
    }

    .input-comentario input {
      flex: 1;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .input-comentario button {
      background-color: #D97014;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      cursor: pointer;
    }

    /* ===== BOTÃO SAIR ===== */
    .coluna-sair {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding-top: 20px;
      background-color: #fff;
      border-left: none;
    }

    .btn-sair {
      background-color: #D97014;
      color: white;
      padding: 10px 40px;
      border-radius: 15px;
      font-size: 18px;
      border: none;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn-sair:hover {
      background-color: #e08e00;
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
      filter: brightness(0) invert(1);
      transition: transform 0.2s;
    }

    .icone-rodape:hover {
      transform: scale(1.2);
    }
  </style>
</head>

<body>

  <div class="container">
    <!-- COLUNA PERFIL -->
    <div class="coluna perfil">
      <img src="{{ asset(Auth::user()->foto) }}" alt="Foto do Usuário" class="foto-usuario">
      <p class="usuario-nome">{{ Auth::user()->name }}</p>
      <hr class="linha">
      <div class="interacoes">
        <div class="like">
          <p class="numero">123</p>
          <p class="rotulo">Likes</p>
        </div>
        <div class="dislike">
          <p class="numero">12</p>
          <p class="rotulo">Dislikes</p>
        </div>
      </div>
    </div>

<!-- COLUNA PUBLICAÇÕES -->
    <div class="coluna publicacoes">
      <h1 class="titulo-publicacoes">Publicações</h1>

      <!-- === PUBLICAÇÃO 1 === -->
      <div class="card-publicacao">
        <h2 class="titulo-prato">Torresmo Crocante</h2>
        <img src="publicacao01.png" alt="Torresmo Crocante" class="imagem-prato">
        <div class="rodape-publicacao">
          <div class="interacoes-prato">
            <button class="botao-com-imagem1">
              <img src="flecha_cima_vazia.svg" alt="Curtir" class="icone-seta">
            </button><span>2</span>
            <button class="botao-com-imagem2">
              <img src="flecha_baixo_vazia.svg" alt="Descurtir" class="icone-seta">
            </button><span>2</span>
          </div>
          <div class="comentarios" onclick="toggleComentarios(this)">
            <img src="chat.svg" alt="Comentários" class="icone"><span>4</span>
          </div>
        </div>

        <!-- ÁREA DE COMENTÁRIOS -->
        <div class="comentarios-container">
          <div class="comentarios-lista"></div>
          <div class="input-comentario">
            <input type="text" placeholder="Escreva um comentário...">
            <button onclick="adicionarComentario(this)">Enviar</button>
          </div>
        </div>
      </div>

      <!-- === PUBLICAÇÃO 2 === -->
      <div class="card-publicacao">
        <h2 class="titulo-prato">Cuscuz Paulista</h2>
        <img src="publicacao02.png" alt="Cuscuz Paulista" class="imagem-prato">
        <div class="rodape-publicacao">
          <div class="interacoes-prato">
            <button class="botao-com-imagem1">
              <img src="flecha_cima_vazia.svg" alt="Curtir" class="icone-seta">
            </button><span>2</span>
            <button class="botao-com-imagem2">
              <img src="flecha_baixo_vazia.svg" alt="Descurtir" class="icone-seta">
            </button><span>2</span>
          </div>
          <div class="comentarios" onclick="toggleComentarios(this)">
            <img src="chat.svg" alt="Comentários" class="icone"><span>10</span>
          </div>
        </div>

        <div class="comentarios-container">
          <div class="comentarios-lista"></div>
          <div class="input-comentario">
            <input type="text" placeholder="Escreva um comentário...">
            <button onclick="adicionarComentario(this)">Enviar</button>
          </div>
        </div>
      </div>

      <!-- === PUBLICAÇÃO 3 === -->
      <div class="card-publicacao">
        <h2 class="titulo-prato">Frango com cubos de batata</h2>
        <img src="publicacao03.png" alt="Frango com batata" class="imagem-prato">
        <div class="rodape-publicacao">
          <div class="interacoes-prato">
            <button class="botao-com-imagem1">
              <img src="flecha_cima_vazia.svg" alt="Curtir" class="icone-seta">
            </button><span>2</span>
            <button class="botao-com-imagem2">
              <img src="flecha_baixo_vazia.svg" alt="Descurtir" class="icone-seta">
            </button><span>2</span>
          </div>
          <div class="comentarios" onclick="toggleComentarios(this)">
            <img src="chat.svg" alt="Comentários" class="icone"><span>2</span>
          </div>
        </div>

        <div class="comentarios-container">
          <div class="comentarios-lista"></div>
          <div class="input-comentario">
            <input type="text" placeholder="Escreva um comentário...">
            <button onclick="adicionarComentario(this)">Enviar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- COLUNA SAIR -->
    <div class="coluna-sair">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn-sair">Sair</button>
      </form>
    </div>
  </div>

  <!-- RODAPÉ -->
  <footer>
    <div class="rodape-conteudo">
      <span>Sabor do Brasil</span>
      <div class="rodape-icones">
        <img src="instagram.svg" alt="Instagram" class="icone-rodape">
        <img src="Twitter.svg" alt="Twitter" class="icone-rodape">
        <img src="whatsapp.svg" alt="WhatsApp" class="icone-rodape">
        <img src="Globe.svg" alt="Globo" class="icone-rodape">
      </div>
      <span>Copyright - 2024</span>
    </div>
  </footer>

  <script>

  // ===== COMENTÁRIOS =====
  const usuarioLogado = "{{ Auth::user()->name }}";

  function toggleComentarios(elemento) {
    const container = elemento.closest('.card-publicacao').querySelector('.comentarios-container');
    container.style.display = container.style.display === 'block' ? 'none' : 'block';
  }

  function adicionarComentario(botao) {
    const input = botao.previousElementSibling;
    const texto = input.value.trim();
    if (texto === "") return;

    const lista = botao.closest('.comentarios-container').querySelector('.comentarios-lista');
    const comentarioDiv = document.createElement('div');
    comentarioDiv.classList.add('comentario');

    comentarioDiv.innerHTML = `
      <strong>${usuarioLogado}:</strong> <span class="texto-comentario">${texto}</span>
      <div class="botoes-comentario">
         <img src="lapis_editar.svg" alt="Editar" onclick="editarComentario(this)" style="cursor:pointer; width:16px; height:16px; margin-right:5px;">
        <img src="lixeira_deletar.svg" alt="Excluir" onclick="excluirComentario(this)" style="cursor:pointer; width:16px; height:16px;">
      </div>
    `;

    lista.appendChild(comentarioDiv);
    input.value = "";
  }

  function excluirComentario(botao) {
    botao.closest('.comentario').remove();
  }

  function editarComentario(botao) {
    const comentarioDiv = botao.closest('.comentario');
    const spanTexto = comentarioDiv.querySelector('.texto-comentario');
    const textoAtual = spanTexto.textContent;

    const input = document.createElement('input');
    input.type = 'text';
    input.value = textoAtual;
    spanTexto.replaceWith(input);

    botao.onclick = function() {
      const novoSpan = document.createElement('span');
      novoSpan.classList.add('texto-comentario');
      novoSpan.textContent = input.value;
      input.replaceWith(novoSpan);

      // Recria as imagens com onclick
      const botoesDiv = comentarioDiv.querySelector('.botoes-comentario');
      botoesDiv.innerHTML = `
        <img src="lapis_editar.svg" alt="Editar" onclick="editarComentario(this)" style="cursor:pointer; width:16px; height:16px; margin-right:5px;">
        <img src="lixeira_deletar.svg" alt="Excluir" onclick="excluirComentario(this)" style="cursor:pointer; width:16px; height:16px;">
      `;
    };
  }
  </script>

</body>
</html>