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
    <section class="productlist">
        <div class="produtocontainer">
            <div class="card">
                <div class="title">
                    Processador AMD Ryzen 5 5600G
                </div>
                <div class="image">
                    <img src="./Imagens/r5 5600g.webp">
                </div>
                <div class="text">
                    279,90€
                </div>
                <div>
                    <button class="buy-button" onclick="window.location.href='HYTECH-InformacaoProduto1.php'">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador AMD Ryzen 5 5600X
                </div>
                <div class="image">
                    <img src="./Imagens/r5 5600x.webp">
                </div>
                <div class="text">
                    300,00€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador AMD Ryzen 5 5600
                </div>
                <div class="image">
                    <img src="./Imagens/r5 5600.webp">
                </div>
                <div class="text">
                    218,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador AMD Ryzen 7 5800X
                </div>
                <div class="image">
                    <img src="./Imagens/r7 5800x.webp">
                </div>
                <div class="text">
                    380,00€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador AMD Ryzen 7 5700X
                </div>
                <div class="image">
                    <img src="./Imagens/r7 5700x.webp">
                </div>
                <div class="text">
                    325,00€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador AMD Ryzen 7 5800X3D
                </div>
                <div class="image">
                    <img src="./Imagens/r7 5800x3d.webp">
                </div>
                <div class="text">
                    499,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador AMD Ryzen 9 5900X
                </div>
                <div class="image">
                    <img src="./Imagens/r9 5900x.webp">
                </div>
                <div class="text">
                    599,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador AMD Ryzen 9 5950X
                </div>
                <div class="image">
                    <img src="./Imagens/r9 5950x.webp">
                </div>
                <div class="text">
                    884,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i3 10100F
                </div>
                <div class="image">
                    <img src="./Imagens/i3 10100f.webp">
                </div>
                <div class="text">
                    74,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i3 12100f
                </div>
                <div class="image">
                    <img src="./Imagens/i3 12100f.webp">
                </div>
                <div class="text">
                    109,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i3 12100
                </div>
                <div class="image">
                    <img src="./Imagens/i3 12100.webp">
                </div>
                <div class="text">
                    149,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i5 11400f
                </div>
                <div class="image">
                    <img src="./Imagens/i5 11400f.webp">
                </div>
                <div class="text">
                    169,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i5 11400
                </div>
                <div class="image">
                    <img src="./Imagens/i5 11400f.webp">
                </div>
                <div class="text">
                    189,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i5 11500
                </div>
                <div class="image">
                    <img src="./Imagens/i5 11400f.webp">
                </div>
                <div class="text">
                    198,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i5 12400f
                </div>
                <div class="image">
                    <img src="./Imagens/i5 12400f.webp">
                </div>
                <div class="text">
                    200,00€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i5 12400
                </div>
                <div class="image">
                    <img src="./Imagens/i5 12400f.webp">
                </div>
                <div class="text">
                    224,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i7 12400k
                </div>
                <div class="image">
                    <img src="./Imagens/i7 12700k.webp">
                </div>
                <div class="text">
                    449,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i7 12400kf
                </div>
                <div class="image">
                    <img src="./Imagens/i7 12700k.webp">
                </div>
                <div class="text">
                    412,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i7 12900k
                </div>
                <div class="image">
                    <img src="./Imagens/i9 12900k.webp">
                </div>
                <div class="text">
                   649,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    Processador Intel Core i7 12900kf
                </div>
                <div class="image">
                    <img src="./Imagens/i9 12900kf.webp">
                </div>
                <div class="text">
                   599,90€
                </div>
                <div>
                    <button class="buy-button">
                        Ver detalhes
                    </button>
                </div>
            </div>
            
            
        </div>
        <br>
    </section>

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


    </section>