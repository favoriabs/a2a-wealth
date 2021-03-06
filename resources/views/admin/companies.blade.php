@extends('layouts.main')

@section('navbar')
    @include('admin.navbar')
@stop

@section('stylesheets')
    <link href="/css/responsivemodal.css" rel="stylesheet" />
    <style media="screen">
        body {
            overflow-x: hidden;
            overflow-y: hidden;
        }
    </style>
@stop

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(count($companies) < 1)
                <div>No Companies yet!</div>
            @else
            

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>User Name</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach($companies as $company)
                       <tr>
                           <td>{{$company[0]->user_name}}</td>
                           <td>@foreach($comps as $comp)
                                @if($company[0]->id === $comp->user_id)
                                    {{$comp->company_name}}
                                @endif
                           @endforeach
                           </td>
                          
                           <td>{{$company[0]->email}}</td>
                           <td>{{$company[0]->phone_number}}</td>
                           <td>
                                <a data-toggle="modal" data-target="#modal_edit_{{$company[0]->id}}" id="edit-bu-btn" style="cursor:pointer;">
                                    <i class="fa fa-pencil text-warning"></i> Edit
                                </a>
                                <a data-toggle="modal" data-target="#modal_delete_{{$company[0]->id}}" id="delete-bu-btn" style="cursor:pointer;margin-left:10px;">
                                    <i class="pe-7s-trash text-warning"></i> Delete
                                </a>
                            </td>
                       </tr>
                        @include('admin.edit-company')
                       @include('admin.delete-company')
                   @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@stop