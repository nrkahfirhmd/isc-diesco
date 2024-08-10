<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('product')->get();

        return view('home', ['products' => $products]);
    }

    public function detail($id)
    {
        $product = DB::table('product')->where('id_product', $id)->first();
        $vendor = DB::table('vendor')->where('id_vendor', $product->id_vendor)->first();
        $vendorProducts = DB::table('product')->where('id_vendor', $product->id_vendor)->get();
        $products = DB::table('product')->where('id_vendor', '!=', $vendor->id_vendor)->get();

        return view('detail', ['product' => $product, 'vendor' => $vendor, 'vendorProducts' => $vendorProducts, 'products' => $products]);
    }
}
