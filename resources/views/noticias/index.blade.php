@extends('app')

@section ('title')
Noticias
@stop

@section('content')
<h1>NOTICIAS</h1> 
<ul>
    @foreach ($notas as $nota)
    <li>{{ $nota }}</li>
    @endforeach
</ul>
@stop

