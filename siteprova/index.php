<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Cadastrar Funcionários </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center><h1>Cadastrar</h1></center>
	<section>
		<form enctype="multipart/form-data" method="post" action="cad.php">
			<p> Nome Pasta: <input type="text" name="nPasta"></p>
            <p> <input name="userfile" type="file" /></p>
			<div>
				<button type="submit"> Gravar Dados </button>
				<button type="submit" name="bDelet"> Deletar </button>
			</div>	
		</form>
			<br>
			<a href="galeria.php"><button>ACESSAR GALERIA</button></a>
	</section>
</body>
</html>