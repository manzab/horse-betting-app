@extends('layouts.master')
@section('content')
<div class="container mt-5">
  <form method="POST" action="{{route('horses.update', $horse)}}">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="name">Horse name:</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $horse['name'] }}">
      <label for="run">Runs:</label>
      <input type="number" class="form-control" id="run" name="runs" value="{{ $horse['runs'] }}">
      <label for="win">Wins:</label>
      <input type="number" class="form-control" id="win" name="wins" value="{{ $horse['wins'] }}">
      <label for="about">Example textarea</label>
      <textarea class="form-control" id="about" rows="3">{{$horse['about']}}</textarea>
      <br>
      <input class="btn btn-primary" type="submit" value="UPDATE">
    </div>
    @if ($errors->any())
    <div>
      @foreach ($errors->all() as $error)
      <p style="color:red">{{ $error }}</p>
      @endforeach
    </div>
    @endif
  </form>
</div>
@endsection