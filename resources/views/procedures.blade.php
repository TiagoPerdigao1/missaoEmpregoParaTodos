@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Procedimentos
                    <small>Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

        	@foreach($procedures as $procedure)

        	<div class="col-md-3 img-portfolio">
                <a href="/procedimentos/{{ $procedure->id }}" title="{{ $procedure->description }}">
                    <h1 class="page-header">{{ $procedure->title }}
                    </h1>
                </a>
            </div>

            @endforeach

        </div>
        <!-- /.row -->

    </div>

@endsection