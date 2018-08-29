@extends('layout')

@section('content')

<!-- Page Content -->
<div class="container">

	<!--<a href="#procedures">Procedimentos</a>-->

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		
		<style>
			h1 {font-size: 40px;}
			h1.panel-title {font-size: 40px;}
			h1 {text-align: center;}
			h1{padding-top: 5%;}
		</style>

		<div class="col-sm-3">
			<nav id="mainNavbar">
				<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="65">
					<li class="active"><a href="#procedimentos1">Quais os apoios?</a></li>
					<li><a href="#procedimentos2">Como empregar?</a></li>
					<li><a href="#procedimentos3">O que ganha?</a></li>
				</ul>
				
			</nav>
		</div>
		<body data-spy="scroll" data-target="#mainNavbar" style="position: relative;">
			<div class="container">	
				<div class="col-sm-9">
					<div id="procedimentos1" class="col-sm-12" >
						<h1>Procedimentos</h1>
						<p>As pessoas com deficiência podem ter um excelente desempenho profissional, desde que as funções que lhes são atribuídas sejam ajustadas ao seu perfil e às suas capacidades.
						Está nas suas mãos abrir as portas da sua empresa ou organização para que as pessoas com deficiência possam mostrar o seu valor e as suas capacidades. Tem ao seu dispor alguns apoios e incentivos, geridos pelo Instituo de Emprego e Formação (IEFP):</p>

						<div class="panel-group" id="myaccordian1">
							<div class="panel panel-primary" style="margin-bottom: 8px">
								<div class="panel-heading">
									<h3 class="panel-title" data-target="#panel-1" data-toggle="collapse" style="padding-top: 5px">Estágios de Inserção</h3>
								</div>
								<div class="panel-collapse collapse" id="panel-1">
									<div class="panel-body">
										<p> •	12 meses não prorrogáveis;</p>
										<p>	•	Remuneração consoante o  nível de habilitações do trabalhador;</p>
										<p>	•	Entidades beneficiárias: entidades de natureza jurídica privada, com ou sem fins lucrativos;</p>
										<p>	•	Comparticipação da bolsa de estágio varia entre os 80% e os 95%, consoante o tipo de empresa e a sua dimensão.</p>
									</div>										
								</div>
							</div>
							<div class="panel-group" id="myaccordian2">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-2" data-toggle="collapse" style="padding-top: 5px">Contratos Emprego-Inserção</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-2">
										<div class="panel-body">
											<p> •	Duração máxima de 12 meses;</p>
											<p>	•	Na medida CEI a pessoa pode ser beneficiária do subsídio de desemprego ou do subsídio social de desemprego;</p>
											<p>	•	A entidade promotora não tem qualquer custo ao empregar uma pessoa com deficiência;</p>
											<p>	•	Entidades beneficiárias: entidades coletivas, públicas ou privadas sem fins lucrativos, designadamente: entidades de solidariedade social, autarquias locais ou serviços públicos que desenvolvam atividades relevantes para a satisfação de necessidades sociais ou coletivas.</p>
										</div>										
								</div>
							</div>
							<div class="panel-group" id="myaccordian3">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-3" data-toggle="collapse" style="padding-top: 5px">Emprego Protegido</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-3">
										<div class="panel-body">
												<p> •	Estágio realizado num Centro de Emprego Protegido (CEP) com uma duração não superior a 9 meses;</p>
												<p>•	Os CEP podem ser criados por iniciativa de pessoas coletivas de direito público que não façam parte da administração direta do Estado e por pessoas coletivas de direito privado sem fins lucrativos.</p>
												<p>•	O trabalhador em regime de emprego apoiado tem direito, durante o período de estágio, a uma retribuição igual a 70 % da retribuição mínima mensal garantida;</p>
												<p>•	Os apoios à construção, equipamento e instalação do CEP podem ser concedidos até ao limite de 100% das despesas de investimento elegíveis, nas modalidades cumuláveis de subsídio não reembolsável (não pode ultrapassar o valor máximo de 70% do apoio) e empréstimo sem juros, este último a reembolsar no prazo de 15 anos e com carência de 5 anos (estes apoios não podem ultrapassar o valor de 30 vezes o IAS por posto de trabalho em regime de emprego protegido);</p>
												<p>•	Comparticipação na retribuição dos trabalhadores em regime de emprego apoiado, correspondente à diferença a que o trabalhador tem direito e o Indexante dos Apoios Sociais (IAS- 70% do IAS);</p>
												<p>•	Comparticipação nas contribuições para a segurança social a seu cargo, na mesma proporção;</p>
												<p>•	O apoio pode ser concedido à entidade até que o trabalhador transite para o regime normal de trabalho ou atinja capacidade superior a 75 % da capacidade normal exigida a outro trabalhador nas mesmas funções profissionais. Se não for possível a sua transição para o regime normal de trabalho, os apoios podem ser renovados anualmente.</p>					
										</div>										
									</div>
								</div>
							<div class="panel-group" id="myaccordian4">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-4" data-toggle="collapse" style="padding-top: 5px">Emprego Apoiado em Mercado Aberto</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-4">
										<div class="panel-body">
												<p> •	Estágio realizado num Centro de Emprego Protegido (CEP) com uma duração não superior a 9 meses;</p>
												<p>•	Os CEP podem ser criados por iniciativa de pessoas coletivas de direito público que não façam parte da administração direta do Estado e por pessoas coletivas de direito privado sem fins lucrativos.</p>
												<p>•	O trabalhador em regime de emprego apoiado tem direito, durante o período de estágio, a uma retribuição igual a 70 % da retribuição mínima mensal garantida;</p>
												<p>•	Os apoios à construção, equipamento e instalação do CEP podem ser concedidos até ao limite de 100% das despesas de investimento elegíveis, nas modalidades cumuláveis de subsídio não reembolsável (não pode ultrapassar o valor máximo de 70% do apoio) e empréstimo sem juros, este último a reembolsar no prazo de 15 anos e com carência de 5 anos (estes apoios não podem ultrapassar o valor de 30 vezes o IAS por posto de trabalho em regime de emprego protegido);</p>
												<p>•	Comparticipação na retribuição dos trabalhadores em regime de emprego apoiado, correspondente à diferença a que o trabalhador tem direito e o Indexante dos Apoios Sociais (IAS- 70% do IAS);</p>
												<p>•	Comparticipação nas contribuições para a segurança social a seu cargo, na mesma proporção;</p>
												<p>•	O apoio pode ser concedido à entidade até que o trabalhador transite para o regime normal de trabalho ou atinja capacidade superior a 75 % da capacidade normal exigida a outro trabalhador nas mesmas funções profissionais. Se não for possível a sua transição para o regime normal de trabalho, os apoios podem ser renovados anualmente.</p>					
										</div>										
									</div>
								</div>

								<div class="panel-group" id="myaccordian5">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-5" data-toggle="collapse" style="padding-top: 5px">Redução da Taxa Contributiva</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-5">
										<div class="panel-body">
												<p> •	As entidades empregadoras que celebrem um contrato de trabalho sem termo com uma pessoa com deficiência (desde que a mesma tenha capacidade para o trabalho inferior a 80% da capacidade normal exigida a um trabalhador não deficiente, no desempenho das mesmas funções) têm direito a uma redução da taxa contributiva.</p>
												<p>•	A entidade empregadora passa a pagar 11,9% sobre as remunerações do trabalhador enquanto durar o contrato de trabalho. O trabalhador paga 11% (entregues pela entidade empregadora) – taxa total: 22,9%.</p>
										</div>										
									</div>
								</div>
							</div>
							</div>
					</div>
					<div id="procedimentos2" class="col-sm-12" >
						<h1>Como empregar alguém?</h1>
						<p>As pessoas com deficiência podem ter um excelente desempenho profissional, desde que as funções que lhes são atribuídas sejam ajustadas ao seu perfil e às suas capacidades.
						Está nas suas mãos abrir as portas da sua empresa ou organização para que as pessoas com deficiência possam mostrar o seu valor e as suas capacidades. Tem ao seu dispor alguns apoios e incentivos, geridos pelo Instituo de Emprego e Formação (IEFP):</p>

						<div class="panel-group" id="myaccordian1">
							<div class="panel panel-primary" style="margin-bottom: 8px">
								<div class="panel-heading">
									<h3 class="panel-title" data-target="#panel-1" data-toggle="collapse" style="padding-top: 5px">Estágios de Inserção</h3>
								</div>
								<div class="panel-collapse collapse" id="panel-1">
									<div class="panel-body">
										<p> •	12 meses não prorrogáveis;</p>
										<p>	•	Remuneração consoante o  nível de habilitações do trabalhador;</p>
										<p>	•	Entidades beneficiárias: entidades de natureza jurídica privada, com ou sem fins lucrativos;</p>
										<p>	•	Comparticipação da bolsa de estágio varia entre os 80% e os 95%, consoante o tipo de empresa e a sua dimensão.</p>
									</div>										
								</div>
							</div>
							<div class="panel-group" id="myaccordian2">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-2" data-toggle="collapse" style="padding-top: 5px">Contratos Emprego-Inserção</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-2">
										<div class="panel-body">
											<p> •	Duração máxima de 12 meses;</p>
											<p>	•	Na medida CEI a pessoa pode ser beneficiária do subsídio de desemprego ou do subsídio social de desemprego;</p>
											<p>	•	A entidade promotora não tem qualquer custo ao empregar uma pessoa com deficiência;</p>
											<p>	•	Entidades beneficiárias: entidades coletivas, públicas ou privadas sem fins lucrativos, designadamente: entidades de solidariedade social, autarquias locais ou serviços públicos que desenvolvam atividades relevantes para a satisfação de necessidades sociais ou coletivas.</p>
										</div>										
								</div>
							</div>
							<div class="panel-group" id="myaccordian3">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-3" data-toggle="collapse" style="padding-top: 5px">Emprego Protegido</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-3">
										<div class="panel-body">
												<p> •	Estágio realizado num Centro de Emprego Protegido (CEP) com uma duração não superior a 9 meses;</p>
												<p>•	Os CEP podem ser criados por iniciativa de pessoas coletivas de direito público que não façam parte da administração direta do Estado e por pessoas coletivas de direito privado sem fins lucrativos.</p>
												<p>•	O trabalhador em regime de emprego apoiado tem direito, durante o período de estágio, a uma retribuição igual a 70 % da retribuição mínima mensal garantida;</p>
												<p>•	Os apoios à construção, equipamento e instalação do CEP podem ser concedidos até ao limite de 100% das despesas de investimento elegíveis, nas modalidades cumuláveis de subsídio não reembolsável (não pode ultrapassar o valor máximo de 70% do apoio) e empréstimo sem juros, este último a reembolsar no prazo de 15 anos e com carência de 5 anos (estes apoios não podem ultrapassar o valor de 30 vezes o IAS por posto de trabalho em regime de emprego protegido);</p>
												<p>•	Comparticipação na retribuição dos trabalhadores em regime de emprego apoiado, correspondente à diferença a que o trabalhador tem direito e o Indexante dos Apoios Sociais (IAS- 70% do IAS);</p>
												<p>•	Comparticipação nas contribuições para a segurança social a seu cargo, na mesma proporção;</p>
												<p>•	O apoio pode ser concedido à entidade até que o trabalhador transite para o regime normal de trabalho ou atinja capacidade superior a 75 % da capacidade normal exigida a outro trabalhador nas mesmas funções profissionais. Se não for possível a sua transição para o regime normal de trabalho, os apoios podem ser renovados anualmente.</p>					
										</div>										
									</div>
								</div>
							<div class="panel-group" id="myaccordian4">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-4" data-toggle="collapse" style="padding-top: 5px">Emprego Apoiado em Mercado Aberto</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-4">
										<div class="panel-body">
												<p> •	Estágio realizado num Centro de Emprego Protegido (CEP) com uma duração não superior a 9 meses;</p>
												<p>•	Os CEP podem ser criados por iniciativa de pessoas coletivas de direito público que não façam parte da administração direta do Estado e por pessoas coletivas de direito privado sem fins lucrativos.</p>
												<p>•	O trabalhador em regime de emprego apoiado tem direito, durante o período de estágio, a uma retribuição igual a 70 % da retribuição mínima mensal garantida;</p>
												<p>•	Os apoios à construção, equipamento e instalação do CEP podem ser concedidos até ao limite de 100% das despesas de investimento elegíveis, nas modalidades cumuláveis de subsídio não reembolsável (não pode ultrapassar o valor máximo de 70% do apoio) e empréstimo sem juros, este último a reembolsar no prazo de 15 anos e com carência de 5 anos (estes apoios não podem ultrapassar o valor de 30 vezes o IAS por posto de trabalho em regime de emprego protegido);</p>
												<p>•	Comparticipação na retribuição dos trabalhadores em regime de emprego apoiado, correspondente à diferença a que o trabalhador tem direito e o Indexante dos Apoios Sociais (IAS- 70% do IAS);</p>
												<p>•	Comparticipação nas contribuições para a segurança social a seu cargo, na mesma proporção;</p>
												<p>•	O apoio pode ser concedido à entidade até que o trabalhador transite para o regime normal de trabalho ou atinja capacidade superior a 75 % da capacidade normal exigida a outro trabalhador nas mesmas funções profissionais. Se não for possível a sua transição para o regime normal de trabalho, os apoios podem ser renovados anualmente.</p>					
										</div>										
									</div>
								</div>

								<div class="panel-group" id="myaccordian5">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-5" data-toggle="collapse" style="padding-top: 5px">Redução da Taxa Contributiva</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-5">
										<div class="panel-body">
												<p> •	As entidades empregadoras que celebrem um contrato de trabalho sem termo com uma pessoa com deficiência (desde que a mesma tenha capacidade para o trabalho inferior a 80% da capacidade normal exigida a um trabalhador não deficiente, no desempenho das mesmas funções) têm direito a uma redução da taxa contributiva.</p>
												<p>•	A entidade empregadora passa a pagar 11,9% sobre as remunerações do trabalhador enquanto durar o contrato de trabalho. O trabalhador paga 11% (entregues pela entidade empregadora) – taxa total: 22,9%.</p>
										</div>										
									</div>
								</div>
							</div>
							</div>
					</div>
					<div id="procedimentos3" class="col-sm-12" >
						<h1>O que tem a ganhar?</h1>
						<p>As pessoas com deficiência podem ter um excelente desempenho profissional, desde que as funções que lhes são atribuídas sejam ajustadas ao seu perfil e às suas capacidades.
						Está nas suas mãos abrir as portas da sua empresa ou organização para que as pessoas com deficiência possam mostrar o seu valor e as suas capacidades. Tem ao seu dispor alguns apoios e incentivos, geridos pelo Instituo de Emprego e Formação (IEFP):</p>

						<div class="panel-group" id="myaccordian1">
							<div class="panel panel-primary" style="margin-bottom: 8px">
								<div class="panel-heading">
									<h3 class="panel-title" data-target="#panel-1" data-toggle="collapse" style="padding-top: 5px">Estágios de Inserção</h3>
								</div>
								<div class="panel-collapse collapse" id="panel-1">
									<div class="panel-body">
										<p> •	12 meses não prorrogáveis;</p>
										<p>	•	Remuneração consoante o  nível de habilitações do trabalhador;</p>
										<p>	•	Entidades beneficiárias: entidades de natureza jurídica privada, com ou sem fins lucrativos;</p>
										<p>	•	Comparticipação da bolsa de estágio varia entre os 80% e os 95%, consoante o tipo de empresa e a sua dimensão.</p>
									</div>										
								</div>
							</div>
							<div class="panel-group" id="myaccordian2">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-2" data-toggle="collapse" style="padding-top: 5px">Contratos Emprego-Inserção</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-2">
										<div class="panel-body">
											<p> •	Duração máxima de 12 meses;</p>
											<p>	•	Na medida CEI a pessoa pode ser beneficiária do subsídio de desemprego ou do subsídio social de desemprego;</p>
											<p>	•	A entidade promotora não tem qualquer custo ao empregar uma pessoa com deficiência;</p>
											<p>	•	Entidades beneficiárias: entidades coletivas, públicas ou privadas sem fins lucrativos, designadamente: entidades de solidariedade social, autarquias locais ou serviços públicos que desenvolvam atividades relevantes para a satisfação de necessidades sociais ou coletivas.</p>
										</div>										
								</div>
							</div>
							<div class="panel-group" id="myaccordian3">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-3" data-toggle="collapse" style="padding-top: 5px">Emprego Protegido</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-3">
										<div class="panel-body">
												<p> •	Estágio realizado num Centro de Emprego Protegido (CEP) com uma duração não superior a 9 meses;</p>
												<p>•	Os CEP podem ser criados por iniciativa de pessoas coletivas de direito público que não façam parte da administração direta do Estado e por pessoas coletivas de direito privado sem fins lucrativos.</p>
												<p>•	O trabalhador em regime de emprego apoiado tem direito, durante o período de estágio, a uma retribuição igual a 70 % da retribuição mínima mensal garantida;</p>
												<p>•	Os apoios à construção, equipamento e instalação do CEP podem ser concedidos até ao limite de 100% das despesas de investimento elegíveis, nas modalidades cumuláveis de subsídio não reembolsável (não pode ultrapassar o valor máximo de 70% do apoio) e empréstimo sem juros, este último a reembolsar no prazo de 15 anos e com carência de 5 anos (estes apoios não podem ultrapassar o valor de 30 vezes o IAS por posto de trabalho em regime de emprego protegido);</p>
												<p>•	Comparticipação na retribuição dos trabalhadores em regime de emprego apoiado, correspondente à diferença a que o trabalhador tem direito e o Indexante dos Apoios Sociais (IAS- 70% do IAS);</p>
												<p>•	Comparticipação nas contribuições para a segurança social a seu cargo, na mesma proporção;</p>
												<p>•	O apoio pode ser concedido à entidade até que o trabalhador transite para o regime normal de trabalho ou atinja capacidade superior a 75 % da capacidade normal exigida a outro trabalhador nas mesmas funções profissionais. Se não for possível a sua transição para o regime normal de trabalho, os apoios podem ser renovados anualmente.</p>					
										</div>										
									</div>
								</div>
							<div class="panel-group" id="myaccordian4">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-4" data-toggle="collapse" style="padding-top: 5px">Emprego Apoiado em Mercado Aberto</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-4">
										<div class="panel-body">
												<p> •	Estágio realizado num Centro de Emprego Protegido (CEP) com uma duração não superior a 9 meses;</p>
												<p>•	Os CEP podem ser criados por iniciativa de pessoas coletivas de direito público que não façam parte da administração direta do Estado e por pessoas coletivas de direito privado sem fins lucrativos.</p>
												<p>•	O trabalhador em regime de emprego apoiado tem direito, durante o período de estágio, a uma retribuição igual a 70 % da retribuição mínima mensal garantida;</p>
												<p>•	Os apoios à construção, equipamento e instalação do CEP podem ser concedidos até ao limite de 100% das despesas de investimento elegíveis, nas modalidades cumuláveis de subsídio não reembolsável (não pode ultrapassar o valor máximo de 70% do apoio) e empréstimo sem juros, este último a reembolsar no prazo de 15 anos e com carência de 5 anos (estes apoios não podem ultrapassar o valor de 30 vezes o IAS por posto de trabalho em regime de emprego protegido);</p>
												<p>•	Comparticipação na retribuição dos trabalhadores em regime de emprego apoiado, correspondente à diferença a que o trabalhador tem direito e o Indexante dos Apoios Sociais (IAS- 70% do IAS);</p>
												<p>•	Comparticipação nas contribuições para a segurança social a seu cargo, na mesma proporção;</p>
												<p>•	O apoio pode ser concedido à entidade até que o trabalhador transite para o regime normal de trabalho ou atinja capacidade superior a 75 % da capacidade normal exigida a outro trabalhador nas mesmas funções profissionais. Se não for possível a sua transição para o regime normal de trabalho, os apoios podem ser renovados anualmente.</p>					
										</div>										
									</div>
								</div>

								<div class="panel-group" id="myaccordian5">
								<div class="panel panel-primary" style="margin-bottom: 8px">
									<div class="panel-heading">
										<h3 class="panel-title" data-target="#panel-5" data-toggle="collapse" style="padding-top: 5px">Redução da Taxa Contributiva</h3>
									</div>
									<div class="panel-collapse collapse" id="panel-5">
										<div class="panel-body">
												<p> •	As entidades empregadoras que celebrem um contrato de trabalho sem termo com uma pessoa com deficiência (desde que a mesma tenha capacidade para o trabalho inferior a 80% da capacidade normal exigida a um trabalhador não deficiente, no desempenho das mesmas funções) têm direito a uma redução da taxa contributiva.</p>
												<p>•	A entidade empregadora passa a pagar 11,9% sobre as remunerações do trabalhador enquanto durar o contrato de trabalho. O trabalhador paga 11% (entregues pela entidade empregadora) – taxa total: 22,9%.</p>
										</div>										
									</div>
								</div>
							
							</div>
					</div> </div>
				</div>
			</div> 

		</body>


	</div>	
		
	

</div>
<!-- /.row -->





@endsection