

<!DOCTYPE html>

<html>

<head>
    <title> HYTECH </title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="./Java/javascript.js"></script>
    


</head>
<body>
    <div class="banner">
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
       
        <div class="content"> 
            <h1>LOJA DE INFORMÁTICA Nº1 </h1>
            <p> A HYTECH é conhecida como a melhor
                loja de Informática a nível nacional. <br> Desde
                Hardware até Software, garantimos os melhores
                serviços para os nossos clientes.</p>   

        </div>
    </div>
    

    <section id="serviços">
        <section class="servicosbg">
        <h2 class="servicos">Os nossos serviços</h2>
            
                <div>
                    <center>
                    <img class="imagens" src="./Imagens/pc.png" alt="Montagem de Computadores">
                    </center>
                    <h3 class="titulo"> Montagem de Computadores </h3>
                    <p class="paragrafo"> Precisa de um computador e não sabe <br>
                    montar? A HYTECH é o lugar ideal <br>
                    para si! Com os melhores preços e com os <br>
                    orçamentos, iremos o ajudar no que for preciso!</p>
                </div>
                <div>
                    <center>
                    <img class="imagens" src="./Imagens/repair.png" alt="Reparação de Computadores">
                    </center>
                    <h3 class="titulo"> Reparação de Computadores </h3>
                    <p class="paragrafo"> O seu computador avariou? Não entre em pânico!<br>  
                    Com os melhores orçamentos e melhores técnicos,<br>o seu 
                    computador irá ser arranjado num piscar de olhos!</p>
                </div>
                <div>
                    <center>
                    <img class="imagens" src="./Imagens/software.png" alt="Desenvolvimento de Software">
                    </center>
                     <h3 class="titulo"> Desenvolvimento de Software </h3>
                    <p class="paragrafo"> A HYTECH tem parceria com mais de 50 
                        programadores profissionais. <br>
                        Deseja construir alguma aplicação/site? <br>
                        É com a HYTECH que deverá de contactar.<br>
                    </p>
                </div>
                <div>
                    <center>
                    <img class="imagens" src="./Imagens/processador.png" alt="Venda de componentes/periféricos">
                    </center>
                    <h3 class="titulo"> Venda de componentes/periféricos </h3>
                    <p class="paragrafo"> Precisa de trocar o seu processador?<br>  
                    O seu teclado está a precisar de ser trocado?<br>
                    A HYTECH possui o maior mercado de produtos que precisa!</p>
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