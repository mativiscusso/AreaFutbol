<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comentario;

class ComentarioController extends Controller
{
    public function listar() {
        $comentarios = Comentario::all();
        return view('blog.comentarios', compact('comentarios'));
    }
    public function detalle($id) {
        $comentarios = DB::table('comentarios')->where('post_id', '=', "$id")->get();
        dd($comentarios);
        return view('blog.detalle', compact('comentarios'));
        
    }
    public function modificar(Request $req) {
        //buscar el actor que queremos modificar
        $id = $req['id'];
        $comentarios = Comentario::findOrFail($id);
        //definir que campos queremos modificar
        $comentarios->comentario = $req['comentario'];
        //guardar los datos 
        $comentarios->save();
        //retornar a la vista
        return view('blog.admin');
    }
    public function edicion($id){
        $comentarios = Comentario::findOrFail($id);
        return view('blog.modificarcomentario', compact('comentarios'));
    }
    public function agregar(Request $req){
        //validar los datos que envia el form
        $reglas = [
            'comentario' => 'required' ,
        ];
        $mensajes = [
            'required' => 'El campo :attribute es requerido',
        ];

        $this->validate($req, $reglas, $mensajes);     

        //creamos el nuevo objeto Actor
        $comentarios = New Comentario();
        //asignarle los valores al objeto
        $comentarios->comentario = $req['comentario'];
        $comentarios->user = $req['nombre'];
        $comentarios->post_id = $req['post_id'];
        //guardarlo
        $comentarios->save();
        return redirect('posteos');
    }
    public function mostrar(){
        return view('blog.detalle');
    }
    public function eliminar(Request $req, $id) {
        $comentarios = Comentario::findOrFail($id);
        //$actor->episodios()->detach();
        //$actor->peliculas()->detach();
        $comentarios->delete();
        return view('blog.admin');
    }
}
