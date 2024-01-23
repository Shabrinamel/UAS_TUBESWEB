<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use App\Models\pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class pendidikanController extends Controller
{
    /**
     * Display a listing of the resource.ss
     */
    public function index()
    {
        $user = Auth::user();
        $data = pendidikan::orderBy("tawalp","desc")->paginate(10);
//        return view('Jabatan.vindex', [ 'user'=>$user]);
//    return 'index jabatan';
      return view("pendidikan/vindex")->with("pdata", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pendidikan/vcreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'email' => Auth::user()->email, 
            'jenjang' => $request->jenjang,
            'prodi' => $request->prodi,
            'universitas' => $request->universitas,
            'tawalp' => $request->tawalp,
            'takhirp' => $request->takhirp,
        ];
        pendidikan::create($data);
        return redirect('pendidikan')->with('success','Data Tersimpan');
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
        $data = pendidikan::where('id', $id)->first();
        if (is_null($data))
        {
            return "data tidak ditemukan";
        }
        else
        {
            return view('pendidikan.vedit')->with('hpendidikan', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'jenjang' => $request->jenjang,
            'prodi' => $request->prodi,
            'universitas' => $request->universitas,
            'tawalp' => $request->tawalp,
            'takhirp' => $request->takhirp,
        ];

        pendidikan::where('id', $id)->update($data);

        return redirect('pendidikan')->with('success','Data Tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pendidikan::where('id', $id)->delete();

        return redirect('pendidikan')->with('success','Data berhasil di hapus');
    }
}
