<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        return view('donasi');
    }

    public function store(Request $request)
    {
        // menangkap data dari atribut
        $nama = $request->donor_name;
        $nominal = $request->amount;
        $pesan = $request->message;

        return "terima kasih $nama ! kami telah menerima input donasi sebesar Rp" . number_format($nominal);
    }
}
