@extends('layouts.app')

@section('content')
@foreach ($data as $alumn)
    <ul>
        <li>Il nome è {{$alumn->nome}}</li>
        <li>Ho {{$alumn->eta}} anni</li>
        <li>faccio il {{$alumn->descrizione}}</li>
    </ul>

@endforeach

@endsection
