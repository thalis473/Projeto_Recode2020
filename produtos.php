
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
?>



<!DOCTYPE html>
<html lang="pt--BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletro Recod-Produtos</title>
    <link rel=" stylesheet" href="./estilo.css">
    <script type="text/javascript" src="./interacao.js"></script>

</head>

<body>

 <!--menu-->
<?php
include('menu.html');
  ?>   

    <br><br>
    <div class="baner">
        <img width="100%" src="./img/header-surpresa.webp">
        <img width="200px" src="./img/24x.png">
        <img width="700px " src="./img/1000x408_Topo_3_Outlet_27032020_02.webp">
    </div>
    <br> <br> <br> <br> <br> <br> <br>

    <ul>
        <h3>Categorias </h3>
        <br>

        <li onclick="todos()">Todos (12)
        </li>
        <li onclick="lista('fogao')">Fogão (4)
        </li>
        <li onclick="lista('geladeira')"> Geladeira (5)
        </li>
        <li onclick="lista( 'liquidificador')"> Liquidificador (3)
        </li>
        <li onclick="lista('maquina de lavar')"> Maquina de lavar (2)
        </li>
        <li onclick="lista('cafeteira')">Cafeteira (4)
        </li>
        <li onclick="lista('ventilador')"> Ventilador (1)
        </li>
        <li onclick="lista('torradeira')"> Torradeira (4)
        </li>
        <li onclick="lista('tv')"> Televisão (7)
        </li>
        <li onclick="lista('arcondicionado')">Arcondicionado (3)
        </li>
        <li onclick="lista('radio')">Radio (5)
        </li>
        <li onclick="lista('microondas')">microondass (9)
        </li>
        <li onclick="lista('impressora')"> Impressora (2)
        </li>
    </ul>

    <!--IMAGENS DOS PRODUTOS-->
    
    <?php
include('produtos_bancodedados.php');
  ?>   

    <br><br><br><br><br>
    <!--RODAPÉ-->
    <footer>
        <h4>Formas de Pagamento</h4>
        <img width="50%" src="./img/metodo_de pagamento.png" alt="formas de pagamento">
        <div id="f">
            <p> &trade; Recod Eletro </p>
        </div>
    </footer>
</body>

</html>