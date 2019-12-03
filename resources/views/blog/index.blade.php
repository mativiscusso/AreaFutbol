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

      
      
                      
      <footer class="site-footer my-5">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12">
              <h3>Area Futbol - Un blog para los entrenadores</h3>
              <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
            </div>
            
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
@endsection