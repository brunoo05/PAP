<?php	
	include  './login/login.php';
	//include  '../components/footer.php';
?>


<!DOCTYPE html>

<html>

<head>
    <title> HYTECH </title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/style.login.css">
    <script src="Java/javascript.js"></script>
</head>
<body>
    
    <section class="area-login">
        <div class="login">
            <div>
                <img src="./Imagens/logo.png">
            </div>

            <form action="./login/login.php"  method="post">
				 <label for="nome">Utilizador:</label>
				 <input type="text" name="nome"   class="input" value=""/>  
				 <br>				 
				 <label for="password">Password:  </label>
				 <input type="password"  name="password"  class="input" value=""/>
				 <br>
				 <input type="submit" class="btn btn-success" value="Iniciar sessao" class="button" />	
				 			
		</form>	
            <p>Ainda não tem uma conta? <a href="#">Criar conta</a></p>
        </div>

    </section>
   </body>
</html>



