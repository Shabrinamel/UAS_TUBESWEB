<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class profilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data profil user yang sedang login
        $user = Auth::user();
        return view('profil.edit', [ 'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'email' => $request->email,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'unit_kerja' => $request->unit_kerja,
            'bidang_minat' => $request->bidang_minat,
            'tgll' => Carbon::parse($request->tgll),
            'jk' => $request->jk,
            'mgl' => $request->mgl,
            'mgb' => $request->mgb,
        ];

        profil::create($data);
        return redirect('profil/'.Auth::user()->email.'/edit')->with('success','Data Tersimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = profil::where('email', $id)->first();
        if (is_null($data))
        {
            return view('profil.create')->with('email', "$id");
        }
        else
        {
            return view('profil.edit')->with('hprofil', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $email)
    {
        $data = [
            'email' => $request->email,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'unit_kerja' => $request->unit_kerja,
            'bidang_minat' => $request->bidang_minat,
            'tgll' => Carbon::parse($request->tgll),
            'jk' => $request->jk,
            'mgl' => $request->mgl,
            'mgb' => $request->mgb,
        ];

        profil::where('email', $email)->update($data);

        return redirect('profil/'.Auth::user()->email.'/edit')->with('success','Data Tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($email)
    {
        profil::where('email', $email)->delete();

        return redirect('profil/'.Auth::user()->email.'/edit')->with('success', 'Profil berhasil dihapus');
    }
}
