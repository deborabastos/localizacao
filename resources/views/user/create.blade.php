<div class="modal-header">

    <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
    <form action="#" class="form-horizontal">

        <fieldset>

            <legend>Dados Pessoais</legend>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10   ">
                    <input type="text" class="form-control" id="nome">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-4">
                    <label class="radio-inline mr-2">
                        <input type="radio" name="sexo" id="feminino" value="FEMININO">
                        Feminino
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="sexo" id="masculino" value="MASCULINO">
                        Masculino
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="data-nascimento" class="col-sm-8 control-label">Data de Nascimento</label>
                <div class="col-sm-8">
                    <select class="mr-2" name="dia">
                        <option value="">Dia</option>
                        <?php
                        for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?php echo $i; ?>"> <?php echo $i;
                                                            } ?></option>
                    </select>

                    <select class="mr-2" name="mes">
                        <option>Mês</option>
                        <option value="01">Janeiro </option>
                        <option value="02">Fevereiro</option>
                        <option value="03">Março </option>
                        <option value="04">Abril </option>
                        <option value="05">Maio </option>
                        <option value="06">Junho </option>
                        <option value="07">Julho </option>
                        <option value="08">Agosto </option>
                        <option value="09">Setembro </option>
                        <option value="10">Outubro </option>
                        <option value="11">Novembro </option>
                        <option value="12">Dezembro </option>

                    </select>
                    <select name="ano">
                        <option value="">Ano</option>
                        <?php
                        for ($i = 1900; $i <= 2030; $i++) { ?>
                            <option value="<?php echo $i; ?>"> <?php echo $i;
                                                            } ?></option>
                    </select>
                </div>
            </div>

            <div class="form-group ">
                <label class="col-sm-8 control-label mt-2" for="exampleFormControlFile1">Adicione uma foto</label>
                <input type="file" class="form-control-file col-sm-10     control-label" id="exampleFormControlFile1">
            </div>
        </fieldset>

        <fieldset>
            <legend>Contato</legend>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email">
                </div>
            </div>

            <div class="form-group">
                <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                <div class="col-sm-4">
                    <input type="tel" class="form-control" id="telefone">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Endereço</legend>
            <div class="form-group">
                <label for="logradouro" class="col-sm-2 control-label">Logradouro</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="logradouro">
                </div>
            </div>

            <div class="form-group">
                <label for="cep" class="col-sm-2 control-label">CEP</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="cep">
                </div>
            </div>

            <div class="form-group">
                <label for="estado" class="col-sm-2 control-label">Estado</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="estado">
                </div>
            </div>

            <div class="form-group">
                <label for="uf" class="col-sm-2 control-label">UF</label>
                <div class="col-sm-4">
                    <select class="form-control" name="uf" id="uf">
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AM">AM</option>
                        <option value="AP">AP</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MG">MG</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="PA">PA</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="PR">PR</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="RS">RS</option>
                        <option value="SC">SC</option>
                        <option value="SE">SE</option>
                        <option value="SP">SP</option>
                        <option value="TO">TO</option>
                    </select>
                </div>
            </div>
        </fieldset>

    </form>
</div>

<button type="submit" class="btn btn-primary">
    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">Enviar</span>
</button>
