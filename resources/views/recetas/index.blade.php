@extends('layouts.app')

@section('content')

<h1>Recetas</h1>

@foreach($recetas as $key => $receta)

    <li> {{ $receta }} </li>
    
@endforeach

@endsection