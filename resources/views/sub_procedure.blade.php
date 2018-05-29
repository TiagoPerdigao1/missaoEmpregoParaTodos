@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $sub_procedure->title }}
                    <small>Subheading</small>
                </h1>
                <h1 class="page-header">{{ $sub_procedure->description }}
                    <small>Subheading</small>
                </h1>
                <h1 class="page-header">{{ $sub_procedure->link }}
                    <small>Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

    </div>

@endsection