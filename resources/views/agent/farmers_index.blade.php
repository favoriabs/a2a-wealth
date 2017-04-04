@extends('layouts.main')

@section('navbar')
    @include('cooperative.navbar')
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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(count($farmers) < 1)
                <div>No Farmers yet!</div>
            @else
            

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Full Name</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach($farmers as $farmer)
                       <tr>
                           <td>{{$farmer->first_name .' '. $farmer->last_name}}</td>
                           <td>{{$farmer->user_name}}</td>
                           <td>{{$farmer->email}}</td>
                           <td>{{$farmer->phone_number}}</td>
                            <td>
                                <a data-toggle="modal" data-target="#modal_edit_{{$farmer->id}}" id="edit-bu-btn" style="cursor:pointer;">
                                    <i class="fa fa-pencil text-warning"></i> Edit
                                </a>
                                <a data-toggle="modal" data-target="#modal_delete_{{$farmer->id}}" id="delete-bu-btn" style="cursor:pointer;margin-left:10px;">
                                    <i class="pe-7s-trash text-warning"></i> Delete
                                </a>
                            </td>
                       </tr>
                       @include('agent.edit_farmer')
                       @include('agent.delete_farmer')
                   @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@stop