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
      <th scope="col">Surname</th>
      <th scope="col">Bet</th>
      <th scope="col">Horse</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($horses as $horse)
    <tr>
      <td>{{ $better['name'] }} </td>
      <td>{{ $better['surname'] }}</td>
      <td>{{ $better['bet'] }}</td>
      <td>
        {{$better->horse['name']}}
      </td>
      <td>
        <a class="btn btn-info" href="{{route('betters.edit', $better)}}">UPDATE</a>
        <form action="{{ route('betters.destroy', $better) }}" method="POST">
          @method('DELETE')
          @csrf
          <input class="btn btn-danger" type="submit" value="DELETE">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection