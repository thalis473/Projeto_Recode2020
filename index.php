<!DOCTYPE html>
<html lang="pt--Br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Eletro Recod</title>
  <link rel=" stylesheet" href="./estilo.css">
  <script type="text/javascript" src="./interacao.js"></script>
  
</head>

<body>
 
 <!--menu-->
<?php
include('menu.html');
  ?>

  <br>
  <h2>Bem vindo(a)!</h2>

  <p>Aqui na nossa loja os <em>programadores tem desconto</em> para sua casa!</p>
  <hr>
  <div class="baner">
    <img width="100%" src="./img/header-surpresa.webp">
    <img width="200px" src="./img/24x.png">
    <img width="700px " src="./img/1000x408_Topo_3_Outlet_27032020_02.webp">
  </div>

  <br><br><br><br><br>

  <h3> Toda variedade de Tecnologia você encontra aqui !</h3>

  <br><br><br><br><br> <br>

  <div id="dp">
    <div class="produtos">

      <p><a href="produtos.html"><img src="./img/auto-min.webp" width="100px" onmouseout="imagem_produtos(this)"><br>
          Automotivos</a></p>

      <p><a href="produtos.html"><img src="./img/notebook-min.webp" width="100px"
            onmouseout="imagem_produtos(this)"><br> Informática </a> </p>

      <p><a href="produtos.html"><img src="./img/galaxy-min.webp" width="100px" onmouseout="imagem_produtos(this)"><br>
          Smarthones</a>

        <p><a href="produtos.html"><img src="./img/ultilidade.webp" width="100px"
              onmouseout="imagem_produtos(this)"><br>Ultilidades Domésticas</a> <br>
        </p>

    </div>

    <div class="produtos">

      <p><a href="produtos.html"><img src="./img/bebida.webp" width="100px" onmouseout="imagem_produtos(this)"><br>
          Bebidas</a></p>

      <p><a href="produtos.html"><img src="./img/audio.webp" width="100px" onmouseout="imagem_produtos(this)"><br>
          Audio</a> </p>

      <p><a href="produtos.html"><img src="./img/decora.webp" width="100px"
            onmouseout="imagem_produtos(this)"><br>Decoração</a> </p>

      <p><a href="produtos.html"><img src="./img/eletro portateis.webp" width="100px"
            onmouseout="imagem_produtos(this)"> <br>Eletroportáteis</a> </p>

    </div>
  </div>

  <br> <br> <br><br><br><br><br><br><br><br><br>
  <footer>
    <h4>Formas de Pagamento</h4>

    <img width="50%" src="./img/metodo_de pagamento.png" alt="formas de pagamento">

    <div id="f">
      <p> &trade; Recod Eletro </p>
    </div>
  </footer>
</body>

</html>