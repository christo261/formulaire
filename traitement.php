<html>

  <head>
    <meta charset="utf-8"> 
   </head>
<body>
	<?php
		$pseudo = $_POST['pseudo'];
		$mail=$_POST['email'];
		print("Hello $pseudo, vous êtes bien inscrit sur notre site.<br /> Un email de confirmation a été
		envoyé à l'adresse $mail"); 
	?>
</body>
</html>