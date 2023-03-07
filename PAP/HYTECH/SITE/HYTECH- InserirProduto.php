<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.formulario.css">
    <title>HYTECH</title>
</head>
<body>
    <section class="inserirproduto"> 
    <form action="inseredados.php"  method="post" enctype="multipart/form-data">
        <label for="nome">Nome do Produto:</label>
        <br>
        <input type="text" name="Nome_Produto"   class="input" value=""/>  
        <br>				 
        <label for="text">Marca  </label>
        <br>
        <input type="text"  name="Marca"  class="input" value=""/>
        <br>
        <label for="text">Introdução do Produto  </label>
        <br>
        <input type="text"  name="Introducao_Produto"  class="input" value=""/>
        <br>
        <label for="text">Preço  </label>
        <br>
        <input type="text"  name="Preco"  class="input" value=""/>
        <br>
        <label for="text">Imagem do Produto  </label>
        <br>
        <input type="file" name="fileToUpload" id="imagem">
        <br>
        <label for="text">Descrição  </label>
        <br>
        <input type="text"  name="Descricao"  class="input" value=""/>
        <br>
        <label for="text">Especificações  </label>
        <br>
        <input type="text"  name="Especificacoes"  class="input" value=""/>
        <br>
        <input type="submit" class="btn btn-success" value="Inserir Produto" class="button" />	  
</form>
</section>	
</body>
</html>