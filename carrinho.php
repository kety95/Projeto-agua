<html>
<?php include_once 'cabecalho.php'; 
        // echo "<h2 class='title2'> Carrinho <img src='imagens/carrinho3.png' alt=''></h2>";?>
    <main>
        <?php
        session_start();
       

        foreach ($_SESSION['carrinho1'] as $key => $value){
            //nome do produto
            //quantidade
            //preco
            echo '<div class="carrinho-item">';
            echo $value['imagem'].'<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | preco: '.($value['quantidade']*$value['preco']).'</p>';
            echo '</div>';
        }

        // foreach ($_SESSION['carrinho2'] as $key => $value2){
        //     //nome do produto
        //     //quantidade
        //     //preco
        //     echo '<div class="carrinho-item">';
        //     echo '<p>Nome: '.$value2['nome'].' | Quantidade: '.$value2['quantidade'].' | preco: '.($value2['quantidade']*$value2['preco']).'</p>';
        //     echo '</div>';
        // }

        // foreach ($_SESSION['carrinho3'] as $key => $value3){
        //     //nome do produto
        //     //quantidade
        //     //preco
        //     echo '<div class="carrinho-item">';
        //     echo '<p>Nome: '.$value3['nome'].' | Quantidade: '.$value3['quantidade'].' | preco: '.($value3['quantidade']*$value3['preco']).'</p>';
        //     echo '</div>';
        // }
        ?>
        <?php
        echo "<h2 class='title3'> <a href='carrinho.php'>Adiquirir</a> <img src='imagens/carrinho3.png' alt=''></h2>
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
        
        echo '<script>swal("ITEM ADIQUIRIDO!");</script>';
        ?>
    </main>
    <?php include_once "rodape.php"; ?>
</html>