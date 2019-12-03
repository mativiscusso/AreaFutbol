@extends('layouts.app')

@section('contenido')


<div class="container my-3 py-5">
    <h2 class="card-title">{{$posteos->titulo}}</h2>
    <img class="w50" src="/storage/{{$posteos->imagen}}" alt="..."><br> 
    <br>
    <div class="w50">
        <p>{{$posteos->descripcion}}</p>                            
        <p class="card-text"><small class="text-muted">Ultima actualizacion {{$posteos->updated_at}}</small></p>
    </div>    
</div>
<div class="container">
    <div id="comentarios" class="col-12">
            <div class="col-12 card bg-light mb-1 w-75">
            <?php if(isset($comentarios)):?>
            <?php foreach($comentarios as $comentario) :?>
                <div class="card-header">{{$comentario->user}}</div>
                <div class="card-body">
                    <p class="card-text">{{$comentario->comentario}}</p>
                    <p class="card-text"><small class="text-muted">{{$comentario->updated_at}}</small></p>
                </div>
            <?php endforeach ?>
            <?php endif ?>
            </div>

    </div>
    @foreach($usuarios as $usuario)
    @endforeach
    <div id="comentarios" class="container py-3">
    <h5>Comentarios</h5>
    <form class="py-1" action="/posteos/comentar" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="nombre" id="" value="{{$usuario->name}}">
    <input type="hidden" name="post_id" id="" value="{{$posteos->id}}">
        <textarea class="w-75" name="comentario" id="" rows="5"></textarea><br>
        <input type="submit">
    </form>
    </div>
</div>
@endsection

