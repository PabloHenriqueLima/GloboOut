<?php ob_start( 'ob_gzhandler' );?>
<!DOCTYPE html>
<html lang=pt-BR>
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <title>Globo informática</title>
    <link rel=icon href=favicon.ico />
    <link href="dist/css/built.min.css" rel=stylesheet>

    <link href="font-awesome/css/font-awesome.min.css" rel=stylesheet type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel=stylesheet type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel=stylesheet type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id=page-top class=index>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class=container>
        <div class="navbar-header page-scroll">
            <button type=button class=navbar-toggle data-toggle=collapse data-target="#major-nav">
                <span class=sr-only>Alternar Navegação</span>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
            </button>
            <a class=navbar-brand href="#page-top">Globo Informática</a>
        </div>
        <div class="collapse navbar-collapse" id=major-nav>
            <ul class="nav navbar-nav navbar-right">
                <li class=hidden>
                    <a href="#page-top"></a>
                </li>
                <li class=page-scroll>
                    <a href="#about">Acompanhar Serviço</a>
                </li>
                <li class=page-scroll>
                    <a href="#contact">contato</a>
                </li>
                <li class=page-scroll>
                    <a href="#footer">Localização</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <img class=img-responsive src="img/globo-logo.png" alt="">
                <div class=intro-text>
                    <img class="img-circle img-responsive" src="img/logo.gif" alt=""/>
                    <span class=name>Globo Informática</span>
                    <hr class=star-light>
<span class=skills>Loja especializada em manutenção de computadores <br/>
monitores, impressoras, notebooks, tvs, dvds, placa de vídeo, fontes, estabilizadores.
</span>
                </div>
            </div>
        </div>
    </div>
</header>
<section class=success id=about>
    <div class=container>
        <div class=row>
            <div class="col-lg-12 text-center">
                <h2>Serviço</h2>
                <hr class=star-light>
            </div>
        </div>
        <div class=row>
            <div class="col-lg-8 col-lg-offset-2">
                <p class="text-center content-consult">
                    Através do nosso site você pode ficar sabendo do status atual do serviço solicitado.
                    Insira o código do serviço no campo abaixo e clique em consultar status.
                </p>
                <form>
                    <div class=form-group>
                        <label for=codigoServico></label>
                        <input class=form-control id=codigoServico placeholder="Código do Serviço">
                    </div>
                </form>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="#" class="btn btn-lg btn-outline btn-custom btn-consult">Consultar Status</a>
            </div>
        </div>
    </div>
</section>
<section id=contact>
    <div class=container>
        <div class=row>
            <div class="col-lg-12 text-center">
                <h2>Envie-nos um e-mail</h2>
                <hr class=star-primary>
            </div>
        </div>
        <div class=row>
            <div class="col-lg-8 col-lg-offset-2">
                <form name=sentMessage id=contactForm novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nome</label>
                            <input class=form-control placeholder=Nome id=name required data-validation-required-message="Por favor insira seu nome.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>E-mail</label>
                            <input type=email class=form-control placeholder=E-mail id=email required data-validation-required-message="Por favor insira seu e-mail.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Telefone</label>
                            <input type=tel class=form-control placeholder="Telefone (opcional)" id=phone>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensagem</label>
                            <textarea rows=5 class=form-control placeholder=Mensagem id=message required data-validation-required-message="Deixe-nos uma mensagem."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id=success></div>
                    <div class=row>
                        <div class="form-group col-xs-12">
                            <button type=submit class="btn btn-success btn-lg btn-custom">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class=text-center id=footer>
    <div class=footer-above>
        <div class=container>
            <div class=row>
                <div class="footer-col col-md-4">
                    <h3>Localização</h3>
                    <p>Quadra 163, Casa 18, Dirceu II <br/>
                        Telefone: (86) 3231-8186
                    </p>
                    <div id=map-canvas></div>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Globo na Web</h3>
                    <ul class=list-inline>
                        <li>
                            <a href="https://www.facebook.com/globoinformaticabrasil" target=_blank class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/108958256866404594311/posts?hl=pt_BR" target=_blank class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/InformatGlobo" target=_blank class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Sobre</h3>
                    <p>Somos uma loja especializada em manutenção de computadores, monitores, impressoras, notebooks, tvs, dvds, placa de vídeo, fontes, etc..</p>
                </div>
            </div>
        </div>
    </div>
    <div class=footer-below>
        <div class=container>
            <div class=row>
                <div class=col-lg-12>
                    Copyright &copy; Globo Informática 2014
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<script src="dist/js/jquery.js"></script>
<script src="dist/js/built.min.js"></script>
<!--<script src="js/gmaps.js"></script>-->
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/jquery.easing.min.js"></script>-->
<!--<script src="js/classie.js"></script>-->
<!--<script src="js/cbpAnimatedHeader.js"></script>-->
<!--<script src="js/jqBootstrapValidation.js"></script>-->
<!--<script src="js/contact_me.js"></script>-->
<!--<script src="js/freelancer.js"></script>-->
</body>
</html>
