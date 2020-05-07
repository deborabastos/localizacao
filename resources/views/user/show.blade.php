@extends('layouts.layout')

@section('title')
LocalizaCão - Perfil
@endsection


@section('content')

<main>

    <a href="javascript:history.back()"> <<-- Voltar </a> 

    <section class="container mt-5 md-4">
        <div class="row m-0 ">

        <div class="col-md-6 col-12">
                

        <div class="card p-4 mb-1 text-white bg-primary" style="max-width: 360px; max-height: 240px;">
  <div class="row no-gutters">
  <h3 class="titulo-cadastro text-align-center">Dados do Usuário</h3>
    <div class="col-md-12">
      <div class="card-body ">
        <h5 class="card-title">Nome: {{ $user -> name}}</h5>
        <h5 class="card-title">CPF: {{ $user -> cpf}}</h5>
        <h5 class="card-title">E-mail: {{ $user -> email}}</h5>
      </div>
    </div>
  </div>
</div>

<br>

            </div>
        </div>
    </section>
</main>

@endsection
