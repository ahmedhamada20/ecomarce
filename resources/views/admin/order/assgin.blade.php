<!-- Modal -->
<div class="modal fade" id="assgin{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">تعين الطلب</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('order_assgin') }}" method="POST">
            @csrf

            <input type="hidden" value="{{ $row->id }}" name="id">
            <div class="row">
                <div class="col">
                    <label>تعين الطلب</label>
                    <select class="form-control" name="user_id">
                        <option value="" disabled selected>-- اختر من القائمه --</option>
                       @foreach (App\Models\User::where('name','!=','admin')->where('is_admin',1)->get() as $user)
                           <option value="{{ $user->id }}">{{ $user->name }}</option>
                       @endforeach
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-primary">تعين المهام</button>
              </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>