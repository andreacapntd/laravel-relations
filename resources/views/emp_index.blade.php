@extends('layouts.main_layout')

@section('content')

  <section id="employees">

    <h1>Employess</h1>

    <ul id="employees_ul">

      @foreach ($emps as $emp)

        <li> {{ $emp -> firstname}} {{$emp -> lastname}}</li>

      @endforeach

    </ul>

  </section>
@endsection
