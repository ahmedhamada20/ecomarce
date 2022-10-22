<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubCategory::all();
        return view('admin.subcategory.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategory.create');
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
            'category_id' => 'required',
            'photo' => 'required|image',
        ],[
            'name.required' => 'هذا الحقل مطلوب',
            'category_id.required' => 'هذا الحقل مطلوب',
            'photo.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب ان يكون صوره',
        ]);

        $data = SubCategory::create([
            'name' => $request->name,
            'notes' => $request->notes,
            'category_id' => $request->category_id,

        ]);
        if ($file = $request->file('photo')) {
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('photo')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/pictures/subcategory' . '/' . $data->id, $file_to_store)) {
                Photo::UpdateOrcreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => 'App\Models\SubCategory',
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => 'App\Models\SubCategory',
                ]);
            }
        }
        toastr()->success('تم الحفظ بنجاح');
        return redirect('subcategory');
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
        $data = SubCategory::findorfail($id);
        return  view('admin.subcategory.edit',['data'=>$data]);
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
            'category_id' => 'required',
            'photo' => 'required|image',
        ],[
            'name.category_id' => 'هذا الحقل مطلوب',
            'name.required' => 'هذا الحقل مطلوب',
            'photo.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب ان يكون صوره',
        ]);

        $data = SubCategory::findorfail($request->id);
        $data->update([
            'name' => $request->name,
            'notes' => $request->notes,
            'category_id' => $request->category_id,
        ]);

        if ($file = $request->file('photo')) {
            File::delete(public_path('admin/pictures/subcategory'.'/' . $request->id . '/' . $request->oldfile));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('photo')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/pictures/subcategory' . '/' . $data->id, $file_to_store)) {
                Photo::UpdateOrcreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => 'App\Models\SubCategory',
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => 'App\Models\SubCategory',
                ]);
            }
        }
        toastr()->success('تم التعديل بنجاح');
        return redirect('subcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        SubCategory::destroy($request->id);
        toastr()->success('تم الحذف بنجاح');
        return redirect('subcategory');
    }
}
