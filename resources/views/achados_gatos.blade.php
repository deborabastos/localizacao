@extends('layout.layout')

@section('title')
LocalizaCão - Gatos Achados
@endsection


@section('content')

<main>

    <!-- Ícones Cachorro e Gato -->
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
                        <img class="card-img-top" src="images/gato1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Chuchu</h5>
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
                        <img class="card-img-top" src="images/gato02.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Belezinha</h5>
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
                        <img class="card-img-top" src="images/gato3.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Pantera</h5>
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
                        <img class="card-img-top" src="images/gato4.jpeg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Feijão</h5>
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
                        <img class="card-img-top" src="images/gato5.jpeg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Anakin</h5>
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
                        <img class="card-img-top" src="images/gato6.jpeg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Jupiter</h5>
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