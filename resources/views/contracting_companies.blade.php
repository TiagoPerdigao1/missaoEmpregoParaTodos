@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <style>
                    h1 {text-align: center;}
                </style>
                <h1 class="page-header">Empregadoras
                    <small>Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

        	@foreach($contracting_companies as $contracting_company)

        	<div class="col-md-3 img-portfolio">
                <a href="/empresas_contratantes/{{ $contracting_company->id }}" title="{{ $contracting_company->designation }}">
                    <img class="img-responsive img-hover" src="{{ $contracting_company->path }}" alt="">
                </a>
            </div>

            @endforeach

        </div>
        <!-- /.row -->

    </div>

@endsection