<!DOCTYPE html>
<html>
<head>
	<title>planB</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<form method="post" action ="{{route('com.update',$commande->id)}}">
    @csrf
    @method('PUT')
    nom:<input type="text" name="nom" value="{{$commande->nom}}"/><br/>
    mail:<input type="text" name="mail" value="{{$commande->mail}}"/><br/>
    tel:<input type="number" name="tel" value="{{$commande->tel}}"/><br/>
    qte:<input type="number" name="qte" value="{{$commande->qte}}"/><br/>
    <input type="submit" value="update"/>
</form>