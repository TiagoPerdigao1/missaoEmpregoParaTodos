@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">



            <style>
                    div.caixa {border-style: solid;}
                    div.caixa {border-width: thin;}
                    h3.designacao {margin-bottom: 40px;}
                </style>
            <div class="col-md-12" style="text-align: center;">
                <h1 class="page-header">{{ $support_entity->designation }}
                </h1>
                <!--<h1 class="page-header">{{ $support_entity->description }}
                    <small>Subheading</small>
                </h1>-->
            </div>
            <div class="col-md-12">
                
                        <img class="img-responsive img-hover" src="{{ asset($support_entity->path) }}" alt="" style ="display: block;
                        margin-left: auto; margin-right: auto; width: 715px; height: 450px;margin-bottom: 50px">
                    
                <p style="text-align: center; margin-bottom: 30px">{{ $support_entity->description }}</p>
            </div>

            <div class="col-md-12" style="text-align: center;">
                <h1 class="page-header">Outros Apoiantes
                </h1>
               <!-- Projects Row -->
                <div class="row">

                        <style>
                            div.caixa {border-style: solid;}
                            div.caixa {border-width: thin;}
                            h3.designacao {margin-bottom: 40px;}
                        </style>
                        
                    @foreach($support_entities_others as $support_entity)

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
            <div class="col-md-12">
                
            
            </div>

        </div>
        <!-- /.row -->

    </div>

@endsection