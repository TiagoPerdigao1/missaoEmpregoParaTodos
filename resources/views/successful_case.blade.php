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
                <h1 class="page-header">{{ $sucessful_case->designation }}
                </h1>
                <!--<h1 class="page-header">{{ $sucessful_case->description }}
                    <small>Subheading</small>
                </h1>-->
            </div>
            <div class="col-md-12">
                
                        <img class="img-responsive img-hover" src="{{ asset($sucessful_case->path) }}" alt="" style ="display: block;
                        margin-left: auto; margin-right: auto; width: 715px; height: 450px;margin-bottom: 50px">
                    
                <p style="text-align: center; margin-bottom: 30px">{{ $sucessful_case->description }}</p>

            <div class="col-md-12" style="text-align: center;">
                <h1 class="page-header">Outros Apoiantes
                </h1>
                <!--<h1 class="page-header">{{ $sucessful_case->description }}
                    <small>Subheading</small>
                </h1>-->
            </div>
            <div class="col-md-12">
                
            
            </div>

        </div>
        <!-- /.row -->

    </div>

@endsection