@extends('layouts.app')
@section('content')
  <form method="POST" action="{{route('betters.update', $better)}}">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="name">Better:</label>
      <input type="text" class="form-control" name="name" value="{{ $better['name'] }}"><br>
      <label for="runs">Runs:</label>
      <input type="text" class="form-control" name="runs" value="{{ $better['surname'] }}"><br>
      <label for="">Bet:</label>
      <input type="number" step=".01" class="form-control" name="bet" value="{{ $better['bet'] }}"><br>
      <label for="horse_id">Choose horse:</label>
      <select name="horse_id"><br>
        <option value="0" selected>Choose a horse:</option>
        @foreach ($horses->sortBy('name') as $horse)
        <option value={{$horse['id']}}>{{$horse['name']}}</option>
        @endforeach
    </select><br>
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