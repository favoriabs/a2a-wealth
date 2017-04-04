@extends('layouts.main')

@section('navbar')
    @include('company.navbar')
@stop

@section('script')

@stop

@section('content')
    
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    {{Form::open(array('route' => 'save_registered_company', 'method' => 'POST', 'files' => 'true'))}}    
                        <div class="header text-center">Company Registration</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Company Contact </label>
                                        <input class="form-control" name="contact_name" type="text" placeholder="Company Contact Name" value="{{old('contact_name')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Designation </label>
                                        <input class="form-control" name="contact_designation" type="text" placeholder="Company Contact Designation" value="{{old('contact_designation')}}"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Mode of Identification </label>
                                        <input class="form-control" name="contact_mode_of_id" type="text" placeholder="Mode of Identification" value="{{old('contact_mode_of_id')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">ID Number </label> 
                                        <input class="form-control" name="contact_id_no" type="text" placeholder="ID Number" value="{{old('contact_id_no')}}"/>    
                                    </div>
                                </div>
                            </div> <hr/>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Name Of Company </label>
                                        <input class="form-control" name="company_name" type="text" placeholder="Company NAme" value="{{old('company_name')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Date Of Incorporation </label>
                                        <input class="form-control" name="date_of_incoporation" type="date"  value="{{old('date_of_incoporation')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> RC No </label>
                                        <input class="form-control" name="rc_no" type="text" placeholder="Enter your RC number" value="{{old('rc_no')}}"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Tax ID  </label>
                                        <input class="form-control" name="tax_id_no" type="text" placeholder="Tax ID Number" value="{{old('tax_id_no')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Email </label>
                                        <input class="form-control" name="email" type="text" placeholder="Email" value="{{old('email')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Phone Number </label>
                                        <input class="form-control" name="phone_number" type="text" value="{{old('phone_number')}}"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Office Address</label><br/>
                                    <textarea name="office_address" rows="3" cols="80" value="{{old('office_address')}}"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Factory Address</label><br/>
                                    <textarea name="factory_address" rows="3" cols="80" value="{{old('factory_address')}}"></textarea>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Previous Business Engaged In & Time Period </label>
                                    <textarea name="business_history" rows="3" cols="80" value="{{old('business_history')}}"></textarea>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Date Of Commencement Of Business </label>
                                        <input class="form-control" name="date_business_commenced" type="date" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Current Business </label>
                                        <input class="form-control" name="current_business" type="text" placeholder="Current Business" value="{{old('current_business')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Date Commenced </label>
                                        <input class="form-control" name="date_commenced" type="date" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Present Authorized Share Capital </label>
                                        <input class="form-control" name="present_authorized_share_capital" type="text" placeholder="Present Authorized Share Capital" value="{{old('present_authorized_share_capital')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Present Paid up Share Capital </label>
                                        <input class="form-control" name="present_paidup_share_capital" type="text" placeholder="Present Paid up Share Capital" value="{{old('present_paidup_share_capital')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Membership Of Organised Private Sector </label> <br/>
                                        <input class="form-control" name="private_sector_membership" type="text" placeholder="Membership Of Organised Private Sector" value="{{old('private_sector_membership')}}"/>    
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            Company's Historical Performance(Last 3 years)
                            <br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Turn Over(Year 1) </label>
                                        <input class="form-control" name="yr1_turn_over" type="text" placeholder="Turn Over for year 1" value="{{old('yr1_turn_over')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Gross Profit (Year 1) </label>
                                        <input class="form-control" name="yr1_gross_profit" type="text" placeholder="Gross Profit" value="{{old('yr1_gross_profit')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Profit After Tax (Year 1)  </label>
                                        <input class="form-control" name="yr1_profit_after_tax" type="text" placeholder="Profit After Tax" value="{{old('yr1_profit_after_tax')}}"/>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Turn Over(Year 2) </label>
                                        <input class="form-control" name="yr2_turn_over" type="text" placeholder="Turn Over for year 2" value="{{old('yr2_turn_over')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Gross Profit (Year 2) </label>
                                        <input class="form-control" name="yr2_gross_profit" type="text" placeholder="Gross Profit" value="{{old('yr2_gross_profit')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Profit After Tax (Year 2)  </label>
                                        <input class="form-control" name="yr2_profit_after_tax" type="text" placeholder="Profit After Tax" value="{{old('yr2_profit_after_tax')}}"/>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Turn Over(Year 3) </label>
                                        <input class="form-control" name="yr3_turn_over" type="text" placeholder="Turn Over for year 3" value="{{old('yr3_turn_over')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Gross Profit (Year 3) </label>
                                        <input class="form-control" name="yr3_gross_profit" type="text" placeholder="Gross Profit" value="{{old('yr3_gross_profit')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> Profit After Tax (Year 3)  </label>
                                        <input class="form-control" name="yr3_profit_after_tax" type="text" placeholder="Profit After Tax" value="{{old('yr3_profit_after_tax')}}"/>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Account Name </label>
                                        <input class="form-control" name="account_name" type="text" placeholder="Account Name" value="{{old('account_name')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Account Number </label>
                                        <input class="form-control" name="account_number" type="text" placeholder="Account Number " value="{{old('account_number')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Account Type </label>
                                        <input class="form-control" name="account_type" type="text" placeholder="Account Type" value="{{old('account_type')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Sort Code </label>
                                        <input class="form-control" name="sort_code" type="text" placeholder="Sort Code" value="{{old('sort_code')}}"/>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Do you have a Business Plan</label> <br/>
                                        <input type="radio" name="business_plan" value="1"> Yes <br/>
                                        <input type="radio" name="business_plan" value="0"> No <br/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">When was it Prepared</label> <br/>
                                       <input type="text" name="date_prepared" class="form-control" value="{{old('date_prepared')}}"/>
                                    </div>
                                </div>
                            </div> <hr/>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Has it been used to mobilize funds?</label> <br/>
                                        <input type="radio" name="mobilization_of_funds" value="1"> Yes <br/>
                                        <input type="radio" name="mobilization_of_funds" value="0"> No 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Attached Copy of Business Plan</label>
                                    <input type="file" name="business_plan_path" accept="image/*" value="{{old('business_plan_path')}}">
                                </div> 
                            </div>
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