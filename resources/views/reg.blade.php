@extends("layouts.header")
@section("content")
<form action="{{route('regist')}}" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Почта</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Имя</label>
    <input type="text"  name="name"class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Фамилия</label>
    <input type="text"name="surname" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Телефон</label>
    <input type="phone" name="phone" class="form-control" id="exampleInputPassword1">
  </div>
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