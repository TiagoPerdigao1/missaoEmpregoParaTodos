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
                <a href="http://local.missaoempregoparatodos.com/adira_iniciativa">
                <img src="{{ asset('uploads/holdhands.jpg') }}" alt="Snow" width="1900" height="1080"> </a>
                <div class="carousel-caption">
                    <h2>Adere á Iniciativa</h2>
                </div>
            </div>
            <div class="item">
                <a href="http://local.missaoempregoparatodos.com/entidades_apoio">
                <img src="{{ asset('uploads/holdhands2.jpg') }}" alt="Snow" width="1900" height="1080"></a>
                <div class="carousel-caption">
                    <h2>Consulta quem apoia</h2>
                </div>
            </div>
            <div class="item">
                <a href="http://local.missaoempregoparatodos.com/casos_sucesso">
                <img src="{{ asset('uploads/holdhands3.jpg') }}" alt="Snow" width="1900" height="1080"></a>
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
            <p>Este projeto tem como objetivo garantir uma ponte de comunicação e articulação entre as pessoas com deficiência, as empresas locais e as entidades especializadas, promovendo o acesso justo ao emprego, a responsabilidade social do tecido empresarial local e a prossecução dos objetivos de integração das entidades de apoio.</p>

            <p style="margin-bottom: 5%">Tem, ainda, como finalidade tornar a informação sobre os apoios à contratação de pessoas com necessidades especiais mais acessível e simplificada, clarificar os processos e aumentar as taxas de integração profissional efetiva em mercado de trabalho real desta população do distrito de Viana do Castelo. E, por fim, contribuir para a equidade social, para o combate à exclusão e pobreza das pessoas com deficiência e para uma comunidade mais inclusiva e equilibrada.</p>



            <div align="center">
                <a class="btn btn-primary" href="http://local.missaoempregoparatodos.com/sobre" role="button" style="margin-bottom: 7%; align-self: center;">Conheça a história</a>
            </div>

            <div class="col-sm-12">
                <div class="col-sm-4">
                    <a href="http://local.missaoempregoparatodos.com/empresas_contratantes">
                        <img src="{{ asset('uploads/homeempregadores.png') }}" alt="Snow" width="480px" height="480px">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://local.missaoempregoparatodos.com/entidades_apoio">
                        <img src="{{ asset('uploads/homeapoiantes.png') }}" alt="Snow" width="480px" height="480px">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://local.missaoempregoparatodos.com/casos_sucesso">
                        <img src="{{ asset('uploads/homecasosdesucesso.png') }}" alt="Snow" width="480px" height="480px">
                    </a>
                </div>
            </div>
            

            


        </div>
        <!-- /.row -->

     </div>

@endsection