<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sabor do Brasil</title>
  <link rel="stylesheet" href="sabor_brasil.css">
</head>
<body>
  <div class="container">

    <div class="coluna perfil">
      <img src="logo_sabor_do_brasil.png" alt="Logo Sabor do Brasil" class="logo">

      <h2 class="titulo">Sabor do Brasil</h2>
      <hr class="linha">

      <div class="interacoes">
        <div class="like">
          <p class="numero">9</p>
          <p class="rotulo">Quantidade Likes</p>
        </div>
        <div class="dislike">
          <p class="numero">12</p>
          <p class="rotulo">Quantidade Dislikes</p>
        </div>
      </div>
    </div>

    <div class="coluna publicacoes">
      <h1 class="titulo-publicacoes">Publicações</h1>
<!-- 1 -->
      <div class="card-publicacao">
        <h2 class="titulo-prato">Torresmo Crocante</h2>
        <img src="imagem/publicacao01.png" alt="Torresmo Crocante" class="imagem-prato">

        <div class="rodape-publicacao">
          <div class="lado-esquerdo">
            <div class="interacoes-prato">
              <img src="imagem/flecha_cima_vazia.svg" alt="Like" class="icone">
              <span class="numero">2</span>
              <img src="imagem/flecha_baixo_vazia.svg" alt="Dislike" class="icone">
              <span class="numero">1</span>
            </div>
          </div>

          <div class="lado-direito">
            <span class="local">Maceió-AL</span>
            <br><br>
            <div class="comentarios">
              <img src="chat.svg" alt="Comentários" class="icone">
              <span class="numero">4</span>
            </div>
          </div>
        </div>
      </div>

<!-- 2 -->
      <div class="card-publicacao">
        <h2 class="titulo-prato">Cuscuz Paulista</h2>
        <img src="publicacao02.png" alt="Cuscuz Paulista" class="imagem-prato">

        <div class="rodape-publicacao">
          <div class="lado-esquerdo">
            <div class="interacoes-prato">
              <img src="flecha_cima_vazia.svg" alt="Like" class="icone">
              <span class="numero">2</span>
              <img src="flecha_baixo_vazia.svg" alt="Dislike" class="icone">
              <span class="numero">1</span>
            </div>
          </div>

          <div class="lado-direito">
            <span class="local">Maceió-AL</span>
            <br><br>
            <div class="comentarios">
              <img src="chat.svg" alt="Comentários" class="icone">
              <span class="numero">10</span>
            </div>
          </div>
        </div>
      </div>

<!--    3 -->
      <div class="card-publicacao">
        <h2 class="titulo-prato">Frango com cubos de batata</h2>
        <img src="publicacao03.png" alt="Frango com cubos de batata" class="imagem-prato">

        <div class="rodape-publicacao">
          <div class="lado-esquerdo">
            <div class="interacoes-prato">
             <img src="flecha_cima_vazia.svg" alt="Like" class="icone">
              <span class="numero">2</span>
              <img src="flecha_baixo_vazia.svg" alt="Dislike" class="icone">
              <span class="numero">1</span>
            </div>
          </div>

          <div class="lado-direito">
            <span class="local">Maceió-AL</span>
            <br><br>
            <div class="comentarios">
              <img src="chat.svg" alt="Comentários" class="icone">
              <span class="numero">2</span>
            </div>
          </div>
        </div>
      </div>
    </div>

 


    <div class="coluna login"></div>

  </div>
  <style>body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.container {
  display: grid;
  grid-template-columns: 330px 600px 350px;
  height: 100vh;
}

.coluna {
  padding: 20px;
  border: 1px solid #ccc;
}


.perfil {
  text-align: center;
}

.logo {
  width: 70px;
  border: 1px solid #D97014;
  border-radius: 10px;
  margin-bottom: 10px;
}

.titulo {
  color: #000;
  margin-bottom: 5px;
}


.linha {
  width: 80%;
  border: 1px solid #ccc;
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
}

.interacoes .rotulo {
  font-size: 14px;
  color: #555;
  margin: 0;
}


.publicacoes {
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 20px;
  display: flex;
  flex-direction: column; 
  align-items: center; 
  gap: 20px; 
}

.titulo-publicacoes {
  text-align: center;
  color: #000;
  font-size: 22px;
  margin-bottom: 15px;
  border-bottom: 2px solid #C2BEBE;
  padding-bottom: 5px;
  width: 100%;
}


.card-publicacao {
  border: 1px solid #C2BEBE;
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
}


.imagem-prato {
  width: 100%;
  margin-bottom: 10px;
}


.rodape-publicacao {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 14px;
}

.lado-esquerdo {
  display: flex}

.botao-com-imagem {
  width: 30px;
  height: 30px;
  border: none;
  background-image: url('img/flecha_cima_vazia.svg');
  background-size: cover;
}

.botao-com-imagem:active {      
  background-image: url('img/flecha_cima_cheia.svg');
}
</style>
</body>
</html>