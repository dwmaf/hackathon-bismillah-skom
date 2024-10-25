<?php

namespace App\Http\Controllers;
use App\Models\Recycle;
use App\Models\Merk;
use Illuminate\Http\Request;

class RecycleController extends Controller
{
    public function submit(Request $request)
    {
        
        $validatedData = $request->validate([
            'merk_id' => 'required', 
            'model' => 'required',
            'kondisi'=>'required',
            
            'lokasi'=>'required',
            'deskripsi'=>'required'
        ]);

        $recycle = Recycle::create($validatedData);
        

        return redirect('/hasil')->with('success', 'sukses')->with('recycle', $recycle);
    }
}
