@extends('layout.layout')

@section('title')
LocalizaCão
@endsection


@section('content')

<!-- banner -->
<div class="banner"></div>

    <div class="servicos" id="servicos">
        <h1 class="title">Serviços</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quia, porro repellendus dolore
            repudiandae, accusantium corporis harum vel iste suscipit maiores provident ullam itaque libero minus
            nesciunt consequatur iusto numquam asperiores quod fugiat veniam blanditiis.</p>
        <div class="diff_services">
            <div class="diff_services_item">
                <img src="images/mainpage copy.jpg" alt="service_image">
                <h3 class="sub_title">Achados</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="diff_services_item">
                <img src="images/mainpage2 copy.jpg" alt="service_image">
                <h3 class="sub_title">Perdidos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <!-- mapas-->

    <div class="diff_services_item1 m-2">
        <h1 class="title">Mapas</h1>
        <img class="m-2" src="images/mapa1.jpg" width=45%>
        <h3 class="sub_title">Mapas</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>

    <!-- mapas termina-->



    <!-- isto tambem vai ne-->
    <main>
        <div class="adote" id="adote">
            <h1 class="title">Adote</h1>
            <section class="container">
                <div class="row">
                    <div class="mx-auto">
                        <div class="col-sm-4 col-xs-12">
                            <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/perdido3.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Da vinci</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e
                                        fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto">
                        <div class="col-sm-4 col-xs-12">
                            <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/perdido2.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Doido</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e
                                        fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto">
                        <div class="col-sm-4 col-xs-12">
                            <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/gato4.jpeg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Feijão</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e
                                        fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="mx-auto">
                        <div class="col-sm-4 col-xs-12">
                            <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/gato02.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Belezinha</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e
                                        fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto">
                        <div class="col-sm-4 col-xs-12">
                            <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/perdido5.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Gato</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e
                                        fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto">
                        <div class="col-sm-4 col-xs-12">
                            <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/gato6.jpeg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Jupiter</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e
                                        fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
    </main>

@endsection