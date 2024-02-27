
    <div class="modal fade" id="editpayment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Job Category</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               

                <form action="{{route('category.update')}}" method="POST" id="editForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                            
                                <label>Category Name<span class="manitory">*</span></label>
                                <input type="text" id="category_name" name="category_name" value="" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-submit">Update</button>
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                </div>
                </form>

            </div>
        </div>
    </div>