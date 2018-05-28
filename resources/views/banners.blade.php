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

        	@foreach($banners as $banner)

        	<div class="col-md-3 img-portfolio">
                <a href="/banners/{{ $banner->id }}" title="{{ $banner->link }}">
                    <img class="img-responsive img-hover" src="{{ $banner->path }}" alt="">
                </a>
            </div>

            @endforeach

        </div>
        <!-- /.row -->

    </div>

@endsection