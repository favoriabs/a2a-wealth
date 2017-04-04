@extends('layouts.main')

@section('navbar')
    @include('farmer.navbar')
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
        // webacam
        /*Webcam.attach( '#my_camera' );

        function take_snapshot() {
            Webcam.snap( function(data_uri) {
                document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
                var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
                document.getElementById('farmer_pix').value = raw_image_data;
            } );
        }*/
       
    </script>
@stop

<style type="text/css">
    [v-cloak] {
          display: none;
        }
</style>

@section('content')
    
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    {{Form::open(array('route' => 'farmer_register', 'method' => 'POST', 'files' => 'true'))}}    
                        <div class="header text-center">Complete Registration</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">State</label>
                                        <select class="form-control" name="state" value="{{old('state')}}" id="state_dropdown">
                                            <option value="">Select State</option>
                                            @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Local Govt</label>
                                        <select name="lga" class="form-control" id="lga_dropdown">
                                            <option> Selected</option>
                                            @foreach ($lgas as $lga)
                                                <option value=""> </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Ward </label>
                                        <input class="form-control" name="ward" type="text" placeholder="Enter Your Ward" value="{{old('ward')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Village </label>
                                        <input class="form-control" name="village" type="text" placeholder="Enter Your village" value="{{old('village')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">BVN </label>
                                        <input class="form-control" name="bvn" type="text" placeholder="Enter Your Bvn" value="{{old('bvn')}}"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Longitude </label>
                                        <input class="form-control" name="longitude" type="text" placeholder="Longitude" value="{{old('longitude')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Latitude </label>
                                        <input class="form-control" name="latitude" type="text" placeholder="Latitude" value="{{old('latitude')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Altitude </label>
                                        <input class="form-control" name="altitude" type="text" placeholder="Altitude" value="{{old('altitude')}}"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Date of Birth </label>
                                        <input class="form-control" name="dob" type="date" value="{{old('dob')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Gender </label> <br/>
                                            <input type="radio" name="gender"  value="1">Male <br/>
                                            <input type="radio" name="gender"  value="0">Female
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Highest Level of Education </label>
                                        <select class="form-control" name="highest_education_lvl" value="{{old('highest_education_lvl')}}">
                                            <option value="">Level of Education</option>
                                            <option value="primary">Primary</option>
                                            <option value="junior">Junior Secondary</option>
                                            <option value="senior">Senior Secondary</option>
                                            <option value="tertiary">Tertiary</option>
                                            <option value="none">None</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Contact Address</label><br/>
                                    <textarea name="contact_add" rows="3" cols="80" value="{{old('contact_add')}}"></textarea>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Computer Literate? </label> <br/>
                                            <input type="radio" name="comp_literate" value="Y">Yes <br/>
                                            <input type="radio"  name="comp_literate"  value="N">No
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                         <label class="control-label">Need Training? </label> <br/>
                                            <input type="radio" name="need_training" value="Y">Yes <br/>
                                            <input type="radio" name="need_training" value="N">No
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Next of Kin </label>
                                        <input class="form-control" name="next_of_kin" type="text" placeholder="Enter next of kin" value="{{old('next_of_kin')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Relationship </label>
                                        <input class="form-control" name="relationship" type="text" placeholder="Relationship with next of kin" value="{{old('relationship')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> ID </label>
                                        <input class="form-control" name="id_next_of_kin" type="text" placeholder="Enter next of kin ID" value="{{old('id_next_of_kin')}}"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> CAC Business/ Coporate Name </label>
                                        <input class="form-control" name="corporate_name" type="text" placeholder="Business name" value="{{old('next_of_kin')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> RC No </label>
                                        <input class="form-control" name="rc_no" type="text" placeholder="Enter RC number" value="{{old('rc_no')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Business Registration Date </label>
                                        <input class="form-control" name="reg_date" type="date" value="{{old('reg_date')}}"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Account Name </label>
                                        <input class="form-control" name="account_name" type="text" placeholder="Enter Account Name" value="{{old('account_name')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Account Number </label>
                                        <input class="form-control" name="account_number" type="text" placeholder="Enter Account Number" value="{{old('account_number')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Account Type </label>
                                        <input class="form-control" name="account_type" type="text" placeholder="Enter Account Type" value="{{old('account_type')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control" name="farmer_category" v-model="selected">
                                                <option disabled value="">Please select one</option>
                                                <option value="producer">Producer</option>
                                                <option value="processor">Processor</option>
                                                <option value="manufacturer">Manufacturer</option>
                                                <option value="input">Input Processing</option>
                                                <option value="transportation">Transportation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="selected == 'producer'">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Farm Size </label>
                                                <input class="form-control" name="farm_size" type="text" placeholder="Your Farm size in hectares" value="{{old('farm_size')}}"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Ownership </label> <br/>
                                                    <input type="radio" name="ownership" value="Personal">Personal <br/>
                                                    <input type="radio" name="ownership" value="Rented">Rented/Leased
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label"> Land Registered </label> <br/>
                                                    <input type="radio" name="land_reg" value="Y">Yes <br/>
                                                    <input type="radio" name="land_reg" value="N">No
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Registration Date </label>
                                                <input class="form-control" name="land_reg_date" type="date" value="{{old('land_reg_date')}}"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Registration Number </label>
                                                <input class="form-control" name="land_reg_num" type="text" placeholder="Land Registration Number" value="{{old('land_reg_num')}}"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label"> Registration Authority </label>
                                                <input class="form-control" name="reg_authority" type="text" placeholder="Your Registration Authority" value="{{old('reg_authority')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Crop Packages</label> <br/>
                                                <input type="checkbox" name="crop_packages[]" value="Ginger"> Ginger Package <br/>
                                                <input type="checkbox" name="crop_packages[]" value="Cassava"> Cassava Package <br/>
                                                <input type="checkbox" name="crop_packages[]" value="Sesame"> Sesame Seed Package <br/>
                                                <input type="checkbox" name="crop_packages[]" value="Acha"> Acha Package <br/>
                                                <input type="checkbox" name="crop_packages[]" value="Finger Millet"> Finger Millet (Tamba) Package <br/>
                                                <input type="checkbox" name="crop_packages[]" value="Vegetables"> Irrigated and Rain fed Vegetables Package <br/>
                                                <input type="checkbox" name="crop_packages[]" value="Oil Palm"> Oil Palm Package <br/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Non-Crop Packages</label> <br/>
                                                <input type="checkbox" name="non_crop_packages[]" value="Bee Honey"> Bee Honey Package <br/>
                                                <input type="checkbox" name="non_crop_packages[]" value="Goat and Sheep"> Goat and Sheep Package <br/>
                                                <input type="checkbox" name="non_crop_packages[]" value="Piggery"> Piggery Package <br/>
                                                <input type="checkbox" name="non_crop_packages[]" value="Cow Fattening"> Cow Fattening Package <br/>
                                                <input type="checkbox" name="non_crop_packages[]" value="Poultry"> Poultry Package <br/>
                                                <input type="checkbox" name="non_crop_packages[]" value="Snail"> Snail Package <br/>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div v-if="selected == 'processor'">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label"> Factory Location</label>
                                            <textarea name="factory_location" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> Types of Products</label>
                                                <textarea name="product_type" class="form-control">Separate List with comma</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> Mode of Storage</label>
                                                <input type="text" name="mode_of_storage" class="form-control" placeholder="Mode of Storage" value="{{old('mode_of_storage')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="selected == 'manufacturer'">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"> Factory Location</label>
                                                <textarea name="factory_location" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"> Areas of Coverage</label>
                                                <textarea name="area_of_coverage" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> Mode of registration</label> <br/>
                                                <input type="checkbox" value="state" name="mode_of_registration"> State <br/>
                                                <input type="checkbox" value="cac" name="mode_of_registration"> C.A.C 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> Mode of Storage</label>
                                                <input type="text" name="mode_of_storage" class="form-control" placeholder="Mode of Storage" value="{{old('mode_of_storage')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="selected == 'input'">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="control-label"> Factory Location</label>
                                                <textarea name="factory_location" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> Mode of registration</label> <br/>
                                                <input type="checkbox" value="cooperative" name="mode_of_registration"> Cooperative <br/>
                                                <input type="checkbox" value="cac" name="mode_of_registration"> C.A.C 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> Mode of Storage</label>
                                                <input type="text" name="mode_of_storage" class="form-control" placeholder="Mode of Storage" value="{{old('mode_of_storage')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"> Types of Inputs</label>
                                                <textarea name="input_types" class="form-control"></textarea>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div v-if="selected == 'transportation'">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> Mode of Transportation</label>
                                                <input type="text" name="mode_of_transporation" class="form-control" placeholder="Mode of Transportation" value="{{old('mode_of_transporation')}}"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> Equipment/Machinery in use</label>
                                                <input type="text" name="equipment" class="form-control" placeholder="Equipment/Machinery in use" value="{{old('equipment')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"> Areas of Operation</label>
                                                <textarea name="area_of_operation" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><hr/>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Organisation</label>
                                        <input class="form-control" name="organisation" type="text" placeholder="Organisation" value="{{old('organisation')}}"/>
                                    </div>
                                </div>
                                 
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Photo</label>
                                    <input type="file" name="farmer_photo" accept="image/*" value="{{old('farmer_photo')}}">
                                </div>
                                <div class="col-md-4">
                                    <label>ID Presented</label>
                                    <input type="file" name="identity_presented" accept="image/*" value="{{old('identity_presented')}}">
                                </div>
                                <div class="col-md-4">
                                    <label>ID Number</label>
                                    <input type="text" name="id_number" value="{{old('id_number')}}">
                                </div>
                            </div> <hr/>
                            Cooperative Information where applicable
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Name of Registered Cooperative</label>
                                        <input type="text" name="cooperative_name" placeholder="Name of Cooperative" class="form-control" value="{{old('cooperative_name')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Status in cooperative</label>
                                        <input type="text" name="status" placeholder="Status in Cooperative" class="form-control" value="{{old('staus')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Registration Number of the Cooperative Society </label>
                                        <input type="text" name="coop_reg_number" placeholder="Registration Number of the Cooperative Society" class="form-control" value="{{old('coop_reg_number')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Date of Registration of in Cooperative</label>
                                        <input type="date" name="cooperative_reg_date" class="form-control" value="{{old('cooperative_reg_date')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Registration  Agency/Authority</label>
                                        <input type="text" name="agency" placeholder=" Registration  Agency/Authority" class="form-control" value="{{old('agency')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Contact Person in the cooperative </label>
                                        <input type="text" name="contact_person" placeholder="Contact Person in the cooperative" class="form-control" value="{{old('contact_person')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Contact Person Phone Number </label>
                                        <input type="text" name="contact_number" placeholder="Contact Person Phone Number" class="form-control" value="{{old('contact_number')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Address of Cooperative Society</label>
                                    <textarea name="cooperative_address" class="form-control"></textarea>
                                </div>
                            </div>
                            <!--<div class="row">
                                 <div class="col-md-6" id="my_camera" style="width:320px; height:240px;"></div>
                                 <div class="col-md-6" id="my_result"></div>
                                 <input type="hidden" name="farmer_pix" id="farmer_pix" value="" accept="image/*" capture="camera"/>
                            </div>
                            <hr/>
                            <a class="btn pull-right" href="javascript:void(take_snapshot())">Take Snapshot</a>-->
                            <input type="hidden" name="_token" id="_token" value="{{{ csrf_token() }}}" />
                            
                        </div>
                        <br/><br/>

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