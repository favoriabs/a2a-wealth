@extends('layouts.main')

@section('navbar')
    @include('admin.navbar')
@stop

@section('script')
    <script type="text/javascript">
        $(function() {
            var stateiD = $('#state_dropdown').val();
            var updateStateDropdown = function() {
                if ($('#state_dropdown').val() == '') {
                    $('#lga_dropdown').prop('disabled', true);
                } else {
                    $('#lga_dropdown').prop('disabled', false);
                }
            };                   
            updateStateDropdown();
            
            // csrf token
            var token = $('#_token').val();
            
            // disable submit button when clicked
            $("#submitBtn").on("click", function() {
                $("#submitBtn").addClass("disabled");
            });
            
            $('#state_dropdown').change(function() {
                console.log($('#state_dropdown').val());
                updateStateDropdown();

                $.ajax({
                    "type":"POST",
                    "url": "/ajax/state/lgas",
                    "data": {
                        "_token": token,
                        "state": $('#state_dropdown').val(),
                    },
                    success: function(data) {
                        $('#lga_dropdown').empty();
                        $.each(data, function(i, lga) {
                            $('#lga_dropdown').append($("<option>").text(lga['name']).attr('value', lga['id']));
                            
                        });
                        console.log($('#lga_dropdown').val());
                        updateStateDropdown();
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form id="loginFormValidation" action="{{ route('save_cooperative') }}" method="post">
                        <div class="header text-center">Create Co-operative</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">User Name <star>*</star></label>
                                        <input class="form-control" name="user_name" type="text" placeholder="Enter User name" value="{{old('user_name')}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Phone Number <star>*</star></label>
                                        <input class="form-control" name="phone_number" type="text" placeholder="Enter Phone Number" value="{{old('phone_number')}}" required />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">State <star>*</star></label>
                                        <select class="form-control" name="state" id="state_dropdown">
                                            <option value="">Select State</option>
                                            @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Local Govt <star>*</star></label>
                                        <select name="lga" class="form-control" id="lga_dropdown">
                                            <option> Selected</option>
                                            @foreach ($lgas as $lga)
                                                <option value=""> </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Email Address <star>*</star></label>
                                <input class="form-control" name="email" type="email" placeholder="Enter Email Address" value="{{old('email')}}" required />
                            </div>

                            <input type="hidden" name="_token" id="_token" value="{{{ csrf_token() }}}" />

                            <div class="category"><star>*</star> Required fields</div>
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