<!DOCTYPE html>

<html>

<head>
    <title> HYTECH </title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="./Java/javascript.js"></script>

</head>
<body>
    <div class="banneraboutus">
            <div class="navbar">
                <img src="./Imagens/logo.png" class="logo">
                <ul>
                    <li><a href="HYTECH.php">Home</a></li>
                    <li><a href="HYTECH- About Us.php">Sobre Nós</a></li>
                    <li><a href="HYTECH- Produtos.php">Produtos</a></li>
                    <li><a href="HYTECH- Contactos.php">Contactos</a></li>
                    <li><a href="HYTECH- Login.php"><img src="./Imagens/logouser.png" class="logouser"></a></li>
                    <?php 
                                error_reporting(0); 
                                session_start();
                                include './login/validarLogin.php';
                                echo "<a class= 'utilizador' >{$_SESSION['NomeUtilizador']}</a>";
                    ?>
                    <li><a href="#"><img src="./Imagens/carrocompras.png" class="carrocompras"></a></li>
                </ul>
            </div> 
    </div>

    <section id="contacts">
        <section class="bgcontacts">
            <div class="content">
                <h2> OS NOSSOS CONTACTOS:</h2>
                    <div class="container">
                        <center>
                        <div class="coluna">
                             <h3>O NOSSO EMAIL</h3>
                             <img class="logoservicos" src="./Imagens/email.png">
                             <p class="paragrafo">geral@hytech.pt</p>
                        </div>
                        <div class="coluna"> 
                            <h3>ONDE ESTAMOS</h3>
                             <img class="logoservicos" src="./Imagens/localizacao.png">
                             <button type="button" onclick="window.location.href='HYTECH- Localizacao.php'"> LOCALIZAÇÃO </button>
                             
                        </div>
                        <div class="coluna">
                            <h3>O NOSSO TELEFONE</h3>
                             <img class="logoservicos" src="./Imagens/telefone.png">
                             <p class="paragrafo">932106326</p>
                        </div>
                        </center>
                    </div>
            </div>
        </section>
    </section>
</body>
<footer>
    <center>
        <img src="./Imagens/logo.png" class="fotorodape">
    <br>
    <p>HYTECH- Especialistas em Informática </p>
    <br>
        <p> Site desenvolvido por:
            <br>
            Bruno Gomes 12ºJ nº2
        </p>
    
    
    <section class="redessociais">
        <button class="botaoredessociais" onclick="instagram()">
            <img src="./Imagens/insta.png" class="fotosredes">
        </button>
        <button class="botaoredessociais" onclick="facebook()">
            <img src="./Imagens/fb.png" class="fotosredes">
        </button>
        <button class="botaoredessociais" onclick="twitter()">
            <img src="./Imagens/twitter.png"  class="fotosredes">
        </button>
    </section>
    </center>
</footer>



</html>
    