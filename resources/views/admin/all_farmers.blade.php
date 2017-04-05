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
                        <th>Agent Name</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Full Name</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Agent Name</th>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach($farmers as $farmer)
                       <tr>
                           <td>{{$farmer->first_name}} {{$farmer->last_name}}</td>
                           <td>{{$farmer->user_name}}</td>
                           <td>{{$farmer->email}}</td>
                           <td>{{$farmer->phone_number}}</td>
                           @foreach($users as $user)
                               @if($farmer->agent_id == $user->id)
                                   <td>{{$user->first_name}} {{$user->last_name}}</td>
                               @endif
                           @endforeach
                       </tr>
                   @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@stop