@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Configurações
                    <small>Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

        	@foreach($configurations as $configuration)

        	<div class="col-md-3 img-portfolio">
                <a href="/configuracoes/{{ $configuration->id }}" title="{{ $configuration->value }}">
                    <h1 class="page-header">{{ $configuration->description }}
                    </h1>
                </a>
            </div>

            @endforeach

        </div>
        <!-- /.row -->

    </div>

@endsection