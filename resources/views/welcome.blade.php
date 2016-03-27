@extends('layout')

@section('conteudo')

    <header role="banner" id="fh5co-header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar"
                       aria-expanded="false" aria-controls="navbar"><i></i></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
                        <li><a href="#" data-nav-section="work"><span>Como funciona?</span></a></li>
                        <li><a href="#" data-nav-section="testimonials"><span>Participe e concorra</span></a></li>
                        <li><a href="#" data-nav-section="about"><span>Sobre</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);"
             data-stellar-background-ratio="0.5">
        <div class="gradient"></div>
        <div class="container">
            <div class="text-wrap">
                <div class="text-inner">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="to-animate">Conheça o curso completo de Laravel e concorra a prêmios!</h1>
                            <h2 class="to-animate">Quer ganhar o primeiro livro sobre certificaçao PHP totalmente em
                                português? E que tal uma camiseta do curso de laravel?</h2>
                            <h2 class="to-animate">Ou melhor você pode ter os dois!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slant"></div>
    </section>

    <section id="fh5co-intro">
        <div class="container">
            <div class="row row-bottom-padded-lg">

                <div class="fh5co-block to-animate" style="background-image: url(images/img_7.jpg);">
                    <div class="overlay-darker"></div>
                    <div class="overlay"></div>
                    <div class="fh5co-text">
                        <img src="http://webschool.io/assets/images/logo-webschool.png" width="66"/>
                        <h2>Webschool.io</h2>
                        <p>Webschool fornece cursos de ponta e de qualidade totalmente gratuíto. De PHP a nodejs, confira todos os cursos disponíveis!</p>
                        <p><a href="http://webschool.io" target="_blank" class="btn btn-primary">Acesse o site</a></p>
                    </div>
                </div>

                <div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg); min-height: 378px; ">
                    <div class="overlay-darker"></div>
                    <div class="overlay"></div>
                    <div class="fh5co-text">
                        <img src="http://d3mlabs.de/assets/Learning_blue_Icon-c1092b82f9eee7286a24cf70d0e11477.png" width="79"/>
                        <h2>O curso</h2>
                        <p>Da instalação ao teste unitário e seguindo as melhores práticas de programação, tudo isso em um só lugar e totalmente de graça</p>
                        <p><a href="https://github.com/Webschool-io/Curso-PHP-Laravel-Completo-E-Total" target="_blank" class="btn btn-primary">Acesse o site</a></p>
                    </div>
                </div>

                <div class="fh5co-block to-animate" style="background-image: url(images/img_8.jpg);">
                    <div class="overlay-darker"></div>
                    <div class="overlay"></div>
                    <div class="fh5co-text">
                        <img src="http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2015/02/1423519219laravel-l-slant.png"
                             width="116"/>
                        <h2>Laravel</h2>
                        <p>Laravel é um framework desenvolvido em PHP que está ganhando cada vez mais destaques pela sua facilidade e produtividade</p>
                        <p><a href="https://laravel.com" target="_blank" class="btn btn-primary">Acesse o site</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fh5co-work" data-section="work">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Como funciona?</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>Siga apenas alguns passos para concorrer ao sorteio, é simples fácil e rápido !</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-sm">
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="https://github.com/marabesi/curso-laravel-completo-sorteio" target="_blank" class="fh5co-project-item to-animate">
                        <img src="images/work_1.jpg" alt="Image" class="img-responsive">
                        <div class="fh5co-text text-center">
                            <h2>Acesse o projeto no GitHub <br/>e se envolva com o projeto</h2>
                        <span>
                            {{--Branding--}}
                        </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="https://github.com/marabesi/curso-laravel-completo-sorteio/stargazers" target="_blank" class="fh5co-project-item to-animate">
                        <img src="images/work_2.jpg" alt="Image" class="img-responsive">
                        <div class="fh5co-text text-center">
                            <h2>Dê um favorito no projeto! <br/>É simples é só clicar na estrelinha ;)</h2>
                            <span></span>
                        </div>
                    </a>
                </div>

                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="/#fh5co-testimonials" data-nav-section="testimonials" class="fh5co-project-item to-animate">
                        <img src="images/work_3.jpg" alt="Image" class="img-responsive">
                        <div class="fh5co-text text-center">
                            <h2>Convide o seu amigo<br/> através de um e-mail</h2>
                        <span>
                            {{--Web--}}
                        </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center to-animate">
                    {{--<p>* Demo images from <a href="http://plmd.me/" target="_blank">plmd.me</a></p>--}}
                </div>
            </div>
        </div>
    </section>

    <section id="fh5co-testimonials" data-section="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Participe e concorra!</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>
                                Agora é sua vez! Para participar indique um amigo, preenchendo o formulário e pedindo para
                                ele confirmar o e-mail que iremos enviar a ele.
                            </h3>
                            <h3>Pronto! Depois é só torcer para ganhar!</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row success-message">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate"><strong>Obrigado por participar !</strong></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>Agora você só precisa esperar o seu amigo confirmar o recebimento do convite! Nesse momento enviamos um e-mail para ele informando que você quer convida-lo, então apenas relaxe e torça para ser sorteado.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-testimony">
                        <div class="alert alert-danger error-message"></div>

                        <form class="invite-form" method="post" action="/curso/participar">
                            <input type="hidden" name="para[confirmado]" value="0"/>
                            <div class="to-animate fadeInUp animated">
                                <div class="form-group ">
                                    <label for="de_usuario_github" class="sr-only">Seu usuário do GitHub</label>
                                    <input id="de_usuario_github" name="de[usuario_github]" class="form-control" placeholder="Seu usuário do GitHub" type="text" required>
                                </div>
                                <div class="form-group ">
                                    <label for="de_email" class="sr-only">Seu e-mail</label>
                                    <input id="de_email" name="de[email]" class="form-control" placeholder="Seu e-mail" type="email" required>
                                </div>
                                <div class="form-group ">
                                    <label for="para_usuario_github" class="sr-only">Usuário do GitHub de quem você quer convidar</label>
                                    <input id="para_usuario_github" class="form-control"
                                           name="para[usuario_github]"
                                           placeholder="Usuário do GitHub de quem você quer convidar" type="text" required/>
                                </div>
                                <div class="form-group ">
                                    <label for="para_email" class="sr-only">E-mail de quem você quer convidar</label>
                                    <input id="para_email" class="form-control"
                                           name="para[email]"
                                           placeholder="E-mail de quem você quer convidar" required/>
                                </div>
                                <div class="form-group ">
                                    <input class="btn btn-primary btn-lg" value="Convidar !" type="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fh5co-about" data-section="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Realização</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>Em uma parceria com <a href="http://webschool.io" target="_blank">Webschool.io</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="fh5co-person text-center to-animate">
                        <figure><img src="images/person1.jpg" alt="Image"></figure>
                        <h3>Michael Douglas</h3>
                        <ul class="social social-circle">
                            <li><a href="https://twitter.com/mdba_araujo" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/mdba.araujo" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://github.com/michaeldouglas" target="_blank"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fh5co-person text-center to-animate">
                        <figure><img src="images/person2.jpg" alt="Image"></figure>
                        <h3>Matheus Marabesi</h3>
                        <ul class="social social-circle">
                            <li><a href="https://twitter.com/MatheusMarabesi" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/matheusmarabesi" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://github.com/marabesi" target="_blank"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fh5co-person text-center to-animate">
                        <figure><img src="images/person3.jpg" alt="Image"></figure>
                        <h3>Vinícius Reis</h3>
                        <ul class="social social-circle">
                            <li><a href="https://twitter.com/LuizVinicius73" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/LuizVinicius73/" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://github.com/vinicius73" target="_blank"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fh5co-person text-center to-animate">
                        <figure><img src="images/person5.jpg" alt="Image"></figure>
                        <h3>Wendell Adriel</h3>
                        <ul class="social social-circle">
                            <li><a href="https://twitter.com/wendell_adriel" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/wendell.adriel.7" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://github.com/WendellAdriel" target="_blank"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fh5co-person text-center to-animate">
                        <figure><img src="images/person4.jpg" alt="Image"></figure>
                        <h3>Mateus Guimarães</h3>
                        <ul class="social social-circle">
                            <li><a href="https://twitter.com/mateusjatenee" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/mateus.guimaraes.71" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://github.com/mateusjatenee" target="_blank"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
