<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Silder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SilderController extends Controller
{
    

    function __construct()
    {
         $this->middleware('permission:سليدر سليدر', ['only' => ['index']]);
         $this->middleware('permission:اضافه سليدر', ['only' => ['create','store']]);
         $this->middleware('permission:تعديل سليدر', ['only' => ['edit','update']]);
         $this->middleware('permission:حذف سليدر', ['only' => ['destroy']]);
    }


    public function index()
    {
        $data = Silder::all();
        return view('admin.silder.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.silder.create');
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
            'name' => 'required',
            'photo' => 'required|image',
        ],[
            'name.required' => 'هذا الحقل مطلوب',
            'photo.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب ان يكون صوره',
        ]);

        $data = Silder::create([
            'name' => $request->name,
            'notes' => $request->notes,
        ]);
        if ($file = $request->file('photo')) {
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('photo')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/pictures/silder' . '/' . $data->id, $file_to_store)) {
                Photo::UpdateOrcreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => 'App\Models\Silder',
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => 'App\Models\Silder',
                ]);
            }
        }
        toastr()->success('تم الحفظ بنجاح');
        return redirect('silder');
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
        $data = Silder::findorfail($id);
        return  view('admin.silder.edit',['data'=>$data]);
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
            'name' => 'required',
            'photo' => 'image',
        ],[
            'name.required' => 'هذا الحقل مطلوب',
            'photo.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب ان يكون صوره',
        ]);

        $data = Silder::findorfail($request->id);
        $data->update([
            'name' => $request->name,
            'notes' => $request->notes,
        ]);

        if ($file = $request->file('photo')) {
            File::delete(public_path('admin/pictures/silder'.'/' . $request->id . '/' . $request->oldfile));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('photo')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/pictures/silder' . '/' . $data->id, $file_to_store)) {
                Photo::UpdateOrcreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => 'App\Models\Silder',
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => 'App\Models\Silder',
                ]);
            }
        }
        toastr()->success('تم التعديل بنجاح');
        return redirect('silder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Silder::destroy($request->id);
        toastr()->success('تم الحذف بنجاح');
        return redirect('silder');
    }
}
