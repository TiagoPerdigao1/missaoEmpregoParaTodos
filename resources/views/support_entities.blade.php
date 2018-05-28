@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Four Column Portfolio
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