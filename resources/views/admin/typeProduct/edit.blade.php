<!-- Modal -->
<div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('typeProduct.update','test') }}" method="POST">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{ $row->id }}">

                    <div class="row">
                        <div class="col">
                            <label>name</label>
                            <input type="text" name="name" value="{{ $row->name }}" class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>Type</label>
                            <select class="form-control" name="type_product" >
                                <option value="seeds" {{ $row->type_product == "seeds" ? 'selected' : null }}>seeds</option>
                                <option value="g" {{ $row->type_product == "g" ? 'selected' : null }}>g</option>
                                <option value="kg" {{ $row->type_product == "kg" ? 'selected' : null }}>kg</option>
                                <option value="l" {{ $row->type_product == "l" ? 'selected' : null }}>l</option>
                                <option value="ml" {{ $row->type_product == "ml" ? 'selected' : null }}>ml</option>
                                <option value="m" {{ $row->type_product == "m" ? 'selected' : null }}>m</option>
                                <option value="cm" {{ $row->type_product == "cm" ? 'selected' : null }}>cm</option>
                                <option value="pcs" {{ $row->type_product == "pcs" ? 'selected' : null }}>pcs</option>
                                <option value="set" {{ $row->type_product == "set" ? 'selected' : null }}>set</option>
                                <option value="mlm" {{ $row->type_product == "mlm" ? 'selected' : null }}>ملمتر</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>Stock</label>
                            <select class="form-control" name="type" >
                                <option value="" disabled selected>-- Choose --</option>
                                <option value="in_stock" {{ $row->type ==  "in_stock" ? 'selected' : null }}>In Stock</option>
                                <option value="out_stock" {{ $row->type ==  "out_stock" ? 'selected' : null }}>Out Stock</option>
                            </select>
                        </div>


                        <div class="col">
                            <label>Qutinity</label>
                            <input type="number" name="count" value="{{ $row->count }}" class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>Price</label>
                            <input type="text" value="{{ $row->price }}" name="price" class="form-control">
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