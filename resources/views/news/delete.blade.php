<div class="row">
    <div class="modal fade m-medium" id="modal_delete_{{$news->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-delete-undertaking" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete News?</h4>
                </div>
                <div class="modal-body">
                    <p class="s-text">Remove {{$news->title}} from your list of news? </br><span class="p-text">This cannot be undone.</span></p>
                </div>
                <div class="modal-footer">
                    <a href="{{route('delete_news', $news->id)}}" class="btn btn-fill btn-danger pull-right">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>