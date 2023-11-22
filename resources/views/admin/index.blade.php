<!DOCTYPE html>
<html>
<head>
	<title>planB</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<a href="{{ route('adm.create') }}"> Add new admin</a></td>
<table>
	<tr>
		<th>id</th>
		<th>login</th>
        <th>password</th>
		<th>Edit</th>
		<th>delete</th>
	</tr>
	<?php
	foreach($admins as $admin){
	?>
		<tr>
			<td><?=$admin->id;?></td>
			<td><?=$admin->login;?></td> 
            <td><?=$admin->password;?></td>
			<td><a href="{{ route('adm.edit', $admin->id) }}">Edite</a></td>
			<td><form method="post" action="{{ route('adm.destroy', $admin->id) }}">
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