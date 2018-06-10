        <div id="save_modal" class="modal fade hidden" role="dialog" tabindex='-1'>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Add New</h3>
                    </div>
                    <div class="modal-body">
                        <h3>Modal here</h3>
                        <form name="add_new" class="form-control" method="POST" action="/save">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" />
                            </div>
                            <div class="form-group">
                                <label for="name">Age:</label>
                                <input type="text" name="age" />
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                        <div class="display_errors">

                        </div>
                    </div>
                </div>
            </div>
        </div>