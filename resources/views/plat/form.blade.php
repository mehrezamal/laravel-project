<!DOCTYPE html>
<html>
<head>
	<title>planB</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<form action="{{ route('prod.store') }}" method="post">
    @csrf
    nom:<input type="text" name="nom"/><br/>
    prix:<input type="text" name="prix" /><br/>
    categ:<input type="text" name="categ" /><br/>
    image:<input type="text" name="image" /><br/>
   

    <input type="submit" value="Ajouter"/>
</form>
           




