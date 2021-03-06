@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <style>
                    h1 {font-size: 40px;}
                    h1 {text-align: center;}
                    p.texto {text-align: justify;}
                    p.texto {margin-top: 60px}
                    p.texto {margin-bottom: 50px}
                    p.texto {margin-right: 200px}
                    p.texto {margin-left: 200px}
                </style>
                <h1 class="page-header">Apoiantes
                    <!--<small>Subheading</small> -->
                </h1>
                <p class = "texto">She literature discovered increasing how diminution understood. Though and highly the enough county for man. Of it up he still court alone widow seems. Suspected he remainder rapturous my sweetness. All vanity regard sudden nor simple can. World mrs and vexed china since after often.
                    <!--<small>Subheading</small> -->
                </p>
            </div>
        </div>

        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

                <style>
                    div.caixa {border-style: solid;}
                    div.caixa {border-width: thin;}
                    h3.designacao {margin-bottom: 40px;}
                </style>
                
        	@foreach($support_entities as $support_entity)

        	<div class="col-md-4 img-portfolio">

                <div class="caixa">

                    <a href="/entidades_apoio/{{ $support_entity->id }}" title="{{ $support_entity->description }}">
                        <img class="img-responsive img-hover" src="{{ asset($support_entity->path) }}" alt="">
                    </a>
                    <h3 class ="designacao">{{ $support_entity->designation }}</h3>
                    <a href="/entidades_apoio/{{ $support_entity->id }}" title="{{ $support_entity->description }}"> saber mais</a>
                </div>
                    
            </div>

            @endforeach


        </div>
        <!-- /.row -->

    </div>

@endsection