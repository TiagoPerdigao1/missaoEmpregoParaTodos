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
                <h1 class="page-header">Apoiantes
                    <small>Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

        	@foreach($support_entities as $support_entity)

        	<div class="col-md-3 img-portfolio">
                <a href="/entidades_apoio/{{ $support_entity->id }}" title="{{ $support_entity->description }}">
                    <img class="img-responsive img-hover" src="{{ $support_entity->path }}" alt="">
                </a>
            </div>

            @endforeach

        </div>
        <!-- /.row -->

    </div>

@endsection