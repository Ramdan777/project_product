<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Models\brand;
use App\Models\categorie;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $product = product::with(['product_category', 'product_brand'])
            ->where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('product_category', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(2);
        return view('admin.product.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brand = brand::select('id', 'name')->get();
        $categorie = categorie::select('id', 'name')->get();
        return view('admin.product.create', ['brand' => $brand, 'categorie' => $categorie]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        $newName = '';

        if($request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
            }

        $request['image'] = $newName;
        $product = product::create($request->all());

        if ($product) {
            Session::flash('status', 'success');
            Session::flash('message', 'SUCCESSFULLY ADDING PRODUCTS');
        }

        return redirect('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = product::with(['product_category', 'product_brand'])
            ->findOrFail($id);
        return view('admin.product.detail', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::with(['product_brand', 'product_category'])->findOrFail($id);
        $brand = brand::where('id', '!=', $product->brand_id)->get(['id', 'name']);
        $categorie = categorie::where('id', '!=', $product->category_id)->get(['id', 'name']);
        return view('admin.product.edit', ['product' => $product, 'brand' => $brand, 'categorie' => $categorie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = product::findOrFail($id);

        $product->update($request->all());

        if ($product) {
            Session::flash('status', 'success');
            Session::flash('message', 'SUCCESSFULLY UPDATE PRODUCT');
        }

        return redirect('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product::findOrFail($id);

        product::where('id', $id)->delete();

        if ($product) {
            Session::flash('status', 'success');
            Session::flash('message', 'SUCCESSFULLY REMOVING PRODUCT');
        }
        return redirect('admin.product.index');
    }
}
