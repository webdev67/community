        <div id="update_modal" class="modal fade hidden" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Update Existing</h3>
                    </div>
                    <div class="modal-body">
                        <h3>Modal here</h3>
                        <form name="add_new" class="form-control" method="POST" action="/update">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" />
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="item" value="" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>