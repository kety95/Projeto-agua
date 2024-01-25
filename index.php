<?php
    session_start();
    include_once 'cabecalho.php';
?>

    <main>  
        <!-- <h2 class="title"> <a href="carrinho.php">Carrinho</a> <img src="imagens/carrinho3.png" alt=""></h2> -->
        <section>
            <p class="segunda_frase">Seja bem-vindo à sua fonte de água premium.</p>
            <div class="carrinho-container">
                <?php
                   $itens1 = array(
                    ['nome' => 'Água Uva', 'imagem' => 'img/uva.svg', 'preco' => 7.0],
                    ['nome' => 'Água Laranja', 'imagem' => 'img/laranja.svg', 'preco' => 7.0],
                    ['nome' => 'Água Morango', 'imagem' => 'img/morango.svg', 'preco' => 7.0],
                    ['nome' => 'Água com Gás', 'imagem' => 'img/gas.svg', 'preco' => 7.0],
                    ['nome' => 'Água Mineral', 'imagem' => 'img/mineral.svg', 'preco' => 7.0],
                    ['nome' => 'Água Limão', 'imagem' => 'img/limao.svg', 'preco' => 7.0]
                );
                
                foreach ($itens1 as $key => $value1) {
                    ?>
                    <div class="produto">
                        <img src="<?php echo $value1['imagem']; ?>" alt="Imagem do produto">
                        <a href="?adicionar=<?php echo $key; ?>" class="adicionar_ao_carrinho">
                            <img src="img/carrinhoCard.svg" alt="Botão para adicionar produto ao carrinho">
                        </a>
                    </div>
                    <?php
                }
                
                ?>
            </div> <!--carrinho-container-->
        </section>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <?php
            if(isset($_GET['adicionar'])){
                //adicionar ao carrinho
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
            //include_once 'itens.php';
        ?>      
    </main>
    <?php include_once "rodape.php"; ?>
</body>
</html>


