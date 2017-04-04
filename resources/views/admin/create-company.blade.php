@extends('layouts.main')

@section('navbar')
    @include('admin.navbar')
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form id="loginFormValidation" action="{{ route('save_company') }}" method="post">
                        <div class="header text-center">Create Company</div>
                        <div class="content">
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Company User Name  </label>
                                        <input class="form-control" name="user_name" type="text" placeholder="Company User Name" value="{{old('user_name')}}"/>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Phone Number </label>
                                        <input class="form-control" name="phone_number" type="text" value="{{old('phone_number')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email </label>
                                        <input class="form-control" name="email" type="text" value="{{old('email')}}"/>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="_token" id="_token" value="{{{ csrf_token() }}}" />
                                        
                        </div>                
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd" id="submitBtn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            @include('layouts.sessions')
            @include('layouts.errors')
        </div>
    </div>

@stop