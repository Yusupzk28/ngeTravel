<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class DestinasiController extends Controller{
    public function indexNgetravel()
    {
        $destinasi = Destinasi::all();
        return view('welcome.welcome-destinasi', compact('destinasi'));
    }
    public function index(){
        $destinasi = Destinasi::all();
        return view('destinasi.destinasi', compact('destinasi'));
    }
    public function create(){
        return view('destinasi.destinasi-entry');
    }

    public function store(Request $request){
        $request->validate([
            'destinasi' => 'required|file|mimes:png,jpg,jpeg|max:2048',
            'namaDestinasi' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
        ]);
        $gambar = $request->file('destinasi');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_destinasi';
        $gambar->move($tujuan_upload, $nama_gambar);
        Destinasi::create([
            'destinasi' => $nama_gambar,
            'namaDestinasi' => $request->namaDestinasi,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/destinasi');
    }

    public function edit($id_destinasi){
        $destinasi = Destinasi::find($id_destinasi);
        return view('destinasi.destinasi-edit', compact('destinasi'));
    }

    public function update(Request $request, $id_destinasi)
{
    $request->validate([
        'destinasi' => 'nullable|file|mimes:png,jpg,jpeg|max:2048',
        'namaDestinasi' => 'required',
        'lokasi' => 'required',
        'deskripsi' => 'required',
    ]);
    $destinasi = Destinasi::find($id_destinasi);
    if ($request->hasFile('destinasi')) {
        $oldImagePath = public_path('img_destinasi/' . $destinasi->destinasi);
        if (File::exists($oldImagePath)) {
            File::delete($oldImagePath);
        }
        $gambar = $request->file('destinasi');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $gambar->move(public_path('img_destinasi'), $nama_gambar);
        $destinasi->destinasi = $nama_gambar;
    }
    $destinasi->namaDestinasi = $request->namaDestinasi;
    $destinasi->lokasi = $request->lokasi;
    $destinasi->deskripsi = $request->deskripsi;
    $destinasi->save();

    return redirect('/destinasi');
    }
    
    public function delete($id_destinasi){
        $destinasi = Destinasi::find($id_destinasi);

        if (!$destinasi) {
            return redirect('/destinasi')->with('error', 'Destinasi tidak ditemukan.');
        }
        return view('destinasi.destinasi-hapus', compact('destinasi'));
    }

    public function destroy($id_destinasi){
        $destinasi = Destinasi::find($id_destinasi);
        if (!$destinasi) {
            return redirect('/destinasi')->with('error', 'Destinasi tidak ditemukan.');
        }
        Log::info("Menghapus destinasi dengan ID: {$id_destinasi}");
        $gambar_path = 'img_destinasi/' . $destinasi->destinasi;
        if (File::exists($gambar_path)) {
            File::delete($gambar_path);
            Log::info("Gambar destinasi dihapus: {$gambar_path}");
        } else {
            Log::info("Gambar destinasi tidak ditemukan: {$gambar_path}");
        }
        $destinasi->delete();
        Log::info("Destinasi dengan ID: {$id_destinasi} berhasil dihapus");
        return redirect('/destinasi')->with('success', 'Destinasi berhasil dihapus.');
    }
}
