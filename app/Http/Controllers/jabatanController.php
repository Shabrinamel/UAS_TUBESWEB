<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class jabatanController extends Controller
{
    /**
     * Display a listing of the resource.ss
     */
    public function index()
    {
        $user = Auth::user();
        $data = jabatan::orderBy("tahun_awal","desc")->paginate(10);
//        return view('Jabatan.vindex', [ 'user'=>$user]);
//    return 'index jabatan';
      return view("jabatan/vindex")->with("pdata", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("jabatan/vcreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'email' => Auth::user()->email, 
            'nama_jabatan' => $request->nama_jabatan,
            'masa' => $request->masa,
            'tahun_awal' => $request->tahun_awal,
            'tahun_akhir' => $request->tahun_akhir,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
        ];
        jabatan::create($data);
        return redirect('jabatan')->with('success','Data Tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = jabatan::where('id', $id)->first();
        if (is_null($data))
        {
            return "data tidak ditemukan";
        }
        else
        {
            return view('jabatan.vedit')->with('hjabatan', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama_jabatan' => $request->nama_jabatan,
            'masa' => $request->masa,
            'tahun_awal' => $request->tahun_awal,
            'tahun_akhir' => $request->tahun_akhir,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
        ];

        jabatan::where('id', $id)->update($data);

        return redirect('jabatan')->with('success','Data Tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        jabatan::where('id', $id)->delete();

        return redirect('jabatan')->with('success','Data berhasil di hapus');
    }
}
