@extends('layouts.layout')

@section('title')
LocalizaCão - Achado
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
           <br>     
           <form method="POST" action="/user/{{ $user->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name ?? ''}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF</label>

                            <div class="col-md-6">
                            <input id="test" type="text" class="form-control cpf" name="cpf" value="{{$user->cpf ?? ''}}" required autocomplete="cpf">

                            
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email ?? ''}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
            
        </div>
    </div>
</div>

<br>
@endsection
