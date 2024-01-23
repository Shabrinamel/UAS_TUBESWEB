<?php

namespace App\Http\Controllers;

use App\Models\bahanajar;
use App\Models\jabatan;
use App\Models\pengembangandiri;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class pengembangandiriController extends Controller
{
    /**
     * Display a listing of the resource.ss
     */
    public function index()
    {
        $user = Auth::user();
        $data = pengembangandiri::orderBy("tgl","desc")->paginate(10);
//        return view('Jabatan.vindex', [ 'user'=>$user]);
//    return 'index jabatan';
      return view("pengembangandiri/vindex")->with("pdata", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pengembangandiri/vcreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $berkas = $request->file('fileinput');
        $berkas_ekstensi = $berkas->extension();
        $berkas_nama = date ('ymdhis').".".$berkas_ekstensi;
        $berkas->move(public_path('berkas_pengembangan'),$berkas_nama);

        $data = [
            'email' => Auth::user()->email, 
            'Kegiatan' => $request->Kegiatan,
            'tgl' => $request->tgl,
            'durasi' => $request->durasi,
            'ak_penilaian' => $request->ak_penilaian,
            'ak_instansi' => $request->ak_instansi,
            'keterangan' => $request->keterangan,
            'filename' => $berkas_nama,
        ];
        pengembangandiri::create($data);
        return redirect('pengembangandiri')->with('success','Data Tersimpan');
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
        $data = pengembangandiri::where('id', $id)->first();
        if (is_null($data))
        {
            return "data tidak ditemukan";
        }
        else
        {
            return view('pengembangandiri.vedit')->with('hbahanajar', $data);
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
            'durasi' => $request->durasi,
            'ak_penilaian' => $request->ak_penilaian,
            'ak_instansi' => $request->ak_instansi,
            'keterangan' => $request->keterangan,
            'filename' => $request->filename,
        ];

        pengembangandiri::where('id', $id)->update($data);

        return redirect('pengembangandiri')->with('success','Data Tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berkas =pengembangandiri::where('id', $id)->first();

        //        $berkas_ekstensi = $berkas->extension();
                $berkas_nama = $berkas->filename; //date ('ymdhis').".".$berkas_ekstensi;
        //        $berkas->delete( public_path('berkas_bahanajar'),$berkas_nama);
        //        Storage::delete( public_path('berkas_bahanajar/'.$berkas_nama ) );
                unlink(public_path('berkas_pengembangan/').$berkas_nama);
        pengembangandiri::where('id', $id)->delete();

        return redirect('pengembangandiri')->with('success','Data berhasil di hapus');
    }
}
