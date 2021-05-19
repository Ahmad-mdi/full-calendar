<div class="modal fade" id="modalCalendar" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-event" action="">
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Enter The Title:</label>
                        <div class="col-sm-8">
                            <input name="title" type="text" class="form-control" id="title">
                            <input name="id" type="text">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="start" class="col-sm-4 col-form-label">start date:</label>
                        <div class="col-sm-8">
                            <input name="start" type="text" class="form-control date-time" id="start">
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="end" class="col-sm-4 col-form-label">end date:</label>
                        <div class="col-sm-8">
                            <input name="end" type="text" class="form-control date-time" id="end">
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="color" class="col-sm-4 col-form-label">set color event:</label>
                        <div class="col-sm-8">
                            <input name="color" type="color" class="form-control" id="color">
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="description" class="col-sm-4 col-form-label">Set description:</label>
                        <div class="col-sm-8">
                            <textarea name="description" id="description" cols="40" rows="4"></textarea>
                        </div>
                    </div><br>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary saveEvent">Save</button>
                <button type="button" class="btn btn-danger deleteEvent">delete</button>
            </div>
        </div>
    </div>
</div>
