@extends('layouts.main')

@section('script')

@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form id="loginFormValidation" action="{{ route('save_settings') }}" method="post">
                        <div class="header text-center">Settings</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Old Password <star>*</star></label>
                                        <input class="form-control" name="old_password" type="password" placeholder="Old Password" value="{{old('user_name')}}"  />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">New Password <star>*</star></label>
                                        <input class="form-control" name="new_password" type="password" placeholder="New Password" value="{{old('new_password')}}"  />
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