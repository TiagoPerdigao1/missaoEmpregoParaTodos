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
		<h1 class="page-header">Registar Candidato
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

		
		<form method="POST" enctype="multipart/form-data" action="">

			{{ csrf_field() }}

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
		    			<label for="nomeCandidato">Nome do Candidato</label>
		    			<input type="text" class="form-control" id="nomeCandidato" placeholder="Nome Completo" name="nameCandidato">
		  			</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
		    			<label for="contactoCandidato">Contacto</label>
		    			<input type="text" class="form-control" id="contactoCandidato" placeholder="Contacto" name="phoneCandidato">
		  			</div>
		  		</div>
			</div>
			<div class="form-group">
		    	<label for="emailCandidato">Email</label>
		   		<input type="email" class="form-control" id="emailCandidato" placeholder="Email" name="emailCandidato">
		  	</div>
		  <div class="form-group">
		    <label for="moradaCandidato">Morada</label>
		    <input type="text" class="form-control" id="moradaCandidato" placeholder="Morada" name="adressCandidato">
		  </div>
		  <div class="row">
		  	<div class="col-md-6">
		  		<div class="form-group">
		   		 <label for="codigoPostCandidato">Código Postal</label>
		   		 <input type="text" class="form-control" id="codigoPostCandidato" placeholder="Código Postal" name="zipcode">
		  		</div>
		  	</div>
		  	<div class="col-md-6">
		  		<div class="form-group">
				    <label for="localidadeCandidato">Localidade</label>
				    <input type="text" class="form-control" id="localidadeCandidato" placeholder="Localidade" name="localidadeCandidato">
				 </div>
		  	</div>
		  </div>
		  <div class="form-group">
		    <label for="dataNascCandidato">Data de Nascimento</label>
		    <input type="text" class="form-control" id="dataNascCandidato" placeholder="DD-MM-AAAA" name="birthDate">
		  </div>
		  <div class="row">
		  	<div class="col-md-6">
		  		<div class="form-group">
		    		<label for="dificuldadesCandidato">As suas dificuldades</label>
		    		<input type="text" class="form-control" id="dificuldadesCandidato" placeholder="Dificuldades" name="dificuldades">
		  		</div>
		  	</div>
		  	<div class="col-md-6">
		  		<div class="form-group">
				    <label for="habilitCandidato">As suas habilitações Literárias</label>
				    <input type="text" class="form-control" id="habilitCandidato" placeholder="Habilitações Literárias" name="habilitacoes">
				 </div>
		  	</div>
		  </div>
		  <div class="form-group">
		    <label for="experienciaCandidato">Experiência(s) profissional anterior</label>
		    <input type="text" class="form-control" id="experienciaCandidato" placeholder="Experiência(s)" name="experienciaCandidato">
		  </div>
		  <div class="form-group">
		    <label for="entityCandidato">Entidade(s) que o acompanha</label>
		    <input type="text" class="form-control" id="entityCandidato" placeholder="Entidade(s)" name="entidadeCanditado">
		  </div>
		  <div class="form-group">
		    <label for="conhecimentoCandidato">Como teve conhecimento da plataforma?</label>
		    <input type="text" class="form-control" id="conhecimentoCandidato" placeholder="Facebook, Instagram, Pesquisa google" name="conhecimentoPlataformaCandidato">
		  </div>
		  


		  <button type="submit" class="btn btn-default">Validar Registo</button>
		</form>
				
	</div>

</div>
<!-- /.row -->

</div>




@endsection