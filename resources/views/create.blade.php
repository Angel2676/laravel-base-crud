@extends('layouts.app')

@section('content')
<form action="{{route('alumns.store')}}"method="post">
@csrf
@method('POST')
<label for="name">Nome</label>
<input type="text"name="name"placeholder="Nome"id="name" value"{{ old('name') }}">

<label for="eta">Eta</label>
<input type="text"name="eta"placeholder="eta"id="eta" value"{{ old('eta')}}>

<label for="descrizione">Descrizione</label>
<textarea name="descrizione" rows="8" cols="80" > {{ old('descrizione')}}</textarea>



<input type="submit"value="Invia">
</form>


@endsection
