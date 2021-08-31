@extends('layouts.app')

@section('content')
  <div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
      <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <a href="/pizzas/{{ $pizza->id }}"><h4> {{ $pizza->name }} </h4></a>
      </div>
    @endforeach
  </div>
@endsection

