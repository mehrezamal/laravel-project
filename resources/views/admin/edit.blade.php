<form method="post" action ="{{route('adm.update',$admin->id)}}">
    @csrf
    @method('PUT')
    login:<input type="text" name="login" value="{{$admin->login}}"/><br/>
    password:<input type="text" name="password" value="{{$admin->password}}"/><br/>
    <input type="submit" value="update"/>
</form>