@extends('layouts.main')

@section('navbar')
    @include('agent.navbar')
@stop

@section('create_farmer_active')
    active
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form id="loginFormValidation" action="{{ route('store_farmer') }}" method="post">
                        {{ csrf_field() }}
                        <div class="header text-center">Create Farmer</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">First Name </label>
                                        <input class="form-control" name="first_name" type="text" placeholder="Enter First name" />
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Last Name </label>
                                        <input class="form-control" name="last_name" type="text" placeholder="Enter Last Name" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Email Address</label>
                                <input class="form-control" name="email" type="email" placeholder="Enter Email Address" />
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Phone Number</label>
                                <input class="form-control" name="phone_number" type="text" placeholder="Enter Phone Number" />
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Username </label>
                                <input class="form-control" name="user_name" type="text" placeholder="user name" />
                            </div>

                        </div>

                        <div class="footer text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            @include('layouts.sessions')
            @include('layouts.errors')
        </div>
    </div>
@stop