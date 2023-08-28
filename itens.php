<div class="carrinho-container">
            <?php
                $itens2 = array(['nome'=>'Agua morango','imagem'=>'imagens/latamorango2.jpg','preco'=>'8'],
                ['nome'=>'Agua com gás','imagem'=>'imagens/latagas2.jpg','preco'=>'6']);

                foreach ($itens2 as $key => $value2){

                
            ?>
                <div class="produto">
                    <img src="<?php echo $value2['imagem'] ?>" />
                    <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho<img src="imagens/carrinho2.png" alt=""></a>
                </div> <!--produto-->
            <?php
                }
            ?>
        </div> <!--carrinho-container-->
        <?php
            if(isset($_GET['adicionar'])){
                //vamos adicionar ao carrinho
                $idProduto = (int) $_GET['adicionar'];
                if(isset($itens2[$idProduto])){
                    if(isset($_SESSION['carrinho2'][$idProduto])){
                        $_SESSION['carrinho2'][$idProduto]['quantidade']++;
                    }else{
                        $_SESSION['carrinho2'][$idProduto] = array('quantidade' =>1, 'nome' => $itens2[$idProduto]['nome'],'preco'=>$itens2[$idProduto]['preco']);
                    }
                    echo '<script>swal("O item foi adicionado ao carrinho")</script>';
                }else{
                    die('você não pode adicionar um produto que não existe');
                    }

            }
        ?>

<!--itens3-->  

        <div class="carrinho-container">
            <?php
                $itens3 = array(['nome'=>'Agua mineral','imagem'=>'imagens/latamineral2.jpg','preco'=>'6'],
                ['nome'=>'Agua limao','imagem'=>'imagens/latalimao2.jpg','preco'=>'8']);

                foreach ($itens3 as $key => $value3){

                
            ?>
                <div class="produto">
                    <img src="<?php echo $value3['imagem'] ?>" />
                    <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho<img src="imagens/carrinho2.png" alt=""></a>
                </div> <!--produto-->
            <?php
                }
            ?>
        </div> <!--carrinho-container-->
        <?php
            if(isset($_GET['adicionar'])){
                //vamos adicionar ao carrinho
                $idProduto = (int) $_GET['adicionar'];
                if(isset($itens3[$idProduto])){
                    if(isset($_SESSION['carrinho3'][$idProduto])){
                        $_SESSION['carrinho3'][$idProduto]['quantidade']++;
                    }else{
                        $_SESSION['carrinho3'][$idProduto] = array('quantidade' =>1, 'nome' => $itens3[$idProduto]['nome'],'preco'=>$itens3[$idProduto]['preco']);
                    }
                    echo '<script>alert("O item foi adicionado ao carrinho")</script>';
                }else{
                    die('você não pode adicionar um produto que não existe');
                    }

            }
        ?>  