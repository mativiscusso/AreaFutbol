@extends('layouts.app')

@section('contenido')
<div class="container py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Usted no tiene permiso para ingresar a esa area del sitio.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
