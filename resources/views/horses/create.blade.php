@extends('layouts.app')
@section('content')
  <form method="POST" action="{{route('horses.store')}}">
    @csrf
    <div class="form-group">
      <label for="name">Horse name:</label>
      <input type="text" class="form-control" name="name"><br>
      <label for="run">Runs:</label>
      <input type="number" class="form-control" name="runs"><br>
      <label for="wins">Wins:</label>
      <input type="number" class="form-control" name="wins"><br>
      <label for="about">About horse:</label>
      <textarea class="form-control" id="about" name="about" rows="5"></textarea><br>
      <input class="btn btn-primary" type="submit" value="SUBMIT">
    </div>
    @if ($errors->any())
    <div>
      @foreach ($errors->all() as $error)
      <p style="color:red">{{ $error }}</p>
      @endforeach
    </div>
    @endif
  </form>
@endsection