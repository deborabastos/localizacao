@extends('layout.layout')

@section('title')
LocalizaCão - Cães Achados
@endsection

@section('content')

<main>
    <section class="icones">
        <div class="row">
            <div class="imagedog">
                <a class="icone_cao" href="achados_caes">
                    <img src="images/cao1.png" alt="icone de um cachorro">
            </div>
            <div class="imagecat">
                <a class="icone_gato" href="achados_gatos">
                    <img src="images/gato2.png" alt="icone de um gato">
                </a>
            </div>
        </div>
    </section>

    <!-- !!!!!!!!COMEÇO DOS CARDS!!!!! -->

    <section class="container">
        <div class="row">
            <div class="mx-auto">
                <div class="col-md-6 col-12">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="images/perdido3.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Da vinci</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="achados_perfil" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto">
                <div class="col-md-6 col-12">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="images/perdido2.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Doido</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto">
                <div class="col-md-6 col-12">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="images/perdido1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Domingo</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="mx-auto">
                <div class="col-md-6 col-12">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="images/perdido4.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Dahora</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto">
                <div class="col-md-6 col-12">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="images/perdido5.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Gato</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto">
                <div class="col-md-6 col-12">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="images/perdido6.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Miauu</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

@endsection