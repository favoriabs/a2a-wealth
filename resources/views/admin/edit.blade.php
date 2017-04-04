<div class="row">
    <div class="modal fade m-medium" id="modal_edit_{{$cooperative[0]->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-edit-undertaking" data-backdrop="false">
        <div class="modal-dialog" role="document">
            {{Form::open(['route' => ['admin_update', $cooperative[0]->id], 'method' => 'POST', 'id' => 'showForm'])}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Cooperative?</h4>
                </div>
                <div class="modal-body">
                  <div class="row" > 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter first name..." name="first_name" value="{{$user->first_name}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter last name..." name="last_name" value="{{$user->last_name}}">
                        </div>
                    </div>
                  </div>
                   <div class="row" > 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" placeholder="Enter email..." name="email" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Enter phone number..." name="phone_number" value="{{$user->phone_number}}">
                        </div>
                    </div>
                  </div>
                  <div class="row" > 
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Role</label>
                        <select name="role" class="form-control">
                            <option selected="" disabled="">- role -</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->slug}}">{{$role->slug}}</option>
                                @endforeach
                        </select>
                    </div>
                    </div>
                  </div>
                  </div>
                
                <div class="modal-footer">
                    {{Form::submit('Save', ['class' => 'btn btn-info btn-fill pull-right', 'id' => 'submitBtn'])}}
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>