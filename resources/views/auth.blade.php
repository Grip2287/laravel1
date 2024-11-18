@extends("layouts.header")
@section("content")

<form action="{{route('signin')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Логин</label>
    <input type="text" name="login" class="form-control" id="exampleInputPassword1">
  </div>  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
@endsection