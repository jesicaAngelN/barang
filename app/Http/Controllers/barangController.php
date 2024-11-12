<?php

namespace App\Http\Controllers;

use App\Models\barangModel;
use Illuminate\Http\Request;

class barangController extends Controller
{
    //;

    public function listbarang()
    {
        $barang = barangModel::get();
        return view('barang.listBarang', compact('barang'));
    }

    function tambahbarang(){
        return view('barang.tambah');
    }

    public function detailbarang($id)
    {
        $data = barangModel::findOrFail($id);
        return view('barang.detail', compact('data'));
    }

    public function simpanbarang(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ],[
            'nama_barang.required' => 'nama_barang harus diisi.',
            'harga.required' => 'harga harus diisi.',
            'stok.required' => 'stok harus diisi.',
        ]);

        // simpan data
        $data = new barangModel();
        $data->nama_barang = $request->nama_barang;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->save();

        return redirect()->route('listbarang')->with('success','input berhasil ditambahkan');
    }

    public function editbarang($id){
        $data = barangModel::findOrFail($id);
        return view('barang.edit',compact('data'));
    }

    public function updatebarang(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ],[
            'nama_barang.required' => 'nama_barang harus diisi.',
            'harga.required' => 'harga harus diisi.',
            'stok.required' => 'stok harus diisi.',
        ]);

         // simpan data
         $data = barangModel::findOrFail($id);
         $data->nama_barang = $request->nama_barang;
         $data->harga = $request->harga;
         $data->stok = $request->stok;
         $data->save();
 
         return redirect()->route('listbarang')->with('success', 'inutan berhasil ditambahkan');
    }

    public function hapusbarang($id)
    {
        try {
            barangModel::where('id_barang', $id)->delete();
            return to_route('listbarang');
        } catch (\Exception $e) {
            return to_route('listbarang')->withErrors('gagal hapus');
        }
    }

    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'id_barang' => 'required|unique:data_barang,id_barang',
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi gambar
        ]);
    
        // Path untuk foto
        $fotoPath = null;
    
        // Menyimpan gambar
        if ($request->hasFile('foto')) {
            // Membuat nama file foto yang unik dengan timestamp
            $fotoName = time() . '.' . $request->file('foto')->getClientOriginalExtension();
    
            // Tentukan path file foto di dalam folder 'foto'
            $fotoPath = 'foto/' . $fotoName;
    
            // Pindahkan file ke folder 'foto' di dalam public
            $request->file('foto')->move(public_path('foto'), $fotoName);
        }
    
        // Simpan data barang ke database
        Barang::create([
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto' => $fotoPath, // Simpan path gambar di database
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('barang.listBarang')->with('success', 'Barang berhasil ditambahkan!');
    }
}