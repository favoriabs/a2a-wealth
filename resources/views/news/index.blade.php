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
            @if(count($news) < 1)
                <div>No News yet!</div>
            @else
            

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach($news as $news)
                       <tr>
                           <td>{{$news->title}}</td>
                           <td>{{$news->content}}</td>
                           <td>
                                <a data-toggle="modal" data-target="#modal_edit_{{$news->id}}" id="edit-bu-btn" style="cursor:pointer;">
                                    <i class="fa fa-pencil text-warning"></i> Edit
                                </a>
                                <a data-toggle="modal" data-target="#modal_delete_{{$news->id}}" id="delete-bu-btn" style="cursor:pointer;margin-left:10px;">
                                    <i class="pe-7s-trash text-warning"></i> Delete
                                </a>
                            </td>
                       </tr>
                        @include('news.edit')
                       @include('news.delete')
                   @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@stop