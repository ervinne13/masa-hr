@extends('layouts.skarla.app')

@section('content')

<div class="row">

    <h3>
        List of Applicants By Pool
        <span class="pull-right">
            <a class="btn btn-primary" href="{{url("applicants/create")}}">
                <i class="fa fa-plus"></i>
                Encode New Applicant
            </a>
        </span>
    </h3>

    <div class="panel panel-default b-a-0 shadow-box b-l-2 b-l-primary">

        <table class="table">
            <thead>
                <tr>
                    <th class="small"></th>
                    <th class="small text-muted text-uppercase">
                        <strong>Applicant Status</strong>
                    </th>
                    <th class="small text-muted text-uppercase">
                        <strong>Last Name</strong>
                    </th>
                    <th class="small text-muted text-uppercase">
                        <strong>First Name</strong>
                    </th>
                    <th class="small text-muted text-uppercase">
                        <strong>Middle Name</strong>
                    </th>
                    <th class="small text-muted text-uppercase">
                        <strong>Email Address</strong>
                    </th>
                    <th class="small text-muted text-uppercase">
                        <strong>Tel. No. (Residential / Permanent)</strong>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="v-a-m">
                        <a href="javascript: void(0)">Edit <i class="fa fa-pencil"></i></a>
                        <a href="javascript: void(0)">View <i class="fa fa-angle-right"></i></a>                        
                    </td>
                    <td class="v-a-m">
                        <span class="text-gray-darker">
                            <i class="fa fa-circle-o text-lighting-yellow m-r-1"></i>
                            Passed Interview
                        </span>
                    </td>
                    <td class="v-a-m">
                        Sodusta
                    </td>
                    <td class="v-a-m">
                        Ervinne
                    </td>
                    <td class="v-a-m">
                        Deladia
                    </td>
                    <td class="v-a-m">
                        ervinnesodusta@gmail.com
                    </td>                    
                    <td class="v-a-m">
                        779-7129 / 518-7054
                    </td>

                </tr>                
            </tbody>
        </table>

    </div>

</div>

@endsection