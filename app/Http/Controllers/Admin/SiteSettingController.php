<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Setting::first();
        return view('admin.setting.index', compact('data'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
       $data = Setting::findorfail($request->id);
       $data->name = $request->name;
       $data->phone = $request->phone;
       $data->facebook = $request->facebook;
       $data->instagram = $request->instagram;
       $data->twitter = $request->twitter;
       $data->youtube = $request->youtube;
       $data->address = $request->address;
       $data->dicration = $request->dicration;
       $data->meat_tag = $request->meat_tag;
       $data->meat_dicration = $request->meat_dicration;
       $data->map_ifarme = $request->map_ifarme;
       $data->play_store = $request->play_store;
       $data->app_store = $request->app_store;

       $data->save();
        if ($file = $request->file('photo')) {
            File::delete(public_path('admin/pictures/setting'. $request->id . '/' . $request->oldfile));

            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('photo')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/pictures/setting' . '/' . $data->id, $file_to_store)) {
                Photo::UpdateOrcreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => 'App\Models\Setting',
                ],[
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => 'App\Models\Setting',
                ]);
            }
        }
        toastr()->success('تم التحديث بنجاح');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
