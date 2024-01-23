<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
//         $mahasiswa = mahasiswa::firstWhere('email','=','nana@gmail.com');
// //        $mahasiswa = App\Models\mahasiswa;
//         if ($mahasiswa->email = null)
//         {
            // $mahasiswa = new mahasiswa;
            // $mahasiswa->create(['email'=> ' test@gmail.com', 'nama' => '', 'nip' => '', 'unit_kerja' => '', 'bidang_minat' =>'', 
            // 'tgl' => '0001-01-01', 'jk' => '', 'mgl' => 0, 'mgb' => 0]); 
        // }
//        return view('mahasiswa.create',["hprofil" => mahasiswa::firstWhere('email','=','nana@gmail.com')]);
        return view('mahasiswa.create');
//        return view('mahasiswa.create',["hprofil" => $mahasiswa]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $data = [
        //     'email => required',
        //     'nama' => 'required',
        //     'nip' => 'required',
        //     'unit_kerja' => 'required',
        //     'bidang_minat' => 'required',
        //     'tgll' => 'required',
        //     'jk' => 'required',
        //     'mgl' => 'required',
        //     'mgb' => 'required',
        // ];
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

        mahasiswa::create($data);
        return 'store';
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
        //
        $data = mahasiswa::where('email', $id)->first();
        //        $mahasiswa = mahasiswa::firstWhere('email','=',$id);
//       $mahasiswa = App\Models\mahasiswa;
//        if (empty(array_filter($data->all)))
        // if (is_null($mahasiswa))
        // {
        //     $mahasiswa = new mahasiswa;
        //     // $mahasiswa->create(['email'=> $id, 'nama' => '', 'nip' => '', 'unit_kerja' => '', 'bidang_minat' =>'', 
        //     // 'tgll' => '0001-01-01', 'jk' => '', 'mgl' => 0, 'mgb' => 0]); 
        // }
//        return view('mahasiswa.create',["hprofil" => mahasiswa::firstWhere('email','=','nana@gmail.com')]);
//       return view('mahasiswa.edit',["hprofil" => $mahasiswa]);
        if (is_null($data))
        {
            return view('mahasiswa.create')->with('email', "$id");
        }
        else
        {
            return view('mahasiswa.edit')->with('hprofil', $data);
        }
//        return 'edit  '.$email;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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

        mahasiswa::where('email', $id)->update($data);
        return redirect()->to('mahasiswa')->with('Success','Data Updated.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
