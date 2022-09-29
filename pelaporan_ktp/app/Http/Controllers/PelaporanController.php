<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelapor;
use Illuminate\Support\Facades\DB;

class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
        // $pelapor = Pelapor::with('users')->get();
        $pelapor = DB::table('pelapor')->paginate(5);
        return view('pelaporan.index', compact('pelapor'));
        // $pelapor = Pelapor::with('users')->get();
        // $pelapor = Pelapor::orderBy('nik_pelapor', 'desc')->paginate(5); 
        // return view('pelaporan.index', compact('pelapor')); 
        // with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function pelaporanld()
    // {
    //     return view('pelaporan.pelaporanLD');
    // }

    public function pencarian(Request $request)
    {
        $pelapor = DB::table('pelapor')->paginate(5);
        return view('pencarian.pencarian', compact('pelapor'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $pelapor = Pelapor::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('pelaporan.index', compact('pelapor'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelaporan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([ 
            'nik_pelapor' => ['required', 'unique:pelapor'],
            'jenis_pelaporan' => 'required', 
            'nama' => 'required', 
            'tanggal_lahir' => 'required', 
            'alamat' => 'required', 
            'kelurahan' => 'required', 
            'kecamatan' => 'required', 
            'kota' => 'required', 
            'pengajuan' => 'required', 
            'keterangan' => 'required',
        ]);
        //fungsi eloquent untuk menambah data 
        Pelapor::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pelaporan.create')
            ->with('success', 'Data Berhasil Ditambahkan'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik_pelapor)
    {
        //menampilkan detail data dengan menemukan/berdasarkan nik_operator 
        $Pelapor = Pelapor::find($nik_pelapor); 
        return view('pelaporan.detail', compact('Pelapor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nik_pelapor)
    {
        //menampilkan detail data dengan menemukan berdasarkan nik_operator untuk diedit
        $Pelapor = Pelapor::find($nik_pelapor); 
        return view('pelaporan.edit', compact('Pelapor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik_pelapor)
    {
        //melakukan validasi data
        $request->validate([ 
            'nik_pelapor' => 'required', 
            'jenis_pelaporan' => 'required', 
            'nama' => 'required', 
            'tanggal_lahir' => 'required', 
            'alamat' => 'required', 
            'kelurahan' => 'required', 
            'kecamatan' => 'required', 
            'kota' => 'required', 
            'pengajuan' => 'required', 
            'keterangan' => 'required', 
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita 
        Pelapor::find($nik_pelapor)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('pelaporan.index') 
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_pelapor)
    {
        //fungsi eloquent untuk menghapus data 
        Pelapor::find($nik_pelapor)->delete(); 
        return redirect()->route('pelaporan.index') 
            -> with('success', 'Data Berhasil Dihapus');
    }
}
