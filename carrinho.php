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
?>
        <?php
        echo "<a class='botao_adquirir' href='carrinho.php'>Comprar</a>
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
        
        // echo '<script>swal("ITEM ADIQUIRIDO!");</script>';
        ?>
    </main>
    <?php include_once "rodape.php"; ?>
</html>