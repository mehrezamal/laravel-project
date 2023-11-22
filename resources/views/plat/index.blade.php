<!DOCTYPE html>
<html>
<head>
	<title>planB</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	
	
</div>

</head>
<body>
<a href="{{ route('prod.create') }}"> Add new plat</a></td>
<table>
	<tr>
		<th>nom</th>
		<th>prix</th>
		<th>categ</th>
		<th>image</th>
		<th>Edit</th>
		<th>delete</th>
		<th>Commander</th>

	</tr>
	<?php
	foreach($plats as $plat){
	?>
		<tr>
			
			<td><?=$plat->nom;?></td> 
			<td><?=$plat->prix;?></td>
			<td><?=$plat->categ;?></td>
            <td><img width="60" src="{{ asset('image/' . $plat->image) }}"></td>
			<td><a href="{{ route('prod.edit', $plat->id) }}">Edite</a></td>
			<td><form method="post" action="{{ route('prod.destroy', $plat->id) }}">
				@csrf
				@method('DELETE')
				<button type="submit" value="delete" >Supprimer</button>
			</form>
			
		</td>
		<td><a href="{{ route('com.create', $plat->id) }}">Commander</a></td>
		</tr>
	

	<?php
	}?>
</table>
</body>


<form id="commande-salees">
  <!-- ... champs du formulaire ... -->
</form>

<a href="#commande-salees" class="btn btn-primary btn-commander-salees">Commander des crêpes salées</a>
