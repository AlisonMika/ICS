<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id=$_POST['id'];
		$nome=$_POST['nome'];
		$preco=$_POST['preco'];
		$categoria_id=$_POST['categoria_id'];
		
		include('connection.php');
		
		$query = 'UPDATE produto set nome ="'.$nome.'",
				preco ="'.$preco.'", categoria_id="'.$categoria_id.'"WHERE
				id ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
		?>	

		<script type="text/javascript">
			alert("Atualizado com sucesso!");
			window.location = "http://sports.com.br/indexProduto.php";
		</script>
	</body>
</html>
