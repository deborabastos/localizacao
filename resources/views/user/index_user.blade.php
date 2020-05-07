@extends('layouts.layout')

@section('title')
LocalizaCão - Página do Usuário
@endsection

@section('content')


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
 

  @foreach($users as $user)
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->cpf}}</td>
      <td>{{$user->email}}</td>
      <td>
      <li>
        <a href="user/{{$user->id}}">Visualizar</a>
        </li>
        <li>
        <a href="user-edit/{{$user->id}}">Editar</a>
        </li>
        <li>
        <a href="user-delete/{{$user->id}}">Apagar</a>
        </li>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>






@endsection