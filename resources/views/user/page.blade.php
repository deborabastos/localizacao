@extends('layouts.layout')

@section('title')
LocalizaCão - Página do Usuário
@endsection

@section('content')

    <main class="main_user">
        <aside>
            <div class="container_chat">
                <div class="messaging">
                    <div class="inbox_msg">
                        <div class="inbox_people">
                            <div class="headind_srch">
                                <div class="recent_heading">
                                    <span class="letras_user_page">Conversas</span>
                                </div>
                                <div class="srch_bar">
                                    <div class="stylish-input-group">
                                        <input type="text" class="search-bar" placeholder="Pesquisar">
                                        <span class="input-group-addon">
                                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                        </span> </div>
                                </div>
                            </div>
                            <div class="inbox_chat">
                                <a data-toggle="modal" data-target="#conversa">
                                    <div class="chat_list active_chat">
                                        <div class="chat_people">
                                            <div class="chat_img"> <img src="images/perdido3.jpg" alt="sunil"> </div>
                                            <div class="chat_ib">
                                                <h5> Feijão | Ana <span class="chat_date">Dec 25</span></h5>
                                                <p>Escuta, acho que encontrei seu gato.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="images/perdido3.jpg" alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5> Feijão | Marcos <span class="chat_date">Dec 23</span></h5>
                                            <p>Acabo de ver um gato muito parecido passando na minha rua!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="images/perdido1.jpg" alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Princesa | João <span class="chat_date">Dec 20</span></h5>
                                            <p>Moça você encontrou a princesa?? Posso te ligar??</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="images/perdido2.jpg" alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Bolota | Maria <span class="chat_date">Dec 15</span></h5>
                                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsa commodi </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="images/perdido2.jpg" alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5> Bolota | Pedro <span class="chat_date">Dec 13</span></h5>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsa commodi </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="images/perdido4.jpg" alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5> Animal | Pessoa <span class="chat_date">Nov 30</span></h5>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsa commodi </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat_list">
                                    <div class="chat_people">
                                        <div class="chat_img"> <img src="images/perdido5.jpg" alt="sunil"> </div>
                                        <div class="chat_ib">
                                            <h5>Animal | Pessoa<span class="chat_date">Nov 25</span></h5>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsa commodi </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </aside>

        <section>
            <div class="container_meio p-4 ml-8">
                <div class="letras_user_page"> Publicar Alertas </div>
                <div class="col text-center">
                    <a href="/pet-create?tipo=achado" class="btn btn-sq-lg btn-success" aria-hidden="true"  data-target="#achado">
                        <i class="fa fa-check-circle fa-4x"></i><br />
                        Encontrei um animal!
                    </a>
                    <a href="/pet-create?tipo=perdido" class="btn btn-sq-lg btn-danger" aria-hidden="true"  data-target="#perdido">
                        <i class="fa fa-exclamation-triangle fa-4x"></i><br />
                        Perdi um animal!
                    </a>
                </div>
                


                <div class="letras_user_page mt-4"> Administração de Cadastros </div>
                
                <ul class="nav-button navbar-nav ml-auto mt-3">

                <li class="nav-item">
                    <a type="button" class="btn btn-primary btn-block font-weight-bold mr-2 mb-3 p-1" href="user">{{ __('Usuários') }}</a>
                </li>

                <li class="nav-item">
                    <a type="button" class="btn btn-primary btn-block font-weight-bold mr-2 mb-3 p-1" href="user.index_user">{{ __('Adoção') }}</a>
                </li>

                <li class="nav-item">
                    <a type="button" class="btn btn-primary btn-block font-weight-bold mr-2 mb-3 p-1" href="user.index_user">{{ __('Pets Achados') }}</a>
                </li>

                <li class="nav-item">
                    <a type="button" class="btn btn-primary btn-block font-weight-bold mr-2 mb-3 p-1" href="user.index_user">{{ __('Pets Perdidos') }}</a>
                </li>

                </ul>


        </section>
        <section>

            <div class="container_actions">
                <div class="col-md-14">
                    

                    
            </div>
        </section>

    </main>

    <!-- PopUp Conversa -->
    <div class="modal fade bd-achado-modal-sm" id="conversa" tabindex=" " role="dialog" aria-labelledby="conversaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row align-center center-block text-align">
                        <div class="col"><img class="image_chat" src="images/perdido3.jpg"></div>
                        <div class="col text-center my-auto">
                            <div class="letras_user_page"> Conversa com Ana sobre o Feijao</div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mesgs">
                        <div class="msg_history">
                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img  class="image_chat" src="https://thispersondoesnotexist.com/image"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        <p>Oi tudo bem? Eu acho que encontrei seu cachorro!</p>
                                        <span class="time_date"> 11:00 AM | Hoje</span>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing_msg">
                                <div class="sent_msg">
                                    <p>Não acredito!! Onde você está?</p>
                                    <span class="time_date"> 11:01 AM | Hoje</span>
                                </div>
                            </div>
                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img class="image_chat" src="https://thispersondoesnotexist.com/image"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        <p>Podemos nos encontrar na frente do mercado?</p>
                                        <span class="time_date"> 11:01 AM | Hoje</span>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing_msg">
                                <div class="sent_msg">
                                    <p>Estou correndo até la, obrigada!</p>
                                    <span class="time_date"> 11:01 AM | Hoje</span>
                                </div>
                            </div>
                            <div class="incoming_msg">
                                <div class="incoming_msg_img">  <img  class="image_chat" src="https://thispersondoesnotexist.com/image"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        <p> Imagina, ninguém merece ficar sem seu animalzinho!!</p>
                                        <span class="time_date"> 11:01 AM | Hoje</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="type_msg">
                            <div class="input_msg_write">
                                <input type="text" class="write_msg" placeholder="Type a message" />
                                <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection