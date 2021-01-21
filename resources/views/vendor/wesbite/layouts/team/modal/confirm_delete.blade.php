@if (!empty($team))
<div class="modal fade" id="team-delete-{{$team->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Team</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ websiteDeleteRoute('team',$team->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <p>Are you sure you want to delete this team ?
                        <br>
                        <label>Name</label>
                        <br>
                        {{$team->name}}
                    </p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" title="Delete Post">Yes Delete it.</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endif