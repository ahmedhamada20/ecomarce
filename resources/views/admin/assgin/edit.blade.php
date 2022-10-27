<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">تغير حاله الطلب</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('assgin_order_status') }}" method="POST">

            @csrf

            <input type="hidden" value="{{ $row->order->id }}" name="id">
            <div class="row">
                <div class="col">
                    <label>تفير الحاله الطلب</label>
                    <select class="form-control" name="status">
                      <option value="" disabled selected>-- اختر حاله الطلب --</option>
                      <option value="1" {{ $row->order->status == 1 ?'selected' : null }}>متكمل </option>
                        <option value="2" {{ $row->order->status == 2 ?'selected' : null }}>مرفوض  </option>
                        <option value="4" {{ $row->order->status == 4 ?'selected' : null }}>مرتجع  </option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-primary">تغير الحاله</button>
              </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>