@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sub Procedimentos
                    <small>Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

        	@foreach($sub_procedures as $sub_procedure)

        	<div class="col-md-3 img-portfolio">
                <a href="/sub_procedimentos/{{ $sub_procedure->id }}" title="{{ $sub_procedure->description }}">
                    <h1 class="page-header">{{ $sub_procedure->title }}
                    </h1>
                </a>
            </div>

            @endforeach

        </div>
        <!-- /.row -->

    </div>

@endsection