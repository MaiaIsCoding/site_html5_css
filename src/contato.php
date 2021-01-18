<html>
    <head>
    </head>
    
    <body>
    <?php
    $nome=$_POST["con_nome"];
    $email=$_POST["con_email"];
    $mensagem=$_POST["con_msg"]; 
	?>
	<?php
	$to="input_username@hotmail.com";
    $subject="$mensagem";
	$message="<strong>Nome:</strong> $nome<br/><br/><strong>Email:</strong> $email<br/><br/><strong>Mensagem:</strong> $mensagem";
	$header = "MIME-Version: 1.0\n";
	$header .= "Content-type: text/html; charset=iso-8859-1\n";
	$header .= "From: $email\n";
	mail($to, $subject, $message, $header);
	echo "Mensagem enviada com Sucesso";
	?>
    </body>
</html>