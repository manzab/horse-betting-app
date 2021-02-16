@extends('layouts.master')
@section('content')
<div class="container mt-5">
  <form method="POST" action="{{route('betters.store')}}">
    @csrf
    <div class="form-group">
      <label for="name">Better:</label>
      <input type="text" class="form-control" name="name"><br>
      <label for="surname">Surname:</label>
      <input type="text" class="form-control" name="surname"><br>
      <label for="">Bet:</label>
      <input type="number" step=".01" class="form-control" name="bet"><br>
      <select name="horse_id"><br>
        <option value="0" selected>Choose a horse:</option>
        @foreach ($horses->sortBy('name') as $horse)
        <option value={{$horse->id}}>{{$horse->name}}</option>
        @endforeach
    </select><br><br>
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
</div>
@endsection