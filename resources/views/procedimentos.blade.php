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
			h1{padding-top: 10%;}
		</style>

		<div class="col-sm-3">
			<nav id="mainNavbar">
				<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="65">
					<li class="active"><a href="#myaccordian1">Procedimentos1</a></li>
					<li><a href="#myaccordian2">Procedimentos2</a></li>
					<li><a href="#myaccordian3">Procedimentos3</a></li>
				</ul>
				
			</nav>
		</div>
		<body data-spy="scroll" data-target="#mainNavbar" style="position: relative;">
			<div class="container">	
				<div class="col-sm-9">
					<div class="col-md-12" >
						
						<div class="panel-group" id="myaccordian1">
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" data-target="#panel-1" data-toggle="collapse" style="padding-top: 5px">Procedimentos</h1>
								</div>
								<div class="panel-collapse collapse" id="panel-1">
									<div class="panel-body">
										<p>Not far stuff she think the jokes. Going as by do known noise he wrote round leave. Warmly put branch people narrow see. Winding its waiting yet parlors married own feeling. Marry fruit do spite jokes an times. Whether at it unknown warrant herself winding if. Him same none name sake had post love. An busy feel form hand am up help. Parties it brother amongst an fortune of. Twenty behind wicket why age now itself ten. </p>
									</div>										
								</div>
							</div>
							<div class="panel-group" id="myaccordian2">
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" data-target="#panel-2" data-toggle="collapse" style="padding-top: 5px">Procedimentos</h1>
								</div>
								<div class="panel-collapse collapse" id="panel-2">
									<div class="panel-body">
										<p>Not far stuff she think the jokes. Going as by do known noise he wrote round leave. Warmly put branch people narrow see. Winding its waiting yet parlors married own feeling. Marry fruit do spite jokes an times. Whether at it unknown warrant herself winding if. Him same none name sake had post love. An busy feel form hand am up help. Parties it brother amongst an fortune of. Twenty behind wicket why age now itself ten. </p>
									</div>										
								</div>
							</div>
							<div class="panel-group" id="myaccordian3">
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" data-target="#panel-3" data-toggle="collapse" style="padding-top: 5px">Procedimentos</h1>
								</div>
								<div class="panel-collapse collapse" id="panel-3">
									<div class="panel-body">
										<p>Not far stuff she think the jokes. Going as by do known noise he wrote round leave. Warmly put branch people narrow see. Winding its waiting yet parlors married own feeling. Marry fruit do spite jokes an times. Whether at it unknown warrant herself winding if. Him same none name sake had post love. An busy feel form hand am up help. Parties it brother amongst an fortune of. Twenty behind wicket why age now itself ten. </p>
									</div>										
								</div>
							</div>
						</div>

					</div>
							
				</div>
			</div> 
		</body>

		


	</div>	
		
	

</div>
<!-- /.row -->





@endsection