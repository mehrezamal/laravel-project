

<form action="{{ route('categ.store') }}" method="post">
    @csrf
    nom:<input type="text" name="nom"/><br/>

    <input type="submit" value="Ajouter"/>
</form>
           




