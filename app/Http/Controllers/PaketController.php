<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class PaketController extends Controller
{
    public function indexNgetravel()
    {
        $pakets = DB::table('pakets')->get();
        return view('welcome.welcome-paket', compact('pakets'));
    }
    
    public function index()
    {
        $pakets = DB::table('pakets')->get();
        return view('paket.paket', compact('pakets'));
    }

    public function create()
    {
        return view('paket.paket-entry');
    }

    public function store(Request $request)
    {
        $namaPaket = $request->input('namaPaket');
        $destinasi = $request->input('destinasi');
        $lokasi = $request->input('lokasi');
        $harga = $request->input('harga');

        if (empty($namaPaket) || empty($destinasi) || empty($lokasi) || empty($harga)) {
            return redirect('paket/create')->with('error', 'Pastikan Anda Mengisi Semua Data');
        }

        DB::table('pakets')->insert([
            'namaPaket' => $namaPaket,
            'destinasi' => $destinasi,
            'lokasi' => $lokasi,
            'harga' => $harga,
        ]);

        return redirect('paket')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id_paket)
    {
        $paket = DB::table('pakets')->where('id_paket', $id_paket)->first();

        if (!$paket) {
            return redirect('paket')->with('error', 'Data Tidak Ditemukan');
        }

        return view('paket.edit', compact('paket'));
    }

    public function update(Request $request, $id_paket)
    {
        $namaPaket = $request->input('namaPaket');
        $destinasi = $request->input('destinasi');
        $lokasi = $request->input('lokasi');
        $harga = $request->input('harga');

        if (empty($namaPaket) || empty($destinasi) || empty($lokasi) || empty($harga)) {
            return redirect("paket/$id_paket/edit")->with('error', 'Pastikan Anda Mengisi Semua Data');
        }

        DB::table('pakets')->where('id_paket', $id_paket)->update([
            'namaPaket' => $namaPaket,
            'destinasi' => $destinasi,
            'lokasi' => $lokasi,
            'harga' => $harga,
        ]);

        return redirect('paket')->with('success', 'Data Berhasil Diubah');
    }

    public function confirmDelete($id_paket)
    {
        $paket = DB::table('pakets')->where('id_paket', $id_paket)->first();
        
        if (!$paket) {
            return redirect('paket')->with('error', 'Data Tidak Ditemukan');
        }

        return view('paket.paket-hapus', compact('paket'));
    }

    public function destroy($id_paket)
    {
        $deleted = DB::table('pakets')->where('id_paket', $id_paket)->delete();

        if ($deleted) {
            return redirect('paket')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect('paket')->with('error', 'Gagal Menghapus Data');
        }
    }

    public function cetak()
    {
        $pakets = DB::table('pakets')->get();
        return view('paket.paket-cetak', compact('pakets'));
    }

    public function pdf()
    {
    $pakets = DB::table('pakets')->get();
    $pdf = PDF::loadView('paket.paket-cetak', compact('pakets'));
    return $pdf->download('paket-data.pdf');
    }

}