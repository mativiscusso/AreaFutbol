@extends('layouts.app')

@section('contenido')
  
        <div class="container logo-wrap py-5">
          <div class="row py-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="index.html">Area Futbol</a></h1>
              <h3>Un blog de entrenadores</h3>
            </div>
          </div>
        </div>
     
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="mb-4">Ultimos Posteos</h2>
            </div>
            
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
                          <div class="col-12 text-truncate">
                            {{$post->descripcion}}
                          </div>
                        </div>
                          <a href="/posteos/{{$post->id}}" class="btn btn-primary">Ver mas</a>
                          <p class="card-text"><small class="text-muted">Ultima actualizacion {{$post->updated_at}}</small></p>
                    </div>
                  </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
@endsection