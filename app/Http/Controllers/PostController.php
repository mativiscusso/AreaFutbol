<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Post;

use App\Comentario;

use App\User;

class PostController extends Controller
{
    public function listar() {
        $posteos = Post::paginate(4);
        return view('blog.index', compact('posteos'));
    }
    public function listarAdmin() {
        $posteos = Post::all();
        return view('blog.posteos', compact('posteos'));
    }
    public function detalle($id) {
        $posteos = Post::findOrFail($id);
        $comentarios = Comentario::where('post_id', $id)->get();
        $usuarios = User::all();
        return view('blog.detalle', compact('posteos','comentarios', 'usuarios'));
    }
    public function modificar(Request $req) {
        //validar los datos que envia el form
        $reglas = [
            'titulo' => 'required|string' ,
            'descripcion' => 'required|string' ,
            'imagen' => 'file'
        ];
        $mensajes = [
            'required' => 'El campo :attribute es requerido',
            'string' => 'El campo :attribute debe contener una palabra',
            'imagen' => 'El campo :attribute debe contener una imagen'
        ];

        $this->validate($req, $reglas, $mensajes);     
        $id = $req['id'];
        $posteos = Post::findOrFail($id);
        //traigo imagen
        $pathImg = $req->file('imagen')->store('public');
        $nombreFinal = basename($pathImg);
        //asignarle los valores al objeto
        $posteos->titulo = $req['titulo'];
        $posteos->descripcion = $req['descripcion'];
        $posteos->imagen = $nombreFinal;
        //guardarlo
        $posteos->save();
        //retornar a la vista
        return view('blog.admin');
    }
    public function agregar(Request $req){
        //validar los datos que envia el form
        $reglas = [
            'titulo' => 'required|string' ,
            'descripcion' => 'required|string' ,
            'imagen'=> 'file'
        ];
        $mensajes = [
            'required' => 'El campo :attribute es requerido',
            'string' => 'El campo :attribute debe contener una palabra',
        ];

        $this->validate($req, $reglas, $mensajes);     

        //creamos el nuevo objeto Actor
        $posteos = New Post();
        //traigo imagen
        $pathImg = $req->file('imagen')->store('public');
        $nombreFinal = basename($pathImg);
        //asignarle los valores al objeto
        $posteos->titulo = $req['titulo'];
        $posteos->descripcion = $req['descripcion'];
        $posteos->imagen = $nombreFinal;
        //guardarlo
        $posteos->save();
        return redirect('posteos');
    }
    public function mostrar(){
        return view('blog.agregar');
    }
    public function edicion($id){
        $posteos = Post::findOrFail($id);
        return view('blog.modificar', compact('posteos'));
    }
    public function eliminar(Request $req, $id) {
        $posteos = Post::findOrFail($id);
        //$actor->episodios()->detach();
        //$actor->peliculas()->detach();
        Storage::delete($posteos->imagen);
        $posteos->delete();
        return view('blog.admin', compact('posteos'));
    }
}