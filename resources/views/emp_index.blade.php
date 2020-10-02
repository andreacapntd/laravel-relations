@extends('layouts.main_layout')

@section('content')

  <section id="employees">

    <h1>Employess</h1>

    <ul id="employees_ul">

      @foreach ($emps as $emp)

        <li>

          <a href="{{ route('emp_show', $emp -> id) }}">

            {{ $emp -> firstname }}
            {{ $emp -> lastname }}

          </a>
        </li>

      @endforeach

    </ul>

  </section>
@endsection
