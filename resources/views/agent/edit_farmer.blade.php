<div class="row">
    <div class="modal fade m-medium" id="modal_edit_{{$farmer->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-edit-undertaking" data-backdrop="false">
        <div class="modal-dialog" role="document">
            {{Form::open(['route' => ['edit_farmer_agent', $farmer->id], 'method' => 'PUT', 'id' => 'showForm'])}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Farmer?</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">First Name </label>
                                <input class="form-control" name="first_name" type="text" value="{{$farmer->first_name}}" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Last Name </label>
                                <input class="form-control" name="last_name" type="text" value="{{$farmer->last_name}}" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">User Name </label>
                                <input class="form-control" name="user_name" type="text" value="{{$farmer->user_name}}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Phone Number </label>
                                <input class="form-control" name="phone_number" type="text" value="{{$farmer->phone_number}}" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Email Address </label>
                        <input class="form-control" name="email" type="email" placeholder="Enter Email Address" value="{{$farmer->email}}" required />
                    </div>

                    <input type="hidden" name="_token" id="_token" value="{{{ csrf_token() }}}" /> 
                 </div>
                
                <div class="modal-footer">
                    {{Form::submit('Save', ['class' => 'btn btn-info btn-fill pull-right', 'id' => 'submitBtn'])}}
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>