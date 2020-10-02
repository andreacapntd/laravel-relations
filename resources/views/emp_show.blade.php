@extends('layouts.main_layout')

@section('content')

  <section id="employee_show">

    <h1>

      {{ $emp -> firstname }}
      {{ $emp -> lastname }}

    </h1>

    <ul id="employee_location">

      <li>

        Date of birth: {{ $emp -> date_of_birth }}

      </li>

      <li>

        Private code: {{ $emp -> private_code }}

      </li>

      <li>

        Location: {{ $emp -> location -> name}} ( {{ $emp -> location -> city}}, {{ $emp -> location -> state}})

      </li>

    </ul>

    <h2> Tasks </h2>
    <ul id="employee_task">

      @foreach ($emp -> tasks as $tas)

        <li>

         Name: {{ $tas -> name}}
         Start: {{ $tas -> start_date}}
         End: {{ $tas -> end_date}}

        </li>

      @endforeach



    </ul>

    <ul>

      <li>

        <a href="{{ route('emp_edit', $emp -> id)}}">EDIT</a>

      </li>
      <li>

        <a href="{{ route('emp_index')}}">EMPLOYESS HOME</a>

      </li>
    </ul>

  </section>
@endsection
