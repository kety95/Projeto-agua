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
                    $itens1 = array(['nome'=>'Agua uva','imagem'=>'img/uva.svg','preco'=>'7.0'],
                    ['nome'=>'Agua laranja','imagem'=>'img/laranja.svg','preco'=>'7.0'],
                    ['nome'=>'Agua morango','imagem'=>'img/morango.svg','preco'=>'7.0'],
                    ['nome'=>'Agua com gás','imagem'=>'img/gas.svg','preco'=>'7.0'],
                    ['nome'=>'Agua mineral','imagem'=>'img/mineral.svg','preco'=>'7.0'],
                    ['nome'=>'Agua limao','imagem'=>'img/limao.svg','preco'=>'7.0']);
                    foreach ($itens1 as $key => $value1){
                ?>
                    <div class="produto">
                        <img src="<?php echo $value1['imagem'] ?>" />
                        <!-- <a href="?adicionar=<?php //echo $key ?>">Adicionar ao carrinho <img src="imagens/carrinho2.png" alt=""></a> -->
                        <a href="?adicionar=<?php echo $key ?>" class="adicionar_ao_carrinho"><img src="img/carrinhoCard.svg" alt="Botão para adicionar produto ao carrinho"></a>
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

<!-- Pessoas bebendo água
mulher no fundo azul https://media.istockphoto.com/id/959604522/pt/foto/woman-drinking-water-after-running.webp?b=1&s=170667a&w=0&k=20&c=zotWQwKHYVr0UjRxy2g0TnDiUnafd5ioIOmAJzpFYeI=

mulher na praia https://media.istockphoto.com/id/1491468399/pt/foto/young-woman-drinking-water-from-a-bottle-during-summer-day-on-the-beach.webp?b=1&s=170667a&w=0&k=20&c=ipzg7OExyIP-Lpcc--0b3tn0mCbITa4b3S9-xK4E6iE=

mulher fzd trilha https://media.istockphoto.com/id/1804067467/pt/foto/african-american-woman-jogger-drinking-water-hydrating-in-morning-time.webp?b=1&s=170667a&w=0&k=20&c=nUnKslOC3IgG8tD-IS4lK48bvmXS4erhqt391gInSJA=

duas mulheres https://media.istockphoto.com/id/1372885001/pt/foto/alegria-de-amigas-e-primas.webp?b=1&s=170667a&w=0&k=20&c=mZG3S7fbavUY-sjGKeBELyU9gjsYNWYVc_Bz6CXgSRU=

homem no fundo azul https://plus.unsplash.com/premium_photo-1688938502983-a14020dc14c5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTN8fGRyaW5raW5nJTIwd2F0ZXJ8ZW58MHx8MHx8fDA%3D

homem no fundo escuro https://images.unsplash.com/photo-1612736607082-1dc872e07379?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTEyfHxkcmlua2luZyUyMHdhdGVyfGVufDB8fDB8fHww

mulher numa canoa https://images.unsplash.com/photo-1497583967306-5ca9adce3412?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTkwfHxkcmlua2luZyUyMHdhdGVyfGVufDB8fDB8fHww

homem na piscina https://images.unsplash.com/photo-1476525363922-2cd54d6aaa26?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjE1fHxkcmlua2luZyUyMHdhdGVyfGVufDB8fDB8fHww

homem de boné https://images.unsplash.com/photo-1681740149437-a02014f50ab2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjk5fHxkcmlua2luZyUyMHdhdGVyfGVufDB8fDB8fHww

mulher no salão https://plus.unsplash.com/premium_photo-1661337178413-89dfa71a6e1e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzAwfHxkcmlua2luZyUyMHdhdGVyfGVufDB8fDB8fHww

homem na frente de um portão https://plus.unsplash.com/premium_photo-1664910746129-51b5f061d73f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjk2fHxkcmlua2luZyUyMHdhdGVyfGVufDB8fDB8fHww -->

