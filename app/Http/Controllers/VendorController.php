<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    public function index()
    {
        $user = DB::table('username')->where('username', session('username'))->first();
        $vendor = DB::table('vendor')->where('vendor.id_vendor', $user->id)->first();
        $questions = DB::table('question')
            ->select('question.*', 'customer.*')
            ->join('customer', 'question.id_cust', '=', 'customer.id_cust')
            ->where('question.id_vendor', $user->id)->get();
        $requests = DB::table('request')
            ->select('request.*', 'customer.*', 'product.nama as namaProd')
            ->join('product', 'request.id_product', '=', 'product.id_product')
            ->join('customer', 'request.id_cust', '=', 'customer.id_cust')
            ->join('vendor', 'product.id_vendor', '=', 'vendor.id_vendor')
            ->where('product.id_vendor', $user->id)->get();

        return view('vendor', ['vendor' => $vendor, 'questions' => $questions, 'requests' => $requests]);
    }

    public function accept($id)
    {
        DB::table('request')->where('id_request', $id)->update([
            'status' => 1
        ]);

        return redirect('/vendor')->with('success', 'Permintaan diterima');
    }

    public function reject($id)
    {
        DB::table('request')->where('id_request', $id)->update([
            'status' => 3
        ]);

        return redirect('/vendor')->with('success', 'Permintaan ditolak');
    }

    public function complete($id)
    {
        DB::table('request')->where('id_request', $id)->update([
            'status' => 2
        ]);

        return redirect('/vendor')->with('success', 'Permintaan selesai');
    }
}
