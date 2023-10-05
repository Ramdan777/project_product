<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $brand = brand::where('name','LIKE','%'.$keyword.'%')
                            ->paginate(5);
        return view('admin.brand.index', ['brand' => $brand]);
    }

    public function show($id)
    {
        $brand = brand::with('product_brand')
                ->findOrFail($id);
        return view('admin.brand.detail', ['brand' => $brand]);
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        $newName = '';

        if($request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
            }

        $request['image'] = $newName;
        $brand = brand::create($request->all());

        if($brand) {
            Session::flash('status','success');
            Session::flash('message','SUCCESSFULLY ADDING BRAND');
        }
        return redirect('admin.brand.index');
    }

    public function edit(Request $request, $id)
    {
        $brand = brand::findOrFail($id);
        return view('admin.brand.edit', ['brand' => $brand]);
    }

    public function update(Request $request, $id)
    {
        $brand = brand::findOrFail($id);

        $brand->update($request->all());

        if ($brand) {
            Session::flash('status', 'success');
            Session::flash('message', 'SUCCESSFULLY UPDATE BRAND');
        }
        return redirect('admin.brand.index');
    }

    public function destroy(string $id)
    {
        $brand = brand::findOrFail($id);

        brand::where('id', $id)->delete();

        if ($brand) {
            Session::flash('status', 'success');
            Session::flash('message', 'SUCCESSFULLY REMOVING BRAND');
        }
        return redirect('admin.brand.index');
    }

}


