@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Casos de Sucesso
                    <small>Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

        	@foreach($successful_cases as $successful_case)

        	<div class="col-md-3 img-portfolio">
                <a href="/casos_sucesso/{{ $successful_case->id }}" title="{{ $successful_case->description }}">
                    <img class="img-responsive img-hover" src="{{ $successful_case->path }}" alt="">
                </a>
            </div>

            @endforeach

        </div>
        <!-- /.row -->

    </div>

@endsection