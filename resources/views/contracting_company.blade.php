@extends('layout')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">{{ $contracting_company->description_functions }}
                    <small>Subheading</small>
                </h1>
                <h1 class="page-header">{{ $contracting_company->designation }}
                    <small>Subheading</small>
                </h1>
                <h1 class="page-header">{{ $contracting_company->activity_sector }}
                    <small>Subheading</small>
                </h1>
                <h1 class="page-header">{{ $contracting_company->locale }}
                    <small>Subheading</small>
                </h1>
                <h1 class="page-header">{{ $contracting_company->products_services }}
                    <small>Subheading</small>
                </h1>
    
                
            </div>
        </div>
        <!-- /.row -->

    </div>

@endsection