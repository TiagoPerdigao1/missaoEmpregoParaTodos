@extends('layout')

@section('content')

<!-- Page Content -->
<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<style>
		h1 {font-size: 40px;}
		h1 {text-align: center;}
	</style>
	<div class="col-md-12">
		<h1 class="page-header">Registar Empregador
		</h1>
	</div>
	<div class="col-md-8 col-md-offset-2">

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
		
		<form method="POST" enctype="multipart/form-data" action="">

			{{ csrf_field() }}

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
		    			<label for="nomeEmpregador">Nome da Empresa</label>
		    			<input type="text" class="form-control" id="nomeEmpresa" placeholder="Empresa" name="name">
		  			</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
		    			<label for="setorEmpregador">Setor de atividade</label>
		    			<input type="text" class="form-control" id="setorEmpregador" placeholder="Setor de atividade" name="setor">
		  			</div>
		  		</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
		    			<label for="produtosEmpregador">Produtos e Serviços</label>
		   				<input type="text" class="form-control" id="produtosEmpregador" placeholder="Produtos e Serviços" name="products">
		  			</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
		    			<label for="localidadeEmpregador">Localidade</label>
		    			<input type="text" class="form-control" id="localidadeEmpregador" placeholder="Localidade" name="localidade">
		  			</div>
		  		</div>
			</div>
			<div class="row">
		  	<div class="col-md-6">
		  		<div class="form-group">
		   		 <label for="responsavelEmpregador">Nome do Responsável</label>
		   		 <input type="text" class="form-control" id="responsavelEmpregador" placeholder="Nome do Responsável" name="nameResponsavel">
		  		</div>
		  	</div>
		  	<div class="col-md-6">
		  		<div class="form-group">
				    <label for="contactoEmpregador">Contacto</label>
				    <input type="text" class="form-control" id="contactoEmpregador" placeholder="Contacto" name="phone">
				 </div>
		  	</div>
		  </div>
		  <div class="form-group">
		    <label for="emailEmpregador">Email</label>
		    <input type="email" class="form-control" id="emailEmpregador" placeholder="Email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="conhecimentoEmpregador">Como teve conhecimento da plataforma?</label>
		    <input type="text" class="form-control" id="conhecimentoEmpregador" placeholder="Facebook, Instagram, Pesquisa google" name="conhecimentoPlataforma">
		  </div>
		    <div class="form-group">
    			<label for="logoEmpregador">Logotipo da Empresa</label>
    			<input type="file" id="logoInput" name="logo">
  			</div>

		  <button type="submit" class="btn btn-default">Validar Registo</button>
		</form>
				
	</div>

</div>
<!-- /.row -->

</div>




@endsection