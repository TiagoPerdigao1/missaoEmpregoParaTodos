@extends('layout')

@section('content')

<!-- Page Content -->
<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<style>
			h1 {font-size: 40px;}
			h1 {text-align: center;}
			p.texto {text-align: justify;}
			p.texto {margin-top: 20px}
			p.texto {margin-bottom: 20px}
			p.texto {margin-right: 200px}
			p.texto {margin-left: 200px}
		</style>
		<div class="col-md-12">
			<div class="col-md-12">
				<h1 class="page-header">Missão</h1>
			</div>
			<div class="col-md-12">
				<p class="texto">Garantir uma ponte de comunicação e articulação entre as pessoas com deficiência, as empresas locais e as entidades especializadas, promovendo o acesso justo ao emprego, a responsabilidade social do tecido empresarial local e a prossecução dos objetivos de integração das entidades de apoio.</p>

				<p class="texto">Tem, ainda, como finalidade tornar a informação sobre os apoios à contratação de pessoas com necessidades especiais mais acessível e simplificada, clarificar os processos e aumentar as taxas de integração profissional efetiva em mercado de trabalho real desta população do distrito de Viana do Castelo.</p>

				<p class="texto">Contribuir para a equidade social, para o combate à exclusão e pobreza das pessoas com deficiência e para uma comunidade mais inclusiva e equilibrada.</p>
			</div>

			<img src="{{ asset('uploads/missao.png') }}" alt="Snow" style ="display: block;
			margin-left: auto; margin-right: auto; width: 715px; height: 450px;">

	</div>

<div class="col-md-12">
		<div class="col-md-12">
			<h1 class="page-header">Visão</h1>
		</div>
		<div class="col-md-12">
			<p class="texto">Constituir-se como uma ferramenta de base que potencia os resultados e sucesso das empresas locais através da adopção de boas práticas de inclusão e selecção de candidatos com perfis ajustados às suas necessidades; o sucesso das entidades especializadas que atuam ao nível da formação e reabilitação de pessoas com deficiência através da concretização de medidas de inserção profissionais dos seus formandos e utentes; e, acima de tudo, o sucesso das pessoas com deficiência e/ou incapacidade através do acesso a oportunidades de emprego válidas e securizantes que permitam a construção de projetos de vida com maior autonomia, dignidade e bem estar global.</p>

			<p class="texto">Ser uma referência e mecanismo de inserção reconhecido pelas empresas, entidades e população alvo. </p>

		</div>



</div>

<div class="col-md-12">
		<div class="col-md-12">
			<h1 class="page-header">Valores</h1>
		</div>
		<div class="col-md-12">
			<p class="texto">Igualdade e justiça social – nas oportunidades de acesso ao emprego;
			Inclusão – profissional e consequentemente social e comunitária;
			Responsabilidade Social – das empresas na adopção de boas práticas de inclusão; 
			Progressão – de competências, de conhecimentos e de carreira para quem procura emprego, de resultados para as empresas e entidades de apoio;
			Parceria e partilha – visão integrada e de colaboração mútua entre as várias entidades e organismos envolvidos.</p>
		</div>

		

</div>

<div class="col-md-12">
		<div class="col-md-12">
			<h1 class="page-header">Estrutura e Funcionalidades</h1>
		</div>
		<div class="col-md-12">
			<p class="texto">Nesta plataforma poderá:</p>

			<p class="texto">Inscrever-se como candidato (se for uma pessoa maior de idade e com alguma limitação ou incapacidade);</p>
			<p class="texto">Inscrever-se como empresa acolhedora ou contratante para poder receber pessoas com def ou inca em contexto de estágio ou para poder contratar um candidato que corresponda ao perfil pretendido (Nota: esta inscrição não implica compromisso em acolher ou contratar candidatos; a empresa terá sempre liberdade de analisar e decidir se existem ou não candidatos com o perfil desejado);</p>
			<p class="texto">Consultar os passos e procedimentos para acesso a sistemas de apoio à contratação (apoios financeiros concedidos pelo IEFP e redução de contribuição à Segurança Social);</p>
			<p class="texto">Identificar e contactar as entidades formadoras e de reabilitação que trabalham com pessoas com deficiência no nosso concelho no sentido de pedir apoio, informação sobre algum candidato, colaboração no processo de selecção, orientações sobre adaptação de postos de trabalho, entre outros assuntos relacionados com procura ou oferta de emprego que recaem no âmbito de atuação e na missão desta plataforma;</p>
			<p class="texto">Consultar partilhas de casos de integração e inspirar-se nos bons exemplos! </p>

		</div>

		

</div>
		<div class="col-md-12" style="text-align: center;margin-top: 20px">
			<a class="btn btn-primary" href="http://local.missaoempregoparatodos.com/adira_iniciativa" role="button">Adira à Iniciativa</a>
		</div>

	</div>
<!-- /.row -->

</div>




@endsection