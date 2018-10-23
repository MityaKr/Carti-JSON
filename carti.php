<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<? 
$fileName = 'index.json';
$fileData = file_get_contents($fileName);
$carti = json_decode($fileData, true);
?>
<table border="1">
	<thead>
		<tr>
			<th>Anul</th>
			<th>Titlu</th>
			<th>Id</th>	
			<th>Pagina</th>		
		</tr>
	</thead>
	<tbody>
<?
foreach ($carti as $carte) {?>
<tr>
			<td><?=$carte['Anul'];?></td>
			<td><?=$carte['Titlu'];?></td>
			<td><?=$carte['Id'];?></td>	
			<td><?=$carte['Pagina'];?></td>		
		</tr>	
<?}
?>
</tbody>
</table>
	
		<button><a href="http://carti/write_json1.php">Submit</button>

</body>
</html>