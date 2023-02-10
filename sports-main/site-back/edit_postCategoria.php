<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		
		include('connection.php');
		
		$query = 'UPDATE categoria set nome ="'.$nome.'" WHERE
				id ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
		?>	

		<script type="text/javascript">
			alert("Atualizado com sucesso!");
			window.location = "http://sports.com.br/indexCategoria.php";
		</script>
	</body>
</html>
