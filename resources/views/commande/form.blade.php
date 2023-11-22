<!DOCTYPE html>
<html>
<head>
	<title>planB</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<form action="{{ route('com.store') }}" method="post">
    @csrf
    nom:<input type="text" name="nom"/><br/>
    mail:<input type="text" name="mail" /><br/>
    tel:<input type="number" name="tel" /><br/>
    qte:<input type="number" name="qte" /><br/>
   

    <input type="submit" value="Confirmer"/>
</form>
           




