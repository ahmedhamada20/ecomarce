<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.product.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }


    public function getsubcategory($id)
    {
        return SubCategory::where('category_id', $id)->pluck('name', 'id');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if ($request->page_id == 3){
            // Insert Many Photos
            if ($request->hasfile('FilenameMany')) {
                foreach ($request->file('FilenameMany') as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('admin/pictures/product' . '/' . $request->id_photos, $file->getClientOriginalName());

                    Photo::create([
                        'Filename' => $name,
                        'photoable_id' => $request->id_photos,
                        'photoable_type' => 'App\Models\Product',

                    ]);
                }
            }

            toastr()->success('تم الحفظ بنجاح');
            return redirect()->back();
        }
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'days' => 'required',
            'life_cycle' => 'required',
            'disease' => 'required',
            'hybrid' => 'required',
        ], [
            'name.required' => 'هذا الحقل مطلوب',
            'price.required' => 'هذا الحقل مطلوب',
            'quantity.required' => 'هذا الحقل مطلوب',
            'category_id.required' => 'هذا الحقل مطلوب',
            'sub_category_id.required' => 'هذا الحقل مطلوب',
            'days.required' => 'هذا الحقل مطلوب',
            'life_cycle.required' => 'هذا الحقل مطلوب',
            'disease.required' => 'هذا الحقل مطلوب',
            'hybrid.required' => 'هذا الحقل مطلوب',
        ]);

        $data = Product::create([
            'name' => $request->name,
            'notes' => $request->notes,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'days' => $request->days,
            'life_cycle' => $request->life_cycle,
            'disease' => $request->disease,
            'hybrid' => $request->hybrid,
            'section_one' => $request->section_one,
            'section_two' => $request->section_two,
            'section_there' => $request->section_there,
            
        ]);

        if ($file = $request->file('photo')) {
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('photo')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/pictures/product' . '/' . $data->id, $file_to_store)) {
                Photo::create([
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => 'App\Models\Product',
                ]);
            }
        }

        // Insert Many Photos
        if ($request->hasfile('FilenameMany')) {
            foreach ($request->file('FilenameMany') as $file) {
                $name = $file->getClientOriginalName();
                $file->move('admin/pictures/product' . '/' . $data->id, $file->getClientOriginalName());

                Photo::create([
                    'Filename' => $name,
                    'photoable_id' => $data->id,
                    'photoable_type' => 'App\Models\Product',

                ]);
            }
        }

        toastr()->success('تم الحفظ بنجاح');
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::findorfail($id);
        return view('admin.product.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::findorfail($id);
        return view('admin.product.edit', ['data' => $data]);
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
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'days' => 'required',
            'life_cycle' => 'required',
            'disease' => 'required',
            'hybrid' => 'required',
        ], [
            'name.required' => 'هذا الحقل مطلوب',
            'price.required' => 'هذا الحقل مطلوب',
            'quantity.required' => 'هذا الحقل مطلوب',
            'category_id.required' => 'هذا الحقل مطلوب',
            'sub_category_id.required' => 'هذا الحقل مطلوب',
            'days.required' => 'هذا الحقل مطلوب',
            'life_cycle.required' => 'هذا الحقل مطلوب',
            'disease.required' => 'هذا الحقل مطلوب',
            'hybrid.required' => 'هذا الحقل مطلوب',
        ]);

        $data = Product::findorfail($request->id);
        $data->update([
            'name' => $request->name,
            'notes' => $request->notes,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'days' => $request->days,
            'life_cycle' => $request->life_cycle,
            'disease' => $request->disease,
            'hybrid' => $request->hybrid,
            'section_one' => $request->section_one,
            'section_two' => $request->section_two,
            'section_there' => $request->section_there,
            
        ]);

        if ($file = $request->file('photo')) {
            File::delete(public_path('admin/pictures/product'. $request->id . '/' . $request->oldfile));

            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('photo')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/pictures/product' . '/' . $data->id, $file_to_store)) {
                Photo::create([
                    'Filename' => $file_to_store,
                    'photoable_id' => $request->id,
                    'photoable_type' => 'App\Models\Product',
                ]);
            }
        }
        toastr()->success('تم التعديل بنجاح');
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        if ($request->page_id == 3){
            File::delete(public_path('admin/pictures/product/'. $request->id . '/' . $request->oldfile));
            Photo::where('id', $request->id_photos)->where('photoable_type', "App\Models\Product")->delete();
            toastr()->success('تم الحذف بنجاح');
            return redirect()->back();
        }else{
            Product::destroy($request->id);
            Photo::where('photoable_type','App\Models\Product')->whereIn('photoable_id',[$request->id])->delete();
            toastr()->success('تم الحذف بنجاح');
            return redirect('product');
        }


    }
}
