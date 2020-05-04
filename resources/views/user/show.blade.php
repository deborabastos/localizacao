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
                

        <div class="card mb-1 " style="max-width: 480px; max-height: 240px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{$pic_profile}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $user -> name}}</h5>
        <p class="card-text">CPF: {{ $user -> cpf}}</p>
        <p class="card-text">E-mail: {{ $user -> email}}</p>
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
