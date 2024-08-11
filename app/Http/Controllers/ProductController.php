<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('product as p')
            ->join('vendor as v', 'p.id_vendor', '=', 'v.id_vendor')
            ->join('category as c', 'p.kategori', '=', 'c.id_category')
            ->select('p.*', 'v.rating', 'c.category')
            ->get();

        return view('home', ['products' => $products]);
    }

    public function detail($id)
    {
        $product = DB::table('product as p')
            ->join('category as c', 'p.kategori', '=', 'c.id_category')
            ->select('p.*', 'c.category')
            ->where('id_product', $id)->first();
        $vendor = DB::table('vendor')->where('id_vendor', $product->id_vendor)->first();
        $vendorProducts = DB::table('product as p')
            ->join('vendor as v', 'p.id_vendor', '=', 'v.id_vendor')
            ->join('category as c', 'p.kategori', '=', 'c.id_category')
            ->select('p.*', 'v.rating', 'c.category')
            ->where('p.id_vendor', $product->id_vendor)->get();
        $products = DB::table('product as p')
            ->join('vendor as v', 'p.id_vendor', '=', 'v.id_vendor')
            ->join('category as c', 'p.kategori', '=', 'c.id_category')
            ->select('p.*', 'v.rating', 'c.category')
            ->where('p.id_vendor', '!=', $vendor->id_vendor)->get();

        return view('detail', ['product' => $product, 'vendor' => $vendor, 'vendorProducts' => $vendorProducts, 'products' => $products]);
    }

    public function request($id)
    {
        if (!session('username')) {
            return redirect('/login')->with('error', 'Silahkan login terlebih dahulu');
        }

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

        return redirect('/home')->with('success', 'Pengajuan request berhasil dikirim');
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

    public function ask($id) {
        if (!session('username')) {
            return redirect('/login')->with('error', 'Silahkan login terlebih dahulu');
        }
        
        $product = DB::table('product')->where('id_product', $id)->first();
        $vendor = DB::table('vendor')->where('id_vendor', $product->id_vendor)->first();

        return view('ask', ['product' => $product, 'vendor' => $vendor]);
    }

    public function askProcess(Request $request, $id) {
        $pertanyaan = $request->input('question');
        $id_ask = $this->getRandomID();

        $product = DB::table('product')->where('id_product', $id)->first();
        $vendor = DB::table('vendor')->where('id_vendor', $product->id_vendor)->first();
        $users = DB::table('username')->where('username', session('username'))->first();
        $cust = DB::table('customer')->where('id_cust', $users->id)->first();

        DB::table('question')->insert([
            'id_question' => $id_ask,
            'id_cust' => $cust->id_cust,
            'id_product' => $id,
            'id_vendor' => $vendor->id_vendor,
            'question' => $pertanyaan,
            'reply' => 'TBA'
        ]);

        return redirect('/detail/'.$id)->with('success', 'Pertanyaan berhasil dikirim');
    }
}
