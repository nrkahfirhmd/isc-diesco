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

    public function request($id)
    {
        $product = DB::table('product')->where('id_product', $id)->first();
        $vendor = DB::table('vendor')->where('id_vendor', $product->id_vendor)->first();

        return view('request', ['product' => $product, 'vendor' => $vendor]);
    }

    public function requestProcess(Request $request, $id)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $deskripsi = $request->input('deskripsi');
        $harga = $request->input('harga');
        $id_req = $this->getRandomID();

        $product = DB::table('product')->where('id_product', $id)->first();
        $cust = DB::table('username')->where('username', session('username'))->first();

        DB::table('request')->insert([
            'id_request' => $id_req,
            'id_product' => $id,
            'id_cust' => $cust->id,
            'nama' => $nama,
            'alamat' => $alamat,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'status' => '0'
        ]);

        return redirect('/home');
    }

    public function getRandomID()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $id = '';
        $length = 6;

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $id .= $characters[$index];
        }

        return $id;
    }
}
