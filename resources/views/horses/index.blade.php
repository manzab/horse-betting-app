@extends('layouts.app')
@section('content')
@if (session('status_success'))
<p style="color: green"><b>{{ session('status_success') }}</b></p>
@else
<p style="color: red"><b>{{ session('status_error') }}</b></p>
@endif
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Runs</th>
      <th scope="col">Wins</th>
      <th scope="col">Betters</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($horses->sortBy('name') as $horse)
    <tr>
      <td>{{ $horse['name'] }} </td>
      <td>{{ $horse['runs'] }}</td>
      <td>{{ $horse['wins'] }}</td>
      <td>
        {{$horse->betters->implode('name', ', ')}}
      </td>
      <td>
        <a class="btn btn-primary" href="{{route('horses.edit', $horse)}}">UPDATE</a>
        <form style="display:inline" action="{{ route('horses.destroy', $horse) }}" method="POST">
          @method('DELETE')
          @csrf
          <input class="btn btn-danger" type="submit" value="DELETE">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a class="btn btn-success" href="{{ route('horses.create')}}">CREATE NEW++</a>
<a class="btn btn-dark" href="{{ URL::to('/horses/pdf') }}">Export to PDF</a>
@endsection
