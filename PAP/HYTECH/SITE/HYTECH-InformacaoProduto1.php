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
    
    <div>
        <div class="row">
            <div class="col-1">
                <h1>PROCESSADOR AMD RYZEN 5 5600G</h1>
                <p>Potencialize a sua próxima grande vitória. Obtenha PCs com os processadores mais avançados do mundo <br>
                    para altas taxas de frames por segundo e uma experiência envolvente. Bom jogo, de fato.</p>
                    <h2>279,90€</h2>
                <button class="comprar">Adicionar ao Carrinho </button>
            </div>
            <div class="col-2">
                <div class="imagemdoproduto">
                    <img src="./Imagens/r5 5600g.webp"> 
                </div>
            </div>
        </div>
    </div>

    <div class="descricao">
        <h1> DESCRIÇÃO DO PRODUTO</h1>
        <h2>DESEMPENHO DE CLASSE ENTUSIASTA SEM A NECESSIDADE DE PLACA GRÁFICA DEDICADA</h2>
        <p>Para jogadores, criadores e utilizadores de PC em geral que desejam desempenho de classe entusiasta; <br>
        sem a necessidade de uma placa gráfica dedicada – não procure mais, aposte nos processadores Ryzen™ Série <br>
        5000 G para desktop – O melhor processador para desktop com gráficos integrados.</p>
        <h2>ULTRA DINÂMICO</h2>
        <p>Obtenha um PC com o desempenho de que você precisa, com vários núcleos alimentados pela tecnologia de <br>
            núcleo de processador de 7 nm mais avançada do mundo. Com estes processadores a oferecer um salto de geração <br>
            em desempenho em relação à geração anterior, os processadores AMD Ryzen™ Série 5000 G Desktop com Radeon™ Graphics<br>
             proporcionam capacidade de resposta ultra-rápida e desempenho multithread para PCs convencionais.</p>
        <h2>A MAIS AVANÇADA TECNOLOGIA</h2>
        <p>Confie num PC que é rápido, eficiente e fiável, com a mais avançada tecnologi1 de núcleo de processador de 7nm do mundo,<br>
             no coração do seu sistema. Os processadores para desktop AMD Ryzen™ Série 5000 G com gráficos Radeon™ apresentam a tecnologia<br>
              de processador "Zen 3" de 7nm, líder do mercado, que permite um processador mais rápido e eficiente, para que tudo possa ser <br>
              feito mais rápido que nunca, com operação refrigerada e silenciosa.</p>
        <h2>OS GRÁFICOS MAIS RÁPIDOS DO MUNDO NUM PROCESSADOR PARA DESKTOP</h2>
        <p>Mergulhe em todos os detalhes ao editar fotos e vídeos, obter jogos em HD incrivelmente suaves e transmitir os seus programas favoritos<br>
             vibrantes em 4K. Os processadores para desktop AMD Ryzen™ Série 5000 G fornecem o desempenho gráfico mais rápido, disponível num processador<br>
              para desktop com os gráficos AMD Radeon™ integrados. Desfrute de um jogo 1080P suave instantaneamente, sem a necessidade de uma placa gráfica <br>
              adicional; e uma maneira fácil para as futuras atualizações, como placas gráficas para jogos HD+ quando você estiver pronto.</p>
        <h2>ESPECÍFICAÇÕES</h2>
            <p> ● Solução térmica: Wraith Stealth Cooler<br>
                ● Chip Gráfico: AMD Radeon™ Graphics<br>
                ● Socket: AM4<br>
                ● Frequência Base: 3.90 GHz<br>
                ● Frequência Turbo: Até 4.4 GHz<br>
                ● Número Núcleos: 6<br>
                ● Número Threads: 12<br>
                ● Cache L2 total: 3 MB<br>
                ● Cache L3 total: 16 MB<br>
                ● Litografia: TSMC 7nm FinFET<br>
                ● TDP: 65 W<br>
                ● REF:100-100000252BOX</p>
    </div>
    <br>
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