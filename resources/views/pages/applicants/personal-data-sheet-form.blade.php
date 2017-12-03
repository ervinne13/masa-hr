@extends('layouts.skarla.app')

@section('content')

<div class="row">

    <h3>
        Applicant Status: (New)
        <span class="pull-right">
            <a class="btn btn-primary" href="{{url("applicants/create")}}">
                <i class="fa fa-plus"></i>
                Encode New Applicant
            </a>
        </span>
    </h3>

    <div class="panel panel-default b-a-0 shadow-box b-l-2 b-l-primary">       
        <div class="panel-body">
            @include('pages.applicants.partials.pds-header')            
            <hr>            
            @include('pages.applicants.partials.pds-applicant-details')
            <hr>
        </div>
    </div>

</div>

@endsection