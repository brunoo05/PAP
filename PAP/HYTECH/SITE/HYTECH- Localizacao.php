<!DOCTYPE html>

<html>

<head>
    <title> HYTECH </title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css"
    integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
    integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s="
    crossorigin=""></script>
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
    
        <center>
            <div id="mapid"></div>
            <script src="./Java/javascript.js"></script>
        </center>
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