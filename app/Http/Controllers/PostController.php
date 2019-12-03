<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comentario;

use App\User;

class PostController extends Controller
{
    public function listar() {
        $posteos = Post::all();
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
        //buscar el actor que queremos modificar
        $id = $req['id'];
        $posteos = Post::findOrFail($id);
        //traigo imagen
        $pathImg = $req->file('imagen')->store('public');
        $nombreFinal = basename($pathImg);
        //definir que campos queremos modificar
        $posteos->titulo = $req['titulo'];
        $posteos->descripcion = $req['descripcion'];
        $posteos->imagen = $nombreFinal;
        //guardar los datos 
        $posteos->save();
        //retornar a la vista
        return redirect('blog.index');
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
    public function eliminar(Request $req) {
        $posteos = Post::findOrFail($req['id']);
        //$actor->episodios()->detach();
        //$actor->peliculas()->detach();
        $posteos->delete();
        return redirect('blog.index');
    }
}