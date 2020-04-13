
<div class="modal-header">
    <h5 class="modal-title" id="achadoLabel">Cadastro do Pet Achado</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="#" class="form-horizontal">

        <h4>Dados do animal</h4>

        <div class="form-group">
            <label class="col-sm-8 control-label">Espécie</label>
            <div class="col-sm-4">
                <label class="radio-inline mr-2">
                    <input type="radio" name="especie" id="gato" value="GATO">
                    Gato
                </label>
                <label class="radio-inline">
                    <input type="radio" name="especie" id="cachorro" value="CACHORRO">
                    Cachorro
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-4">
                <label class="radio-inline">
                    <input type="radio" name="sexo" id="femea" value="FEMEA">
                    Fêmea
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sexo" id="macho" value="MACHO">
                    Macho
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="uf" class="col-sm-8 control-label">Tipo de Pelo</label>
            <div class="col-sm-4">
                <select class="form-control" name="pelo" id="pelo">
                    <option value="CURTO">Curto</option>
                    <option value="MEDIO">Médio</option>
                    <option value="LONGO">Longo</option>
                    <option value="OUTRO">Outro</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="uf" class="col-sm-8 control-label">Cor Primária</label>
            <div class="col-sm-4">
                <select class="form-control" name="cor_primaria" id="cor_primaria">
                    <option value="PRETO">Preto</option>
                    <option value="MARRON">Marron</option>
                    <option value="BEGE">Bege</option>
                    <option value="BRANCO">Branco</option>
                    <option value="CINZA">Cinza</option>
                    <option value="CARAMELO">Caramelo</option>
                    <option value="TIGRADO">Tigrado</option>
                    <option value="OUTRO">Manchado</option>
                    <option value="OUTRO">Outro</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="uf" class="col-sm-8 control-label">Cor Secundária</label>
            <div class="col-sm-4">
                <select class="form-control" name="cor_secundaria" id="cor_secundaria">
                    <option value="PRETO">Preto</option>
                    <option value="MARRON">Marron</option>
                    <option value="BEGE">Bege</option>
                    <option value="BRANCO">Branco</option>
                    <option value="CINZA">Cinza</option>
                    <option value="CARAMELO">Caramelo</option>
                    <option value="TIGRADO">Tigrado</option>
                    <option value="OUTRO">Outro</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="raca" class="col-sm-8 control-label">Raça (Opcional)</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="raca" placeholder="Sem raça definida">
            </div>
        </div>

        <div class="form-group">
            <label for="idade" class="col-sm-8 control-label">Idade (Opcional)</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="idade" placeholder="Digite a idade">
            </div>
        </div>

        <div class="form-group">
            <label for="nome" class="col-sm-8 control-label">Nome (Opcional)</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
            </div>
        </div>

        <h4>Localidade</h4>

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

        <div class="form-group">
            <label for="estado" class="col-sm-2 control-label">Estado</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="estado" placeholder="Digite o Estado">
            </div>
        </div>

        <div class="form-group">
            <label for="bairro" class="col-sm-2 control-label">Bairro</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="bairro" placeholder="Digite o Bairro">
            </div>
        </div>

        <div class="form-group">
            <label for="observacao" class="col-sm-2 control-label">Observações: </label>
            <textarea class="form-control ml-3 col-sm-10" id="observacao" rows="4" placeholder="Digite informações que possam ajudar na identificação de seu animal!"></textarea>
        </div>

        <div class="form-group">
            <label for="foto_pet" class="col-sm-8 control-label">Enviar foto</label>
            <input type="file" class="form-control-file ml-3" id="foto_pet">
        </div>

    </form>
</div>

<button type="button" class="btn btn-primary">Salvar</button>
