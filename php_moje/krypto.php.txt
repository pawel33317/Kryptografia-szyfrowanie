<?php
	$szyfr = "";
	if(isset($_POST["tekst"])){
		$str = $_POST["tekst"];
		if($str != ""){
			$szyfr = sha1($str);
		}
	}

?>
<html>
<head>

</head>
<body>

<form name="szyfr" action="index.php" method="post">
	<textarea name="tekst" rows="10" cols="30" align="center">Wpisz Wiadomosc</textarea>
	<input type="submit" value="Szyfruj" />
</form>
	<div>
	<?php echo $szyfr; ?>
	</div>
</body>
</html>