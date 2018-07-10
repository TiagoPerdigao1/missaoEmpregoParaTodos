@extends('layout')

@section('content')

	 <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('uploads/IndvDef.png') }}" alt="Snow" width="1900" height="1080">
                <div class="carousel-caption">
                    <h2>Adere á Iniciativa</h2>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('uploads/IndvDef.png') }}" alt="Snow" width="1900" height="1080">
                <div class="carousel-caption">
                    <h2>Consulta quem apoia</h2>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('uploads/IndvDef.png') }}" alt="Snow" width="1900" height="1080">
                <div class="carousel-caption">
                    <h2>Vê os nossos casos de sucesso</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">


    	<!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12" style="text-align: center;">
                <h1 class="page-header">Projeto</h1>
            </div>
            <p>Man request adapted spirits set pressed. Up to denoting subjects sensible feelings it indulged directly. We dwelling elegance do shutters appetite yourself diverted. Our next drew much you with rank. Tore many held age hold rose than our. She literature sentiments any contrasted. Set aware joy sense young now tears china shy.</p>

            <p style="margin-bottom: 5%">Ladies others the six desire age. Bred am soon park past read by lain. As excuse eldest no moment. An delight beloved up garrets am cottage private. The far attachment discovered celebrated decisively surrounded for and. Sir new the particular frequently indulgence excellence how. Wishing an if he sixteen visited tedious subject it. Mind mrs yet did quit high even you went. Sex against the two however not nothing prudent colonel greater. Up husband removed parties staying he subject mr.</p>



            <div align="center">
                <a class="btn btn-primary" href="http://local.missaoempregoparatodos.com/sobre" role="button" style="margin-bottom: 7%; align-self: center;">Conheça a história</a>
            </div>

            <div class="col-sm-12">
                <div class="col-sm-4">
                    <a href="http://local.missaoempregoparatodos.com/empresas_contratantes">
                        <img src="{{ asset('uploads/homeapoiantes.png') }}" alt="Snow">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://local.missaoempregoparatodos.com/entidades_apoio">
                        <img src="{{ asset('uploads/homeapoiantes.png') }}" alt="Snow">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://local.missaoempregoparatodos.com/casos_sucesso">
                        <img src="{{ asset('uploads/homeapoiantes.png') }}" alt="Snow">
                    </a>
                </div>
            </div>
            

            


        </div>
        <!-- /.row -->

     </div>

@endsection