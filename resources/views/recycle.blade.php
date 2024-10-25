@extends('layouts.layout')

@section('child')
<div class="d-flex justify-content-center mb-5 mt-5" style="height: 100vh;">
    <form action="/submitrecycle" class="bg-white container shadow p-4 rounded" style="max-width: 600px;" enctype="multipart/form-data" method="POST"> <!-- Menambahkan lebar maksimum -->
        @csrf
        <h4 class="text-center mb-25">Form Data Barang</h4> <!-- Judul form -->
        <div class="d-flex flex-column gap-3"> <!-- Menggunakan flex-column untuk tampilan vertical -->
            <div>
                <label for="nama_skema">Merk</label>
                <select class="form-select" name="merk_id" id="" required>
                    @foreach ($merks as $merk)
                        <option value="{{ $merk->id }}">{{ $merk->nama_merk }}</option>
                    @endforeach
                </select>
                
            </div>
            <div>
                <label for="input2" class="form-label">Model</label>
                <input type="text" class="form-control border border-success" id="input2" placeholder="Isi model barang" name="model"> <!-- Border berwarna -->
            </div>
            <div>
                <label for="input3" class="form-label">Kondisi</label>
                <input type="text" class="form-control border border-success" id="input3" placeholder="Isi kondisi barang" name="kondisi"> <!-- Border berwarna -->
            </div>
            <div>
                <label for="formFile" class="form-label">Foto barang</label>
                <input class="form-control" type="file" id="formFile" name="foto">
            </div>
            <div>
                <label for="input4" class="form-label">Lokasi</label>
                <input type="text" class="form-control border border-success" id="input4" placeholder="Isi lokasi outlet" name="lokasi"> <!-- Border berwarna -->
            </div>
            <div>
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control border border-success" id="deskripsi" rows="3" placeholder="isi deskripsi lebih lanjut di sini" name="deskripsi"></textarea> <!-- Border berwarna -->
            </div>
            <div>
                <button type="submit" class="btn w-100" style="background-color: #25C350">Submit</button> <!-- Tombol diperpanjang -->
            </div>
        </div>
    </form>
</div>
@endsection
