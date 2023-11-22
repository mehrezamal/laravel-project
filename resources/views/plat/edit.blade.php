<!DOCTYPE html>
<html>
<head>
	<title>planB</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<form method="post" action ="{{route('prod.update',$plat->id)}}">
    @csrf
    @method('PUT')
    nom:<input type="text" name="nom" value="{{$plat->nom}}"/><br/>
    prix:<input type="text" name="prix" value="{{$plat->prix}}"/><br/>
    categ:<input type="text" name="categ" value="{{$plat->categ}}"/><br/>
    image:<input type="text" name="image" value="{{$plat->image}}"/><br/>
    <input type="submit" value="update"/>
</form>