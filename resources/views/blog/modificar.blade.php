@extends('layouts.app')

@section('contenido')

<h1>Editando Post</h1>
<form action="/posteos/modificar" method="POST">
{{csrf_field()}}
<input type="hidden" name="id" id="" value="{{$post->id}}">
<label for="">Titulo</label>
<input type="text" name="titulo" id="" value="{{old('titulo')}}"><br>
<label for="">Descripcion</label>
<textarea name="descripcion" id="" cols="30" rows="10" value="{{old('descripcion')}}"></textarea>
<label for="">Imagen</label>
<input type="file" name="imagen" id="" value="{{old('imagen')}}"><br>
<input type="submit" name="submit" id="">


</form>
<a href="/actores/eliminar/{{$actor->id}}"><button>ELIMINAR POST</button></a>
@endsection