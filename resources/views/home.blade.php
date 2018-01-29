@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bem vinda Flor!</div>
                <div class="panel-body">
                  <h4>O que você fazer hoje?</h4>
                  <div class="col-md-8">
                    <ul style="list-style:none;">
                      <li style="margin:1vh;"><a style="color:black;" href=""><button>Alterar o texto de introdução</button></a></li>
                      <li style="margin:1vh;"><a style="color:black;" href=""><button>Adicionar artes à galeria</button></a></li>
                      <li style="margin:1vh;"><a style="color:black;" href=""><button>Remover artes da galeria</button></a></li>
                      <li style="margin:1vh;"><a style="color:black;" href=""><button>Ver as mensagens deixadas por seus visitantes</button></a></li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
