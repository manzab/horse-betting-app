@extends('layouts.master')
@section('content')
<br>
<br>
@if (session('status_success'))
<p style="color: green"><b>{{ session('status_success') }}</b></p>
@else
<p style="color: red"><b>{{ session('status_error') }}</b></p>
@endif

<table style="width:90vw;margin:auto" class="table table-hover">
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
        <tr>
            <td>{{ $horse['name'] }} </td>
            <td>{{ $horse['runs'] }}</td>
            <td>{{ $horse['wins'] }}</td>
            <td>
                {{$horse->betters->implode('name', ', ')}}
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('horses.edit', $horse) }}">UPDATE</a>
                <form style="display:inline" action="{{ route('horses.destroy', $horse) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="DELETE">
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection