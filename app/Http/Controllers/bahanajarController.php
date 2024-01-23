<?php

namespace App\Http\Controllers;

use App\Models\bahanajar;
use App\Models\jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class bahanajarController extends Controller
{
    /**
     * Display a listing of the resource.ss
     */
    public function index()
    {
        $user = Auth::user();
        $data = bahanajar::orderBy("tgl","desc")->paginate(10);
//        return view('Jabatan.vindex', [ 'user'=>$user]);
    // return 'bahanajar';
     return view("bahanajar/vindex")->with("pdata", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("bahanajar/vcreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $berkas = $request->file('fileinput');
        $berkas_ekstensi = $berkas->extension();
        $berkas_nama = date ('ymdhis').".".$berkas_ekstensi;
        $berkas->move(public_path('berkas_bahanajar'),$berkas_nama);


        $data = [
            'email' => Auth::user()->email, 
            'Kegiatan' => $request->Kegiatan,
            'tgl' => $request->tgl,
            'ak_penilaian' => $request->ak_penilaian,
            'ak_instansi' => $request->ak_instansi,
            'keterangan' => $request->keterangan,
            'filename' => $berkas_nama,
        ];
        bahanajar::create($data);
        return redirect('bahanajar')->with('success','Data Tersimpan');
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
        $data = bahanajar::where('id', $id)->first();
        if (is_null($data))
        {
            return "data tidak ditemukan";
        }
        else
        {
            return view('bahanajar.vedit')->with('hbahanajar', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'Kegiatan' => $request->Kegiatan,
            'tgl' => $request->tgl,
            'ak_penilai' => $request->ak_penilai,
            'ak_instansi' => $request->ak_instansi,
            'keterangan' => $request->keterangan,
            'filename' => $request->filename,
        ];

        bahanajar::where('id', $id)->update($data);

        return redirect('bahanajar')->with('success','Data Tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berkas =bahanajar::where('id', $id)->first();

//        $berkas_ekstensi = $berkas->extension();
        $berkas_nama = $berkas->filename; //date ('ymdhis').".".$berkas_ekstensi;
//        $berkas->delete( public_path('berkas_bahanajar'),$berkas_nama);
//        Storage::delete( public_path('berkas_bahanajar/'.$berkas_nama ) );
        unlink(public_path('berkas_bahanajar/').$berkas_nama);
        bahanajar::where('id', $id)->delete();


        return redirect('bahanajar')->with('success','Data berhasil di hapus');
    }
}
