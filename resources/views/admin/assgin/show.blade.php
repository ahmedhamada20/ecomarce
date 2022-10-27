<!-- Modal -->
<div class="modal fade" id="show{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تفاصيل الطلب</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <label>كود الطلب</label>
                                        <input type="text" value="{{ $row->order->code }}" readonly
                                            class="form-control">
                                    </div>


                                    <div class="col">
                                        <label>اسم المنتج</label>
                                        @foreach ($row->order->orders as $product)
                                        <input type="text" value="{{ $product->name }}" readonly
                                        class="form-control">
                                        @endforeach
                                        
                                    </div>

                                  
                                </div>

                                <br>

                                <div class="row">

                                    <div class="col">
                                        <label>اسم صاحب الطلب</label>
                                        <input type="text" value="{{ $row->order->user->name }}" readonly
                                            class="form-control">
                                    </div>

                                    <div class="col">
                                        <label>البريد الالكتروني</label>
                                        <input type="text" value="{{ $row->order->user->email }}" readonly
                                            class="form-control">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            </div>
        </div>
    </div>
</div>