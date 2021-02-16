@extends('layouts.master')
@section('content')
<br>
<br>
<div class="container">
  <form class="form-inline" action="{{ route('betters.index') }}" method="GET">
    <select name="horse_id" class="form control btn-sm">
      <option value="" selected disabled>Choose horse to filter:</option>
      @foreach ($horses->sortBy('name') as $horse)
      <option value="{{$horse['id']}}">{{$horse['name']}}</option>
      @endforeach
    </select>
    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
    <a class="btn btn-success btn-sm" href={{ route('betters.index') }}>See all</a>
  </form>
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
        @foreach ($betters->sortByDesc('bet') as $better)
        <tr>
          <td>{{ $better['name'] }} </td>
          <td>{{ $better['surname'] }}</td>
          <td>{{ $better['bet'] }}</td>
          <td>
            {{$better->horse['name']}}
          </td>
          <td>
            <a class="btn btn-info" href="{{route('betters.edit', $better['id'])}}">UPDATE</a>
            <form style="display:inline" action="{{ route('betters.destroy', $better) }}" method="POST">
              @method('DELETE')
              @csrf
              <input class="btn btn-danger" type="submit" value="DELETE">
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn btn-info" href="{{ route('betters.create')}}">CREATE NEW++</a>
</div>
@endsection