@extends('layouts.main_layout')
@section('content')

  <form  action=" {{ route('emp_store') }}" method="post">

    @csrf
    @method('POST')

    <div class="form_group">

      <label for="firstname">FIRSTNAME</label>
      <input type="text" name="firstname" value="">

    </div>

    <div class="form_group">

      <label for="lastname">LASTNAME</label>
      <input type="text" name="lastname" value="">

    </div>

    <div class="form_group">

      <label for="date_of_birth">DATE OF BIRTH</label>
      <input type="date" name="date_of_birth" value="">

    </div>

    <div class="form_group">

      <label for="private_code">PRIVATE CODE</label>
      <input type="text" name="private_code" value="">

    </div>

    <div class="form_group">

      <label for="location_id">LOCATION</label>
      <select name="location_id">

        @foreach ($locs as $loc)

          <option value=" {{ $loc -> id}}"> {{ $loc -> name }} ({{ $loc -> state}})</option>

        @endforeach

      </select>
    </div>

    <button type="submit" name="button">CREATE</button>

  </form>

  <a href="{{ route('emp_index')}}">Employees Home</a>


@endsection
