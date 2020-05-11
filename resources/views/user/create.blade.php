@extends('layouts.layout')

@section('title')
LocalizaCão - Página do Usuário
@endsection

@section('content')


<div class="modal-header">

    <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
    <form action="{{ route('user.store') }}" class="form-horizontal" method="POST">
    @csrf
        <fieldset>

            <legend>Dados Pessoais</legend>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" required placeholder="Digite o seu nome" class="form-control" name="name">
                </div>
            </div>

            <div class="form-group">
            <label for="cpf" class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-10">
                    <input type="text" required placeholder="Digite o seu cpf" class="form-control" name="cpf">

                </div>
            </div>

            <div class="form-group ">
                <label class="col-sm-8 control-label mt-2" for="avatar" enctype="multipart/form-data">Adicione uma foto</label>
                <input type="file" class="form-control-file col-sm-10     control-label" name="avatar">
            </div>
        </fieldset>

        <fieldset>
            <legend>Contato</legend>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" required placeholder="Digite o seu e-mail" class="form-control" name="email">
                </div>
            </div>

        <fieldset>
        <legend>Senha</legend>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label @error('password') is-invalid @enderror">Senha</label>
                <div class="col-sm-10">
                    <input type="password" required class="form-control" name="password" placeholder="Digite uma senha">

                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">
    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">Enviar</span>
    </button>

    </form>
</div>

@endsection

