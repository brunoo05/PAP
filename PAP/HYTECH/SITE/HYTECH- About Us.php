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
    
    <section id="aboutus">
        <section class="bgaboutus">
            
                    <div class="content">
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2>QUEM É A HYTECH?</h2>
                        <p class="paragrafo"> A HYTECH, registada na Câmara Municipal de Matosinhos, 
                            é uma empresa de referência desde 2021 no mercado da Informática, com lojas em Matosinhos,<br>
                             Lisboa, Porto e Vila Nova de Gaia. Com um atendimento personalizado e profissional para clientes 
                               particulares e empresariais, um catálogo de produtos altamente diversificado e aos melhores preços, <br>
                               rápida expedição de encomendas online, um apoio ao cliente distinto e as melhores parcerias com os principais
                                fabricantes do mercado, a HYTECH destaca-se como a principal loja do ramo em Portugal.</p>

                        <h2>A SUA HISTÓRIA</h2>
                        <p class="paragrafo"> Formada em 2021 em Matosinhos, a HYTECH depressa se tornou numa das principais escolhas 
                            da comunidade online, em grande parte devido ao seu fórum que juntou alguns dos utilizadores mais notáveis 
                            da área em Portugal. <br>  Com altos indices de satisfação dos seus clientes,
                             o marketing boca a boca surgiu com naturalidade e foi fundamental 
                             para o crescimento da empresa. <br> Crescimento esse que culminou com a abertura da segunda loja, 
                             no Porto. Depois de vários meses com um forte investimento 
                             na melhoria de recursos humanos e materiais, a empresa abre finalmente a sua terceira loja,<br> desta vez na capital- Lisboa.  
                             Pouco tempo depois, devido ao forte crescimento do mercado na capital, a empresa abre o seu quarto espaço físico para atendimento ao 
                             público, em Vila Nova de Gaia.</p>
                    
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