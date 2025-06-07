<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allpendaftaran = Pendaftaran::all();
        return view('pendaftaran.index', compact('allpendaftaran'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $jenisKelamin = ['Laki Laki', 'Perempuan'];
         $jenjangPendidikan = ['MTS', 'MA','KULIAH', 'LULUS'];
         $kategoriSantri = ['Reguler', 'Dhuafa','Yatim / Piatu'];
        // return view('pages.pendaftaran', compact('jenisKelamin', 'jenjangPendidikan','kategoriSantri' ));
        return view('pendaftaran.create', compact('jenisKelamin', 'jenjangPendidikan','kategoriSantri' ));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validasi 
        $validData = $request->validate([
            'nama' => 'required',
            'no_induk' => 'required',
            'NISN' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|in:Laki Laki,Perempuan',
            'alamat' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_ibu' => 'required',
            'alamat_ayah' => 'required',
            'no_telp' => 'required',
            'jenjang_pendidikan' => 'required|in:MTS,MA,KULIAH,LULUS',
            'kategori_santri' => 'required|in:Reguler,Dhuafa,Yatim / Piatu',
            // 'akte' => 'required|file|mimes:pdf,jpg,png|max:2048',
            // 'ijazah' => 'required|file|mimes:pdf,jpg,png|max:2048',
            // 'kk' => 'required|file|mimes:pdf,jpg,png|max:2048',
            // 'ktp' => 'required|file|mimes:pdf,jpg,png|max:2048',
            // 'bpjs' => 'required|file|mimes:pdf,jpg,png|max:2048',

        ]);

        

        // dd($validData);
        
        Pendaftaran::create($validData);

        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        return view('pendaftaran.show', compact('pendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $prestasi)
    {
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
         // validasi 
        $validData = $request->validate([
            'tahun' => 'required',
            'prestasi' => 'required',
            'tingkat' => 'required',
            'penyelenggara' => 'required',
            'peraih' => 'required',

        ]);

        // simpan data 
        $prestasi->update($validData);

        return redirect()->route('pendaftaran.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
