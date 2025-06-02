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
        //  $syaratLain = ['Reguler', 'Dhuafa','Yatim / Piatu'];
        return view('pendaftaran.create', compact('jenisKelamin', 'jenjangPendidikan', ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validasi 
        $validData = $request->validate([
            'nama' => 'required',
            'noInduk' => 'required',
            'NISN' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required|in:lakilaki,perempuan',
            'alamat' => 'required',
            // 'namaAyah' => 'required',
            // 'namaIbu' => 'required',
            // 'pekerjaanAyah' => 'required',
            // 'pekerjaanIbu' => 'required',
            // 'alamatIbu' => 'required',
            // 'alamatAyah' => 'required',
            // 'noTelp' => 'required',
            // 'jenjangPendidikan' => 'required|in:mts,ma,kuliah,lulus',
            // 'akte' => 'sometimes|accepted',
            // 'ijazah' => 'sometimes|accepted',
            // 'kk' => 'sometimes|accepted',
            // 'ktp' => 'sometimes|accepted',
            // 'bpjs' => 'sometimes|accepted',

        ]);
        // $pendaftaran = new pendaftaran();
        // // simpan data 
        // $pendaftaran->nama = $validData['nama'];
        // $pendaftaran->noInduk = $validData['noInduk'];
        // $pendaftaran->NISN = $validData['NISN'];
        // $pendaftaran->tanggalLahir = $validData['tanggalLahir'];
        // $pendaftaran->alamat = $validData['alamat'];
        // $pendaftaran->jenisKelamin = $validData['jenisKelamin'];
        // $pendaftaran->namaAyah = $validData['namaAyah'];
        // $pendaftaran->namaIbu = $validData['namaIbu'];
        // $pendaftaran->pekerjaanAyah = $validData['pekerjaanAyah'];
        // $pendaftaran->pekerjaanIbu = $validData['pekerjaanIbu'];
        // $pendaftaran->alamatIbu = $validData['alamatIbu'];
        // $pendaftaran->alamatAyah = $validData['alamatAyah'];
        // $pendaftaran->noTelp = $validData['noTelp'];
        // $pendaftaran->jenjangPendidikan = $validData['jenjangPendidikan'];

        // $pendaftaran->akte = $request->has('akte');
        // $pendaftaran->ijazah = $request->has('ijazah');
        // $pendaftaran->kk = $request->has('kk');
        // $pendaftaran->ktp = $request->has('ktp');
        // $pendaftaran->bpjs = $request->has('bpjs');
        // ddd('$pendaftaran');
        // $pendaftaran->save();
        dd($validData);
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
