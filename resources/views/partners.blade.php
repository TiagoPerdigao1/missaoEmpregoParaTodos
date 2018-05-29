@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Parceiros
                    <small>Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

        	@foreach($partners as $partner)

        	<div class="col-md-3 img-portfolio">
                <a href="/parceiros/{{ $partner->id }}" title="{{ $partner->description }}">
                    <img class="img-responsive img-hover" src="{{ $partner->imageLink }}" alt="">
                </a>
            </div>

            @endforeach

        </div>
        <!-- /.row -->

    </div>

@endsection