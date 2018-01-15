<div class="row">
    <div class="modal fade m-medium" id="modal_edit_{{$news->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-edit-undertaking" data-backdrop="false">
        <div class="modal-dialog" role="document">
            {{Form::open(['route' => ['update_news', $news->id], 'method' => 'POST'])}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit News?</h4>
                </div>
                <div class="modal-body">
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> Title</label>
                                <input class="form-control" name="title" type="text" placeholder="Enter Title" value="{{$news->title}}" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Content</label>
                        <textarea name="content" class="form-control" placeholder="News Content">{{$news->content}}</textarea>
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