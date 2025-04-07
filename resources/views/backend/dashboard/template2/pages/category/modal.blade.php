<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Manage Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="categoryForm">
                    @csrf
                    <input type="hidden" id="category_id">
                    
                    <div class="form-group">
                        <label for="key">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    
                    
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
