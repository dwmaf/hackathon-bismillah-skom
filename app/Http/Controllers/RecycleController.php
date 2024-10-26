<?php

namespace App\Http\Controllers;
use App\Models\Recycle;
use App\Models\Merk;
use App\Models\mitra;
use Illuminate\Http\Request;

class RecycleController extends Controller
{
    public function submit(Request $request)
    {
        dd($request);
        $validatedData = $request->validate([
            'merk_id' => 'required', 
            'model' => 'required',
            'kondisi'=>'required',
            'lokasi'=>'required',
            'deskripsi'=>'required',
            'foto'=>'image'
        ]);
        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto');
        }
        $recycle = Recycle::create($validatedData);
        $merk = Merk::find($recycle->merk_id); 

        return redirect('/hasil')->with('success', 'Berhasil tambah data')->with('recycle', $recycle)->with('merk', $merk);
    }

    public function history()
    {
        return view('/historyrecycle', [
            'recycles' => Recycle::with('merk')->get()
        ]);
    }
}
