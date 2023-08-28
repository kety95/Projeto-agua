<?php
    session_start();
    include_once 'cabecalho.php';
?>


<html>  
    <main>  
        <h2 class="title"> <a href="carrinho.php">Carrinho</a> <img src="imagens/carrinho3.png" alt=""></h2>
        <div class="carrinho-container">
            <?php
                $itens1 = array(['nome'=>'Agua uva','imagem'=>'imagens/latauva2.jpg','preco'=>'8'],
                ['nome'=>'Agua laranja','imagem'=>'imagens/latalaranja2.jpg','preco'=>'8']);
                /*$itens2 = array(['nome'=>'agua3','imagem'=>'imagens/latamorango.jpg','preco'=>'8'],
                ['nome'=>'agua4','imagem'=>'imagens/latagas.jpg','preco'=>'6']);
                $itens3 = array(['nome'=>'agua5','imagem'=>'imagens/latamineral.jpg','preco'=>'6'],
                ['nome'=>'agua6','imagem'=>'imagens/latalimao.jpg','preco'=>'8']);*/

                foreach ($itens1 as $key => $value1){

                
            ?>
                <div class="produto">
                    <img src="<?php echo $value1['imagem'] ?>" />
                    <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho <img src="imagens/carrinho2.png" alt=""></a>
                </div> <!--produto-->
            <?php
                }
            ?>
        </div> <!--carrinho-container-->

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <?php
            if(isset($_GET['adicionar'])){
                //vamos adicionar ao carrinho
                $idProduto = (int) $_GET['adicionar'];
                if(isset($itens1[$idProduto])){
                    if(isset($_SESSION['carrinho1'][$idProduto])){
                        $_SESSION['carrinho1'][$idProduto]['quantidade']++;
                    }else{
                        $_SESSION['carrinho1'][$idProduto] = array('quantidade' =>1, 'nome' => $itens1[$idProduto]['nome'],'preco'=>$itens1[$idProduto]['preco']);
                    }
                    echo '<script>swal("O item foi adicionado ao carrinho")</script>';
                }else{
                    die('você não pode adicionar um produto que não existe');
                    }

            }
            include_once 'itens.php';
        ?>      
    </main>
    <?php include_once "rodape.php"; ?>
</body>
</html>

