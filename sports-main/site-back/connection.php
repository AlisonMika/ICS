<?php
	$db = mysqli_connect('192.168.100.20', 'ifrn', 'ifrn', 'sports') or die ('Impossivel conectar. Cheque os parâmetros da conexão.');
	mysqli_select_db($db, 'sports') or die (mysqli_error($db));
	$frontend = 'sports.com.br';
?>
