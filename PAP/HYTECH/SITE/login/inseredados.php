<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hytech";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

$diretorio_destino = "./Imagens/";
$target_file = $diretorio_destino . basename($_FILES["fileToUpload"]["name"]);
$imagemproduto = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if ($_POST){ // Se existir um post, entra!

	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$diretorio_destino/$imagemproduto");
	$imagemproduto = mysqli_real_escape_string($conn, $imagemproduto);
}

$nome = $_POST["Nome_Produto"];
$marca = $_POST["Marca"];
$introducaoproduto = $_POST["Introducao_Produto"];
$preco = $_POST["Preco"];
$descricao = $_POST["Descricao"];
$especificacoes = $_POST["Especificacoes"];
$sql = "INSERT INTO produtos (Nome_Produto, Marca, Introducao_Produto, Preco, Imagem_Produto,
Descricao ) VALUES ('$nome', '$marca','$introducaoproduto', '$preco', '$imagemproduto', 
'$descricao')";

if (mysqli_query($conn, $sql)) {
  echo "Produto adicionado com sucesso!";
} else {
  echo "Erro ao adicionar produto: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
