
@extends('layouts.app')

@section('content')
        <header>
            <div class="overlay">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1 id="homeHeading">Crie sua carteira Nano</h1>
                        <hr>
                        <p>
                            CarteiraNano.com é uma carteira web light para a Nano, que mantem você no controle das suas chaves privadas.
                            Não é preciso baixar toda a ledger para estar no controle do seu dinheiro.
                        </p>
                        <a href="#about" class="btn btn-primary btn-xl page-scroll">Saiba mais</a>
                    </div>
                </div>
            </div>
        </header>
    
        <section class="bg-logo" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Nós temos o que você precisa!</h2>
                        <hr class="light">
                        <p class="text-faded">
                            Não espere que a carteira sincronize para poder fazer transações. Envie e receba pagamentos de qualquer lugar.
                            Importe ou exporte da carteira oficial da Nano.
                            Tudo isso sem que ninguém saiba suas chaves, você é o único dono do seu dinheiro.
                        </p>
                        <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Começe Agora!</a>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading-dark">Ainda aqui?</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-lock text-primary sr-icons"></i>
                            <h3>Suas chaves estão seguras</h3>
                            <p class="text-muted">
                                As carteiras são criptografadas antes de serem enviadas para o servidor. Você está no controle.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                            <h3>Comece agora</h3>
                            <p class="text-muted">Você pode começar a enviar e receber pagamentos em apenas 30 segundos!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-search text-primary sr-icons"></i>
                            <h3>Código Aberto</h3>
                            <p class="text-muted">Nosso código está disponível para todos no GitHub. Qualquer pessoa pode inspecioná-lo, analisá-lo ou melhorá-lo.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-globe text-primary sr-icons"></i>
                            <h3>Use-o em qualquer lugar</h3>
                            <p class="text-muted">Em casa, na rua, no celular ou no computador... faça transações NANO onde quiser!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <aside class="bg-dark">
            <div class="overlay2">
                <div class="container text-center">
                    <div class="call-to-action">
                        <h2>O que está esperando?</h2>
                        <button class="btn btn-default btn-xl sr-button signup">Cadastre-se agora!</button>
                    </div>
                </div>
            </div>
        </aside>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading-dark">Fale Conosco!</h2>
                        <hr class="primary">
                        <p>Precisa de ajuda ou só quer conversar? Não importa! Nosso email está aqui:</p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <p style="overflow:hidden">
                            <a href="mailto:support@nanowallet.io">ajuda@carteiranano.com</a><br/> <br/> 
                            Você também está convidado a fazer uma doação :) <br/>
                            <span style="font-family:monospace;font-weight:bold;">xrb_3nanobr837fp38eeuzo1gdgnz9hjtt8ebn7pgd9i9jgea1qspyq11judupjp </span>
                        </p>
                        <a target="_blank" href="https://twitter.com/nano_brasil"><i class="fa fa-twitter fa-3x" style="padding-right: 40px;"></i></a>
                        <!-- <a target="_blank" href="https://medium.com/@nanowallet_io"><i class="fa fa-medium fa-3x"></i></a> -->
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('wallet')
    @yield('layouts.wallet')
@endsection
