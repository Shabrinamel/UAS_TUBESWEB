<?php

namespace App\Http\Controllers;

use App\Models\seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class seminarController extends Controller
{
    /**
     * Display a listing of the resource.ss
     */
    public function index()
    {
        $user = Auth::user();
        $data = seminar::orderBy("tgl","desc")->paginate(10);
        
      return view("seminar/vindex")->with("pdata", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("seminar/vcreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $berkas = $request->file('fileinput');
        $berkas_ekstensi = $berkas->extension();
        $berkas_nama = date ('ymdhis').".".$berkas_ekstensi;
        $berkas->move(public_path('berkas_seminar'),$berkas_nama);

        $data = [
            'email' => Auth::user()->email, 
            'nama_seminar' => $request->nama_seminar,
            'tgl' => $request->tgl,
            'angka_kredit' => $request->angka_kredit,
            'satuan_hasil' => $request->satuan_hasil,
            'jumlah_ak' => $request->jumlah_ak,
            'keterangan' => $request->keterangan,
            'filename' => $berkas_nama,
        ];
        seminar::create($data);
        return redirect('seminar')->with('success','Data Tersimpan');
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
        $data = seminar::where('id', $id)->first();
        if (is_null($data))
        {
            return "data tidak ditemukan";
        }
        else
        {
            return view('seminar.vedit')->with('hseminar', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama_seminar' => $request->nama_seminar,
            'tgl' => $request->tgl,
            'angka_kredit' => $request->angka_kredit,
            'satuan_hasil' => $request->satuan_hasil,
            'jumlah_ak' => $request->jumlah_ak,
            'keterangan' => $request->keterangan,
            'filename' => $request->filename,
        ];

        seminar::where('id', $id)->update($data);

        return redirect('seminar')->with('success','Data Tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berkas =seminar::where('id', $id)->first();

        //        $berkas_ekstensi = $berkas->extension();
                $berkas_nama = $berkas->filename; //date ('ymdhis').".".$berkas_ekstensi;
        //        $berkas->delete( public_path('berkas_bahanajar'),$berkas_nama);
        //        Storage::delete( public_path('berkas_bahanajar/'.$berkas_nama ) );
                unlink(public_path('berkas_seminar/').$berkas_nama);
        seminar::where('id', $id)->delete();

        return redirect('seminar')->with('success','Data berhasil di hapus');
    }
       
}    

