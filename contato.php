<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/estilo1.css">
    <link rel="stylesheet" type="text/css" href="css/contato1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Contato - Pousada Aquamarine</title>
</head>

<body>
    <!--Início Cabeçalho-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <label class="logo1"><a href="index.php"><img src="imagens/logo1.png" height="80" width="300"></a></label>
        <label class="logo2"><a href="index.php"><img src="imagens/logo2.png" height="80"></a></label>

        <ul class="nav">
            <li><a href="index.php" style="text-decoration: none;">Home</a></li>
            <li><a href="acomodacoes.php" style="text-decoration: none;" >Acomodações</a></li>
            <li><a class="active" href="contato.php" style="text-decoration: none;" >Contato</a></li>
            <li> <a href="login.php" style="text-decoration: none;">Login</a> </li>
            <li> <a href="registrar-cliente.php" style="text-decoration: none;">Registro</a> </li>
        </ul>
    </nav>
    <!--Fim Cabeçalho-->

    <section>
        <div class="form-container">
            <div class="titulo">Fale Conosco</div>
            <form action="enviar.php" method="post">
            <div class="control">
            <label for="nome">Nome</label>
            <input type="text" id="name"/>
            </div>
            <div class="control">
            <label for="email">E-mail:</label>
            <input type="email" id="mail" />
            </div>
            <div class="control">
            <label for="mensagem">Mensagem:</label>
            </div>
            <div class="control">
            <textarea id="msg"></textarea>
            </div>
            <div class="control">
            <input type="submit" value="Enviar Mensagem" class="btn">
            </div>
            <br>
            <?php
            if(isset($_GET["msg"])){

              echo$_GET["msg"];
            }
            ?>
        </form>
        </div>
       </div> 
    </div>
    </section>

    <!--Início Rodapé-->
    <footer>
        <div class="container-footer">
            <div class="row-footer">
                <div class="footer-col">
                    <h4>A Pousada</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="acomodacoes.php">Acomodações</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Cliente</h4>
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="registrar-cliente.php">Registrar</a></li>
                        <li><a href="painel.php">Menu - Cliente</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Redes Sociais</h4>
                    <div class="redes">
                        <a href="https://www.facebook.com/"> <i class="bi bi-facebook"></i> </a>
                        <a href="https://www.instagram.com/"> <i class="bi bi-instagram"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Fim Rodapé-->

</body>

</html>