@extends('layouts.main')

@section('navbar')
    @include('farmer.navbar')
@stop

@section('farmer_dashboard_active')
   active
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(count($farmers) < 1)
                <div>You haven't registered yet. Please Register!</div>
            @else
            

            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    @foreach($farmers as $farmer)
                        @if($user->id === $farmer->user_id)
                        <img style="float:right" src="{{$farmer->farmer_scan_path}}" width="70px" height="70px"></img>
                        
                    <tr>
                        <tr>
                            <td>Full Name</td><td>{{$user->first_name}} {{$user->last_name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td><td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td><td>{{$user->phone_number}}</td>
                        </tr>
                        <tr>
                            @foreach($states as $state)
                            @if($farmer->state == $state->id)
                                <td>State</td><td>{{$state->name}}</td>
                            @endif
                            @endforeach
                        </tr>
                        <tr>
                            @foreach($lgas as $lga)
                                @if($farmer->lga == $lga->id)
                                    <td>Lga</td><td>{{$lga->name}}</td>
                                 @endif
                            @endforeach
                        </tr>
                        <tr>
                            <td>Ward</td><td>{{$farmer->ward}}</td>
                        </tr>
                        <tr>
                            <td>Village</td><td>{{$farmer->village}}</td>
                        </tr>
                        <tr>
                            <td>BVN</td><td>{{$farmer->bvn}}</td>
                        </tr>
                        <tr>
                            <td>Longitude</td><td>{{$farmer->longitude}}</td>
                        </tr>
                        <tr>
                            <td>Latitude</td><td>{{$farmer->latitude}}</td>
                        </tr>
                        <tr>
                            <td>Altitude</td><td>{{$farmer->altitude}}</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td><td>{{$farmer->dob}}</td>
                        </tr>
                        <tr>
                            <td>Gender</td><td>{{$farmer->gender}}</td>
                        </tr>
                        <tr>
                            <td>Highest Level of Education</td><td>{{$farmer->highest_education_lvl}}</td>
                        </tr>
                        <tr>
                            <td>Contact Address</td><td>{{$farmer->contact_add}}</td>
                        </tr>
                        <tr>
                            <td>Computer Literate</td><td>{{$farmer->comp_literate}}</td>
                        </tr>
                        <tr>
                            <td>Need Training</td><td>{{$farmer->need_training}}</td>
                        </tr>
                        <tr>
                            <td>Next of Kin</td><td>{{$farmer->next_of_kin}}</td>
                        </tr>
                        <tr>
                            <td>Relationship</td><td>{{$farmer->relationship}}</td>
                        </tr>
                        <tr>
                            <td>ID</td><td>{{$farmer->id_next_of_kin}}</td>
                        </tr>
                        <tr>
                            <td>CAC Business/ Corporate Name</td><td>{{$farmer->corporate_name}}</td>
                        </tr>
                        <tr>
                            <td>RC No</td><td>{{$farmer->rc_no}}</td>
                        </tr>
                        <tr>
                            <td>Business Registration Date</td><td>{{$farmer->reg_date}}</td>
                        </tr>
                        <tr>
                            <td>Account Name</td><td>{{$farmer->account_name}}</td>
                        </tr>
                        <tr>
                            <td>Account Number</td><td>{{$farmer->account_number}}</td>
                        </tr>
                        <tr>
                            <td>Account Type</td><td>{{$farmer->account_type}}</td>
                        </tr>
                        <tr>
                            <td>Farmer Category</td><td>{{$farmer->farmer_category}}</td>
                        </tr>
                        <!--add categories-->
                        <tr>
                            <td>Organisation</td><td>{{$farmer->organisation}}</td>
                        </tr>
                        <tr>
                            <td>Photo</td><td>{{$farmer->farmer_scan_path}}</td>
                        </tr>
                        <tr>
                            <td>ID Presented</td><td>{{$farmer->id_presented_path}}</td>
                        </tr>
                        <tr>
                            <td>ID Number</td><td>{{$farmer->id_number}}</td>
                        </tr>
                        <tr>
                            <td>Name of Registered Cooperative</td><td>{{$farmer->cooperative_name}}</td>
                        </tr>
                        <tr>
                            <td>Status in Cooperative</td><td>{{$farmer->status}}</td>
                        </tr>
                        <tr>
                            <td>Registration Number of the Cooperative Society</td><td>{{$farmer->coop_reg_number}}</td>
                        </tr>
                        <tr>
                            <td>Date of Registration in Cooperative</td><td>{{$farmer->cooperative_reg_date}}</td>
                        </tr>
                        <tr>
                            <td>Contact Person in the Cooperative</td><td>{{$farmer->contact_person}}</td>
                        </tr>
                        <tr>
                            <td>Contact Person Phone Number</td><td>{{$farmer->contact_number}}</td>
                        </tr>
                        <tr>
                            <td>Address of Cooperative Soceity</td><td>{{$farmer->cooperative_address}}</td>
                        </tr>
                        <tr>
                            <td>Registration Agency/Authority</td><td>{{$farmer->agency}}</td>
                        </tr>
                    </tr>
                    @endif
                    @endforeach
                </thead>
            </table>
            @endif
        </div>
    </div>
@stop