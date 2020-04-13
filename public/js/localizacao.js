//Modal Cadastro Achados
$('#link-modal-achados').on('click', function(e){
    e.preventDefault();

    $('#modal-achados').modal('show').find('.modal-content').load($(this).attr('href'));
});

//Modal Cadastro Perdidos
$('#link-modal-perdidos').on('click', function(e){
    e.preventDefault();

    $('#modal-perdidos').modal('show').find('.modal-content').load($(this).attr('href'));
});

//Modal Cadastro Adote
$('#link-modal-adote').on('click', function(e){
    e.preventDefault();

    $('#modal-adote').modal('show').find('.modal-content').load($(this).attr('href'));
});


//Modal Cadastro Usuário
$('#link-modal-user').on('click', function(e){
    e.preventDefault();

    $('#modal-user').modal('show').find('.modal-content').load($(this).attr('href'));
});

//Modal Entrar
$('#btnEntrar').on('click', function(e){
    e.preventDefault();

    $('#login-form').modal('show').find('.modal-content').load($(this).attr('href'));
});