<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    

    function __construct()
    {
         $this->middleware('permission:سليدر الخصومات', ['only' => ['index']]);
         $this->middleware('permission:اضافه خصومات', ['only' => ['create','store']]);
         $this->middleware('permission:تعديل خصومات', ['only' => ['edit','update']]);
         $this->middleware('permission:حذف خصومات', ['only' => ['destroy']]);
    }

    public  function generateRandomString($length = 6) {
        $characters = 'ABCDEFGHIZL0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function index()
    {
        $data = Coupon::all();
        return view('admin.coupon.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->generateRandomString();
        return view('admin.coupon.create',['data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'coupon_type' => 'required',
            'coupon_percent' => 'required',
          
        ],[
            'code.required' => 'هذا الحقل مطلوب',
            'start_date.required' => 'هذا الحقل مطلوب',
            'end_date.required' => 'هذا الحقل مطلوب',
            'coupon_type.required' => 'هذا الحقل مطلوب',
            'coupon_percent.required' => 'هذا الحقل مطلوب',
          
        ]);

        $data = Coupon::create([
            'code' => $request->code,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'coupon_type' => $request->coupon_type,
            'coupon_percent' => $request->coupon_percent,
        ]);
    
        toastr()->success('تم الحفظ بنجاح');
        return redirect('coupon');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Coupon::findorfail($id);
        return  view('admin.coupon.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'coupon_type' => 'required',
            'coupon_percent' => 'required',
          
        ],[
            'code.required' => 'هذا الحقل مطلوب',
            'start_date.required' => 'هذا الحقل مطلوب',
            'end_date.required' => 'هذا الحقل مطلوب',
            'coupon_type.required' => 'هذا الحقل مطلوب',
            'coupon_percent.required' => 'هذا الحقل مطلوب',
          
        ]);

        $data = Coupon::findorfail($request->id);
        $data->update([
            'code' => $request->code,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'coupon_type' => $request->coupon_type,
            'coupon_percent' => $request->coupon_percent,
        ]);

       
        toastr()->success('تم التعديل بنجاح');
        return redirect('coupon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Coupon::destroy($request->id);
        toastr()->success('تم الحذف بنجاح');
        return redirect('coupon');
    }
}
