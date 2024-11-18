@extends("layouts.header")
@section("content")
@csrf
<form action="{{route('add_appl')}}" method="POST">
  <div class="mb-3">
    <label  class="form-label">Адрес</label>
    <input type="text"  name="adress" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <input type="datetime-local"  name="date_time" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <label  class="form-label">Выбрать услугу</label>
<select class="form-select" name="id_usl" aria-label="Default select example">
  @foreach ($task as $tasks)
  <option value='{{$tasks ->id}}'> {{$tasks->name_usluga}}</option>
  @endforeach
</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection()