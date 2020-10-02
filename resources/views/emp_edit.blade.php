@extends('layouts.main_layout')
@section('content')

  <form  action="{{ route('emp_update', $emp -> id) }}" method="post">

    @csrf
    @method('POST')

    <div class="form_group">

      <label for="firstname">FIRSTNAME</label>
      <input type="text" name="firstname" value=" {{ $emp -> firstname }}">

    </div>

    <div class="form_group">

      <label for="lastname">LASTNAME</label>
      <input type="text" name="lastname" value=" {{ $emp -> lastname }}">

    </div>

    <div class="form_group">

      <label for="date_of_birth">DATE OF BIRTH</label>
      <input type="date" name="date_of_birth" value=" {{ $emp -> date_of_birth }} ">

    </div>

    <div class="form_group">

      <label for="private_code">PRIVATE CODE</label>
      <input type="text" name="private_code" value=" {{ $emp -> private_code }}">

    </div>

    <div class="form_group">

      <label for="location_id">LOCATION</label>
      <select name="location_id">

        @foreach ($locs as $loc)

          <option value=" {{ $loc -> id}}"

            @if ($loc -> id === $emp -> location -> id)
              selected
            @endif
            > {{ $loc -> name }} ({{ $loc -> state}})</option>

        @endforeach

      </select>
    </div>

    <button type="submit" name="button">SAVE</button>

  </form>

  <a href="{{ route('emp_index')}}">Employees Home</a>


@endsection
