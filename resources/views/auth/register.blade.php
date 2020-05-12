@extends('layouts.layout')

@section('title')
LocalizaCão - Achado
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
           <br>     
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}<sup class="ast-required">*</sup></label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Digite seu nome" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}<sup class="ast-required">*</sup></label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" placeholder="Digite seu CPF" class="form-control @error('cpf') is-invalid @enderror cpf" name="cpf" value="{{ old('cpf') }}" autocomplete="cpf" autofocus>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}<sup class="ast-required">*</sup></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Digite um e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}<sup class="ast-required">*</sup></label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" placeholder="(00) 00000-0000" class="form-control @error('phone') is-invalid @enderror phone" name="phone" value="{{ old('phone') }}" autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>






                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Foto')}}</label>
                            <div class="col-md-6">
                                <input id="avatar" type="file" placeholder="Insira uma foto" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}<sup class="ast-required">*</sup></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Digite uma senha com no mínimo 6 digitos" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme sua senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Digite sua senha novamente" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
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
