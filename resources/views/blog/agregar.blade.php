@extends('layouts.app')

@section('contenido')
<div class="container py-5 my-5">
<h1>Agregando Post</h1>
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach

<form action="{{ route('posteos.agregar') }}" method="POST" enctype="multipart/form-data" >
{{csrf_field()}}
<label for="">Titulo</label><br>
<input class="w-75" type="text" name="titulo" id="" value="{{old('titulo')}}"><br>
<label for="">Descripcion</label><br>
<textarea class="w-75" name="descripcion" id="" cols="30" rows="10" value="{{old('descripcion')}}"></textarea><br>
<label for="">Imagen</label>
<input class="w-75" type="file" name="imagen" id="" value="{{old('imagen')}}"><br>
<br>
<input class="w-25" type="submit" name="submit" id="">
</form>
</div>
@endsection
