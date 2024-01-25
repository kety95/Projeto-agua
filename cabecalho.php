<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIX</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    
</head>
<body>
    <header>
        <div class="banner">
            <img src="img/gota.svg" alt="gota de água" class="gota">
            <img src="img/gota.svg" alt="gota de água" class="gota outraGota">
            <h1 class="frase">Descubra a pureza em cada gota</h1>
        </div>
        <nav class="barra_nav" id="barraNav">
            <h2 class="nomeMarca">DIX</h2>
            <ul class="links">
                <li><a href="index.php" class="link">Home</a></li>
                <li><a href="curiosidades.php" class="link">Sobre nós</a></li>
                <li>
                    <a href="carrinho.php" class="link link_carrinho"><img src="img/carrinhoIcone.svg" alt="carrinho de compras" class="link_carrinho_img"> Carrinho</a>
                </li>
            </ul>
        </nav>
    </header>

    <script>
    //grudando barra de navegação no topo
    var barraNav = document.getElementById("barraNav");
    var posicaoInicial = barraNav.offsetTop;
    window.onscroll = function() {
        if (window.pageYOffset >= posicaoInicial) {
            barraNav.classList.add("fixed-top");
        } else {
            barraNav.classList.remove("fixed-top");
        }
    };
</script>
    