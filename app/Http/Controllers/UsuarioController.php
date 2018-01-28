<?php

namespace App\Http\Controllers;

use App\Msg;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $msg=new Msg;
      $msg->name = $request->input('Nome');
      $msg->email = $request->input('Email');
      $msg->mensagem = $request->input('Mensagem');
      $msg->save();
      $nome = $request->input('Nome');
      $email = $request->input('Email');
      $mensagem = $request->input('Mensagem');
      Msg::create(['name' => $nome, 'email' =>$email, 'mensagem' => $mensagem]);
      \Mail::send('/contato', [], function($message) use($nome,$email,$mensagem){
      $message->to('bgavarra@gmail.com', $nome, $email, $mensagem)->subject('Mensagem no site Danielles!');
      });
      return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
    public function goContato(){
      return view('contato');
    }
    public function mail(){

      return view('/');
    }
    public function goArt(){

      return view('/art');
    }

}
