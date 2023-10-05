<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $category = categorie::where('name','LIKE','%'.$keyword.'%')
                            ->paginate(5);
        return view('admin.category.index', ['category' => $category]);
    }

    public function show($id)
    {
        $category = categorie::with('product_category')
                ->findOrFail($id);
        return view('admin.category.detail', ['category' => $category]);
    }

    public function create()
    {
        return view('admin.category.create');
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
        $category = categorie::create($request->all());

        if($category) {
            Session::flash('status','success');
            Session::flash('message','SUCCESSFULLY ADDING CATEGORY');
        }
        return redirect('admin.category.index');
    }

    public function edit(Request $request, $id)
    {
        $category = categorie::findOrFail($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $category = categorie::findOrFail($id);

        $category->update($request->all());

        if ($category) {
            Session::flash('status', 'success');
            Session::flash('message', 'SUCCESSFULLY UPDATE PRODUCT');
        }
        return redirect('admin.category.index');
    }

    public function destroy(string $id)
    {
        $category = categorie::findOrFail($id);

        categorie::where('id', $id)->delete();

        if ($category) {
            Session::flash('status', 'success');
            Session::flash('message', 'SUCCESSFULLY REMOVING CATEGORY');
        }
        return redirect('admin.category.index');
    }

}

