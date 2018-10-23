<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<? 
	error_reporting(E_ALL);
	$fileName = 'index.json';
	if(!empty($_POST['Titlu']) && !empty($_POST['Anul'])){
		$fileData = file_get_contents($fileName);
		$carti = json_decode($fileData, true);
		$newElement = [
			"Anul" => trim($_POST['Anul']),
			"Titlu" => trim($_POST['Titlu']),
			"Pagina" => trim($_POST['Pagina']),
			"Id" => 5
			
		];
		$carti[] = $newElement;
		file_put_contents($fileName, json_encode($carti));
	}
	?>	

	<form method="post">
		Anul <input type="number" name="Anul"><br>
		Titlu <input type="text" name="Titlu"><br>
		Pagini <input type="number" name="Pagina"><br>
		<input type="submit" value="Add"><br>
	</form>

</body>
</html>