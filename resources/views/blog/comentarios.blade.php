@extends('layouts.app')

@section('contenido')
<div class="container py-5 my-5">
<h2>COMENTARIOS</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Comentario</th>
      <th scope="col">Post_Id</th>
    </tr>
  </thead>
  <tbody>
  @foreach($comentarios as $comentario)
    <tr>
      <th scope="row">{{$comentario->id}}</th>
      <td>{{$comentario->user}}</td>
      <td>{{$comentario->comentario}}</td>
      <td>{{$comentario->post_id}}</td>
      <td><a href=""><button type="button" class="btn btn-warning">Modificar</button></a></td>
      <td><a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
    </tr>
@endforeach
  </tbody>
</table>
</div>

                          