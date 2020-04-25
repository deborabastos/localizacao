
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
                    <input type="text" class="form-control" name="name">
                </div>
            </div>

            <div class="form-group">
            <label for="cpf" class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="cpf">

                </div>
            </div>

            <div class="form-group ">
                <label class="col-sm-8 control-label mt-2" for="pic_profile">Adicione uma foto</label>
                <input type="file" class="form-control-file col-sm-10     control-label" name="pic_profile">
            </div>
        </fieldset>

        <fieldset>
            <legend>Contato</legend>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>

        <fieldset>
        <legend>Senha</legend>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password">

                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">
    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">Enviar</span>
    </button>

    </form>
</div>



