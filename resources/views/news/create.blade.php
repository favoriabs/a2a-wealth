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

@section('content')
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    {{Form::open(array('route' => 'save_news', 'method' => 'POST', 'files' => 'true'))}}
                        {{ csrf_field() }}
                        <div class="header text-center">Create News</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> Title</label>
                                        <input class="form-control" name="title" type="text" placeholder="Enter Title" required />
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Picture </label>
                                        <input class="form-control" name="picture" type="file" accept="image/*"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Content</label>
                                <textarea name="content" class="form-control" placeholder="News Content"></textarea>
                            </div>
                            
                        </div>

                        <div class="footer text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Create News</button>
                        </div>
                    </form>
                </div>
            </div>
             @include('layouts.sessions')
             @include('layouts.errors')
        </div>
    </div>
@stop