<form action="{{ route('adm.store') }}" method="post">
    @csrf
    login:<input type="text" name="login"/><br/>
    password:<input type="text" name="password"/><br/>
    <input type="submit" value="Ajouter"/>
</form>
           




