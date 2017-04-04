@extends('layouts.main')

@section('navbar')
    @include('admin.navbar')
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form id="loginFormValidation" action="{{ route('save_agent') }}" method="post">
                        <div class="header text-center">Create Agent</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">First Name </label>
                                        <input class="form-control" name="first_name" type="text" placeholder="Enter First name" value="{{old('first_name')}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Last Name </label>
                                        <input class="form-control" name="last_name" type="text" placeholder="Enter Last Name" value="{{old('last_name')}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">User Name </label>
                                        <input class="form-control" name="user_name" type="text" placeholder="Enter User name" value="{{old('user_name')}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Phone Number </label>
                                        <input class="form-control" name="phone_number" type="text" placeholder="Enter Phone Number" value="{{old('phone_number')}}" required />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Email Address </label>
                                <input class="form-control" name="email" type="email" placeholder="Enter Email Address" value="{{old('email')}}" required />
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