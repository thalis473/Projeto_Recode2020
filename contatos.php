
<?php
// de o valor as variaveis
$servername="localhost";
$username="root";
$passaword="";
$database= "recode_eletro";

/* cria a conexo atraves de uma logica
$conn e uma vriavel padrão
mysqli_ será a biblioteca das funçoes do banco de dados*/

$conn = mysqli_connect( $servername,$username,$passaword,$database);

# A logica para verificaçao da conexão;
if(!$conn){
die("A conexão ao BD falhou: ". mysqli_connect_error());#essa logica não e obrigatoria, porém sempre e bom fazer, pra eliminar um futuro problema a menos de conexão.
}
if(isset($_POST['nome']) && isset($_POST['numero']) && isset($_POST['msg']) ){ # Nesse if , a minha condição e pra enviar todos os dados,  o usuario precisa preencher todos os campos, pra eu poder continuar com o programa, caso ao contrario else.

  $nome= $_POST['nome'];#nessa variavel armazenarei o nome do usuario.
  $numero= $_POST['numero'];#numero do usuario.
  $msg= $_POST['msg'];# comentario do usuario.

  # na variavel $SQL passamos o comando de envio dos valores no banco de dados.
 $sql="insert into comentarios (nome,numero,msg) values('$nome',$numero,'$msg' )";
  
$resul=$conn->query($sql);#ele executa cada linha do banco de dados.

  };


?>

<!DOCTYPE html>
<html lang="pt--BR">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Eletro Recod -Contatos</title>
  <link rel="stylesheet" href="./estilo.css">
  <script type="text/javascript" src="./interacao.js"></script>

<body>
  <!--menu-->

  <?php
include('menu.html');
  ?>
  
  <br><br>
  <div>

    <img width="75%" height="" src="./img/banner-entre-em-contato-informacoes-de-frete-prefiro-vinho.png" alt="contato">
    <hr>
  </div>
  <br><br><br><br><br>
  
  <!--contatos-->
  <section>
    <img width="100px" src="./img/email.png" alt="e-mail"><br><br>
    <b> ouvidoria@eletrorecod.com </b><br> <br>

    <img width="100px" src="./img/whatapp.jpg" alt="WhatsApp"><br><br>
    <b>(21) 9956-3265 <b><br><br>

    <img width="100px" src="./img/ouvidoria.png" alt="Ouvidoria"><br><br>
     <b>(21) 2244-5565 <b>

  </section>

  <!--fim dos contatos-->
  <br><br><br><br>

  <form method="post" action"">
    <h2>Deixe aqui seu feedback </h2>
    <h3> Escreva seu Nome</h3>
    <input type="text" name="nome" placeholder="digite aqui">
    <br>
    <h3>Número Telefônico</h3>
    <input type="number" name="numero" placeholder="(ddd)xxx-xxx ">
    <br>
    <h3>Comentario</h3>
    <textarea type="text" rows="10" cols="50" name="msg" placeholder="comente aqui">
      </textarea>
    <br>
    <input  type="submit" name="submit"  onclick="enviar()" value="Enviar" >
  </form>
 
  <!--comando  para lista os feedback dos usuarios na paginas-->
  <?php

  $sql ="Select * from comentarios";  
    
  $result = $conn->query($sql);// resultado da consulta armazena na variavel $result, pra isso usamos $conn(conexão) com query(banco de dados), executando a funçao da variavel $sql.
  
  if($result-> num_rows > 0){ #num_rows = numero de linhas no Banco de dados.
  
  while($rows = $result-> fetch_assoc()){
    echo "Data: ", $rows['data'],"<br>"; # $rows vai direcionar a linha da tabela no banco de dados.
    echo "nome: ", $rows['nome'],"<br>";
    echo "msg: ",  $rows['msg'],"<br>";
    echo "<hr>";
    
  };
};

  ?>
  
 
  <!--rodapé-->

  <br> <br>
  <br> <br>
  <br> <br>
  <br> <br>

  <footer>
    <div id="f">
      <p> &trade; Recod Eletro </p>
    </div>
  </footer>
</body>

</html>