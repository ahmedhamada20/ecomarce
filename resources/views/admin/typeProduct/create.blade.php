<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('typeProduct.store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="product_id" value="{{ $data->id }}">

                    <div class="row">
                        <div class="col">
                            <label>name</label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>Stock</label>
                            <select class="form-control" name="type" required>
                                <option value="" disabled selected>-- Choose --</option>
                                <option value="in_stock">In Stock</option>
                                <option value="out_stock">Out Stock</option>
                            </select>
                        </div>


                        <div class="col">
                            <label>Qutinity</label>
                            <input type="number" name="count" required class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>Price</label>
                            <input type="text" required name="price" class="form-control">
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>