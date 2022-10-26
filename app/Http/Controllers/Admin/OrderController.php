<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssginOrder;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:سليدر الطلبات', ['only' => ['index']]);
        $this->middleware('permission:تعديل الطلبات', ['only' => ['edit', 'update']]);
    }
    public function index()
    {

        $data = Order::all();
        return view('admin.order.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::findorfail($request->id);
        $order->update([
            'status' => $request->status,
        ]);

        toastr()->success('تم تغير الحاله بنجاح');
        return redirect('order');
    }


    public function assgin(Request $request)
    {
        $assgin = AssginOrder::updateOrcreate([
            'order_id' => $request->id,
        ], [
            'order_id' => $request->id,
            'user_id' => $request->user_id,
        ]);

        toastr()->success('تم تعين الطلب بنجاح');
        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
