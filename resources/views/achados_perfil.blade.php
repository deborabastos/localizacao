@extends('layout.layout')

@section('title')
LocalizaCão - Achado (nome do animal)
@endsection

@section('content')

<main>
        <section class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img src="images/perdido3.jpg" class="rounded img-thumbnail" alt="foto de um cachorro perdido">
                </div>

                <div class="col-md-6 col-12">
                    <div>
                        <h1 class="text-center text-primary font-weight-bold display-4 ml-3 mb-3">Da Vinci </h1>
                        <p class="text-center ml-3"> Da vinci é um SRD que foi achado próximo ao posto de gasolina da Av Santo Amaro, no dia 12/05/2019. Estava com um coleira laranja, mas sem identificação.
                            Tem os pelos longos, da cor preta e o fucinho da cor branca.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolores voluptatibus aliquam similique id assumenda impedit itaque pariatur possimus, autem doloremque fuga expedita maiores neque vel a quos est error?

                        </p>
                    </div>

                    <div class="text-center mt-5">
                        <button type="button" class="btn btn-primary btn-lg">Entrar em contato</button>
                    </div>
                </div>
            </div>





            <div class="row">
                <div class="col-md-6 col-12 mt-5">
                    <div>
                        <table class="table table-borderless table-sm  ">
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-primary">Nome:</th>
                                    <td>Da Vinci</td>

                                </tr>
                                <tr>
                                    <th scope="row" class="text-primary">Idade:</th>
                                    <td>Aproximadamente 3 anos</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-primary">Sexo:</th>
                                    <td colspan="2">Macho</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-primary">Tipo de pelo:</th>
                                    <td colspan="2">Longo</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-primary">Cor:</th>
                                    <td colspan="2">Preto</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-primary">Raça:</th>
                                    <td colspan="2">SRD</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-5 mb-5">
                    <img src="images/mapa1.jpg" class="rounded float-right img-thumbnail" alt="foto de um cachorro perdido">
                </div>
            </div>


        </section>       
    </main>

@endsection