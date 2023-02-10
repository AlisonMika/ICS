<html>

	<?php
	include('connection.php');
	?>   

<body>

	<?php
	$nome = $_POST['nome'];
		
	$query = "INSERT INTO Categoria
			(nome, nome_cient)
			VALUES ('".$nome."')";
	mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
					
	?>
	
	<script type="text/javascript">
		alert("Adicionado com sucesso.");
		window.location = "http://sports.com.br/indexCategoria.php";
	</script>

</body>

</html>
