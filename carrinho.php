<html>
<?php include_once 'cabecalho.php'; 
?>
    <main class="carrinho">
    <?php
        session_start();

        $itens1 = array(
            0 => ['nome' => 'Água sabor Uva', 'imagem' => 'img/uva.svg', 'preco' => 7.0],
            1 => ['nome' => 'Água sabor Laranja', 'imagem' => 'img/laranja.svg', 'preco' => 7.0],
            2 => ['nome' => 'Água sabor Morango', 'imagem' => 'img/morango.svg', 'preco' => 7.0],
            3 => ['nome' => 'Água sabor com Gás', 'imagem' => 'img/gas.svg', 'preco' => 7.0],
            4 => ['nome' => 'Água sabor Mineral', 'imagem' => 'img/mineral.svg', 'preco' => 7.0],
            5 => ['nome' => 'Água sabor Limão', 'imagem' => 'img/limao.svg', 'preco' => 7.0]
        );

        if (empty($_SESSION['carrinho1'])) {
            echo '<p class="carrinho_vazio">Você não adicionou nenhum item ainda :(</p>';
            $botaoComprarDesabilitado = true;
        } else {
            $botaoComprarDesabilitado = false;
            foreach ($_SESSION['carrinho1'] as $key => $value) {
                echo '<div class="carrinho-item">';
                // Verifica se o índice existe antes de acessar o array $itens1
                if (array_key_exists($key, $itens1)) {
                    echo '<img class="carrinho-item__imagem_produto" src="' . $itens1[$key]['imagem'] . '" alt="Imagem do produto">';
                    echo '<p class="carrinho-item__descricao">' . $value['nome'] . ', Quantidade: ' . $value['quantidade'] . ', Preço: ' . ($value['quantidade'] * $itens1[$key]['preco']) . '</p>';
                } else {
                    echo '<p>Produto não encontrado</p>';
                }
                echo '</div>';
            }
        }

        if (isset($_GET['comprar'])) {
            // Limpar o carrinho
            unset($_SESSION['carrinho1']);
            $_SESSION['carrinho1'] = array();
            echo '<script>
                    alert("Compra realizada com sucesso!", "Obrigado por adquirir nossos produtos.", "success");
                    //limpa url
                    history.pushState({}, "", "carrinho.php");
                </script>';
        }
        ?>  
                <a class='botao_adquirir' href='carrinho.php?comprar' <?php if ($botaoComprarDesabilitado) echo 'onclick="return false;"'; ?>>Comprar</a>
                <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    </main>
    <?php include_once "rodape.php"; ?>
</html>