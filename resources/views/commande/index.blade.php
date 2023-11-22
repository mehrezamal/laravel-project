<!DOCTYPE html>
<html>
<head>
	<title>planB</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<a href="{{ route('com.create') }}"> Add new commande</a></td>
<table>
	<tr>
		<th>id</th>
		<th>nom</th>
		<th>mail</th>
		<th>tel</th>
		<th>qte</th>
		<th>Edit</th>
		<th>delete</th>
	</tr>
	<?php
	foreach($commandes as $commande){
	?>
		<tr>
			<td><?=$commande->id;?></td>
			<td><?=$commande->nom;?></td> 
			<td><?=$commande->mail;?></td>
			<td><?=$commande->tel;?></td>
            <td><?=$commande->qte;?></td>
          <td><a href="{{ route('com.edit', $commande->id) }}">Edite</a></td>
			<td><form method="post" action="{{ route('com.destroy', $commande->id) }}">
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