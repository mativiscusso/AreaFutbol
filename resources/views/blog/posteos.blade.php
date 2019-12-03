@extends('layouts.app')

@section('contenido')
<div class="container py-5 my-5">
<h2>POSTEOS</h2>

<div class="card col-12">
             @foreach ($posteos as $post)
              <div class="row no-gutters my-3">
                <div class="col-md-4">
                  <img src="/storage/{{$post->imagen}}" class="card-img" alt="...">
                </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->titulo}}</h5>
                        <div class="row">                         
                            {{$post->descripcion}}
                          <a href=""><button type="button" class="btn btn-warning">Modificar</button></a>&nbsp;
                          <a href=""><button type="button" class="btn btn-danger">Eliminar</button></a>
                        </div>
                          <p class="card-text"><small class="text-muted">Ultima actualizacion {{$post->updated_at}}</small></p>
                    </div>
                  </div>
            </div>
            @endforeach
</div>
</div>

@endsection