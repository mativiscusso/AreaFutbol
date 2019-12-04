@extends('layouts.app')

@section('contenido')

<div class="container py-5 my-5">
<h1>Editando Comentario</h1>
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
<form action="/comentario/modificar" method="POST">
{{csrf_field()}}
<input type="hidden" name="id" id="" value="{{$comentarios->id}}">
Usuario
<div class="card-header w-25">{{$comentarios->user}}</div><br>
<label for="">Comentario</label><br>
<textarea class="w-75" name="comentario" id="" cols="30" rows="10" value="">{{$comentarios->comentario}}</textarea><br>
<input class="w-25" type="submit" name="submit" id="">
</form>
</div>
@endsection