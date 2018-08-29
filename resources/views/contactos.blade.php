@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-sm-12">
                <style>
                    h1 {font-size: 40px;}
                    h1 {text-align: center;}
                    p.texto {text-align: justify;}
                    p.texto {margin-top: 60px}
                    p.texto {margin-bottom: 50px}
                    p.texto {margin-right: 200px}
                    p.texto {margin-left: 200px}
                </style>
            </div>
        </div>

        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-sm-5" style="padding-top: 10%">
                
                <div class="col-sm-12" style="color:blue;">
                    <p></p><p></p>
                    <p>Morada</p>   
                </div>
                <div class="col-sm-12" style="font-size:90%;">
                    <p>Estrada da Papanata, nº52</p>
                    <p>4900-470 Viana do Castelo</p>    
                </div>

                <div class="col-sm-12" style="color:blue;">
                    <p></p><p></p><p></p>
                    <p>Telemóvel</p>    
                </div>

                <div class="col-sm-12" style="font-size:90%;">
                    <p>+351 XXX XXX XXX</p>
                </div>

                <div class="col-sm-12" style="color:blue;">
                    <p></p><p></p><p></p>
                    <p>Telefone</p> 
                </div>

                <div class="col-sm-12" style="font-size:90%;">
                    <p>+351 XXX XXX XXX</p>
                </div>

                <div class="col-sm-12" style="color:blue;">
                    <p></p><p></p><p></p>
                    <p>Email</p>    
                </div>

                <div class="col-sm-12" style="font-size:90%;">
                    <p>geral@despertar.com.pt</p>
                </div>
            </div>

            <div class="col-sm-7"> 
                <h1 class="page-header">Contactos
                    <!--<small>Subheading</small> -->
                </h1>
                
                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        
        <form method="POST" enctype="multipart/form-data" action="">

            {{ csrf_field() }}

            
                    <div class="form-group">
                        <label for="nomeContacto">Nome</label>
                        <input type="text" class="form-control" id="nomeContacto" placeholder="Nome" name="nameContacto">
                    </div>
                
                    <div class="form-group">
                        <label for="emailContacto">Email</label>
                        <input type="email" class="form-control" id="emailContacto" placeholder="Email" name="emailContacto">
                    </div>
                
            <div class="form-group">
                <label for="assuntoContacto">Assunto</label>
                <input type="text" class="form-control" id="assuntoContacto" placeholder="Assunto" name="subjectContacto">
            </div>
          <div class="form-group">
            <label for="mensagemContacto">Mensagem</label>
            <input type="text" class="form-control" id="mensagemContacto" placeholder="Mensagem" name="messageContacto">
          </div>
          
          


          <button type="submit" class="btn btn-default">Enviar</button>
        </form>
            </div>




            </div>
                
                    
        

        </div>
        <!-- /.row -->

    </div>

@endsection