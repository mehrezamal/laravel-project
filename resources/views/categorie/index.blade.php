<!DOCTYPE html>
<html>
<head>
	<title>planB</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<a href="{{ route('categ.create') }}"> Add new Categorie</a></td>
<table>
	<tr>
		<th>id</th>
		<th>nom</th>
		<th>Edit</th>
		<th>delete</th>
	</tr>
	<?php
	foreach($categories as $categorie){
	?>
		<tr>
			<td><?=$categorie->id;?></td>
			<td><?=$categorie->nom;?></td> 
			<td><a href="{{ route('categ.edit', $categorie->id) }}">Edite</a></td>
			<td><form method="post" action="{{ route('categ.destroy', $categorie->id) }}">
				@csrf
				@method('DELETE')
				<button type="submit" value="delete" >Supprimer</button>
			</form>
		</td>
	
		</tr>
	

	<?php
	}?>
</table>
</body>