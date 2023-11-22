<form method="post" action ="{{route('categ.update',$categorie->id)}}">
    @csrf
    @method('PUT')
    nom:<input type="text" name="nom" value="{{$categorie->nom}}"/><br/>
    <input type="submit" value="update"/>
</form>