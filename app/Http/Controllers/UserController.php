<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\categorie;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $categorie = categorie::with(['product_category'])->get();
        return view('user.home', ['categorie' => $categorie]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = categorie::with('product_category')
            ->findOrFail($id);
        return view('user.index', ['categorie' => $categorie]);
    }

    public function show1(string $id)
    {
        $product = product::with(['product_category','product_brand'])
        ->findOrFail($id);
        return view('user.detail', ['product' => $product]);
    }

}
