@extends('layout')

@section('conteudo')

<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);"
         data-stellar-background-ratio="0.5">
    <div class="gradient"></div>
    <div class="container">
        <div class="text-wrap">
            <div class="text-inner">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="to-animate">{{ $mensagem }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>
@endsection