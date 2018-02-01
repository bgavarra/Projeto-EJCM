<?php

namespace App\Http\Controllers;

use App\Msg;
use Illuminate\Http\Request;

class MsgsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msgs = Msg::orderBy('created_at', 'desc')->paginate(10);
        return view('.index',['mensagens' => $msgs]);
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
        /*$msg=new Msg;
        $msg->name = $request->input('Nome');
        $msg->email = $request->input('Email');
        $msg->mensagem = $request->input('Mensagem');
        $msg->save();*/
        $nome = $request->input('Nome');
        $email = $request->input('Email');
        $mensagem = $request->input('Mensagem');
        Msg::create(['name' => $nome, 'email' =>$email, 'mensagem' => $mensagem]);
        \Mail::send('/mailContent', ['nome'=>$nome,'email'=>$email,'mensagem'=>$mensagem], function($message) use($nome,$email,$mensagem){
        $message->to('bgavarra@gmail.com', $nome, $email, $mensagem)->subject('Mensagem no site Danielles!');
        });
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $s = \App\Msg::find($id);

      $this->validate($request,[
          'email' => 'required',
          'mensagem' => 'required'
      ]);
      $s->update($request->all());

      return view('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        App\Msg::destroy($id);
    }

    public function goContato(){
      return view('contato');
    }
}
