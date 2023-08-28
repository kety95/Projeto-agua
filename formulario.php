
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
    
</head>
<body>
<?php
    include_once "rodape.php";
?>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Login</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="nome" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="senha" name="senha" id="senha" class="inputUser" required>
                        <label for="nome" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <div>
                        <input type="submit" name="submit" id="submit">
                    </div>
            </fieldset>
        </form>
    </div>
</body>
</html>