@extends('layouts.app')

@section('contenido')
<h1>Agregando Post</h1>
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
<form action="{{ route('posteos.agregar') }}" method="POST" enctype="multipart/form-data" >
{{csrf_field()}}
<label for="">Titulo</label>
<input type="text" name="titulo" id="" value="{{old('titulo')}}"><br>
<label for="">Descripcion</label><br>
<textarea name="descripcion" id="" cols="30" rows="10" value="{{old('descripcion')}}"></textarea><br>
<label for="">Imagen</label>
<input type="file" name="imagen" id="" value="{{old('imagen')}}"><br>
<input type="submit" name="submit" id="">
</form>
@endsection
