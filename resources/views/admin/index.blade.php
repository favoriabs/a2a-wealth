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
            @if(count($cooperatives) < 1)
                <div>No Cooperatives yet!</div>
            @else
            

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>State</th>
                        <th>Lga</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>State</th>
                        <th>Lga</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach($cooperatives as $cooperative)
                       <tr>
                           <td>{{$cooperative[0]->user_name}}</td>
                           <td>{{$cooperative[0]->email}}</td>
                           <td>{{$cooperative[0]->phone_number}}</td>
                           <td>
                               @foreach($coops as $coop)
                                   @if($cooperative[0]->id == $coop->user_id)
                                       {{$coop->state}}
                                   @endif
                               @endforeach
                           </td>
                           <td>
                               @foreach($coops as $coop)
                                   @if($cooperative[0]->id == $coop->user_id)
                                       {{$coop->lga}}
                                   @endif
                               @endforeach
                           </td>
                           <td>
                                <a data-toggle="modal" data-target="#modal_edit_{{$cooperative[0]->id}}" id="edit-bu-btn" style="cursor:pointer;">
                                    <i class="fa fa-pencil text-warning"></i> Edit
                                </a>
                                <a data-toggle="modal" data-target="#modal_delete_{{$cooperative[0]->id}}" id="delete-bu-btn" style="cursor:pointer;margin-left:10px;">
                                    <i class="pe-7s-trash text-warning"></i> Delete
                                </a>
                            </td>
                       </tr>
                        @include('cooperative.edit')
                       @include('cooperative.delete')
                   @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@stop