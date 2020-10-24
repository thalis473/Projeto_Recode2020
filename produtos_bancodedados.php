
<!-- comando de interaçao com o banco de dados , referente aos produtos cadastrado-->

<section class="organizacao"> <!--class para estilização do css-->

    <?php
    
        $sql ="Select * from produtos";  #logica pra executar a consulta no banco de dados.
    
    $result = $conn->query($sql);// resultado da consulta armazena na variavel $result, pra isso usamos $conn(conexão) com query(banco de dados), executando a funçao da variavel $sql.
    
    if($result-> num_rows > 0){ #num_rows = numero de linhas no Banco de dados.
    
    while($rows = $result-> fetch_assoc()){ #se tiver mais de uma linha , a estrutura de repetição entra em ação, pra poder executar linha por linha.
    ?>
    
    <!--diferente de antes(antigo projeto html ), só precisei de uma estrutura pra se repetir de acordo com a quantidade de linhas que eu tiver no banco de dados-->
     
    <div class="itens1" id="<?php echo $rows["categoria"];?>">
                <img width="100px" height="100px" src="<?php echo $rows["imagem"];?>" onmouseover="destaque(this)">
                <p id="text1"> <?php echo $rows["descricao"];?></p>
                <hr>
                <p id="text2"> <?php echo $rows["preco"];?> </p>
                <p id="text3"> <?php echo $rows["precoFinal"];?></p>
            </div>
    <!--essa div será executada de acordo com a quantidade de produtos cadastrado no meu banco de dados-->
        
        <?php
        
    }
    }
    else{
        echo "Nehum produto cadastrado!"; #resultado da condiçao caso o nehuma linha seja encontrada. 
    }
    ?>
    
    
          
    
          
        </section>