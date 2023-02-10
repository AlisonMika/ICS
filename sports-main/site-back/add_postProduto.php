<html>

	<?php
		include('connection.php');
	?>   

<body>

	<?php
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$categoria_id = $_POST['categoria_id'];

				
	$query = "INSERT INTO Produto
			(nome,preco, categoria_id)
			VALUES ('".$nome."','".$preco."','".$categoria_id."')";
	mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
					
	?>
	
	<script type="text/javascript">
		alert("Adicionado com sucesso!");
		window.location = "http://sports.com.br/indexProduto.php";
	</script>

</body>

</html>
