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
            @if(count($agents) < 1)
                <div>No Agents yet!</div>
            @else
            

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>User Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>User Name</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach($agents as $agent)
                       <tr>
                           <td>{{$agent[0]->first_name}}</td>
                           <td>{{$agent[0]->last_name}}</td>
                           <td>{{$agent[0]->email}}</td>
                           <td>{{$agent[0]->phone_number}}</td>
                           <td>{{$agent[0]->user_name}}</td>
                           <td>
                                <a data-toggle="modal" data-target="#modal_edit_{{$agent[0]->id}}" id="edit-bu-btn" style="cursor:pointer;">
                                    <i class="fa fa-pencil text-warning"></i> Edit
                                </a>
                                <a data-toggle="modal" data-target="#modal_delete_{{$agent[0]->id}}" id="delete-bu-btn" style="cursor:pointer;margin-left:10px;">
                                    <i class="pe-7s-trash text-warning"></i> Delete
                                </a>
                            </td>
                       </tr>
                        @include('agent.edit')
                       @include('agent.delete')
                   @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@stop