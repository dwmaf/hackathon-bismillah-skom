<?php

namespace App\Http\Controllers;
use App\Models\Recycle;
use App\Models\Merk;
use App\Models\mitra;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RecycleController extends Controller
{
    public function submit(Request $request)
    { 
        $validatedData = $request->validate([
            'merk_id' => 'required', 
            'model' => 'required',
            'kondisi'=>'required',
            'lokasi_id'=>'required',
            'deskripsi'=>'required',
            'foto'=>'image'
        ]);
        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto');
        }
        switch ($request->input('jenis')) {
            case 'smartphone':
                $validatedData['estimasi'] = 1500000;
                break;
            case 'laptop':
                $validatedData['estimasi'] = 3000000;
                break;
            case 'computer':
                $validatedData['estimasi'] = 7000000;
                break;
            default:
                $validatedData['estimasi'] = 0; // Atau sesuai kebutuhan Anda
                break;
        }
        $recycle = Recycle::create($validatedData);
        $merk = Merk::find($recycle->merk_id);
        return redirect('/hasil')->with('success', 'Berhasil tambah data')->with('recycle', $recycle)->with('merk', $merk);
    }

    public function history()
    {
        return view('/historyrecycle', [
            'recycles' => DB::table('recycles')
                            ->join('merks', 'recycles.merk_id', '=', 'merks.id')
                            ->join('mitras', 'recycles.lokasi_id', '=', 'mitras.id')
                            ->select('recycles.*', 'merks.nama_merk','merks.jenis', 'mitras.name')
                            ->get()
        ]);
    }
}
