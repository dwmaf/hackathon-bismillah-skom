@extends('layouts.layout')
<<<<<<< HEAD

@section('child')
<div class="d-flex justify-content-center mb-5 mt-5" style="height: 100vh;">
    <form action="" class="container shadow p-4 rounded" style="max-width: 600px;"> <!-- Menambahkan lebar maksimum -->
        <h4 class="text-center mb-25">Form Data Barang</h4> <!-- Judul form -->
        <div class="d-flex flex-column gap-3"> <!-- Menggunakan flex-column untuk tampilan vertical -->
            <div>
                <label for="input1" class="form-label">Merk</label>
                <input type="text" class="form-control border border-success" id="input1" placeholder="Isi merk barang"> <!-- Border berwarna -->
            </div>
            <div>
                <label for="input2" class="form-label">Model</label>
                <input type="text" class="form-control border border-success" id="input2" placeholder="Isi model barang"> <!-- Border berwarna -->
            </div>
            <div>
                <label for="input3" class="form-label">Kondisi</label>
                <input type="text" class="form-control border border-success" id="input3" placeholder="Isi kondisi barang"> <!-- Border berwarna -->
            </div>
            <div>
                <label for="formFile" class="form-label">Foto barang</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div>
                <label for="input4" class="form-label">Lokasi</label>
                <input type="text" class="form-control border border-success" id="input4" placeholder="Isi lokasi outlet"> <!-- Border berwarna -->
            </div>
            <div>
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control border border-success" id="deskripsi" rows="3" placeholder="isi deskripsi lebih lanjut di sini"></textarea> <!-- Border berwarna -->
            </div>
            <div>
                <button type="submit" class="btn w-100" style="background-color: #25C350">Submit</button> <!-- Tombol diperpanjang -->
            </div>
        </div>
    </form>
</div>
=======
@section('child')
    <h1 class="text-center mb-5">Isi data barang</h1>
    <div class="d-flex justify-content-center " style="height: 100vh;">
        <form action="/submitrecycle" class="container" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-row gap-3 ">
                <div class="mb-3 flex-fill">
                    <label for="merk" class="form-label">Merk</label>
                    <select class="form-select border border-black mb-3" id="merk" aria-label="Pilih Merk" name="merk_id">
                        <option selected>Pilih merk barang</option>
                        @foreach ($merks as $merk)
                            <option value="{{ $merk->id }}">{{ $merk->nama_merk }}</option>
                        @endforeach
                    </select>

                    <label for="input1" class="form-label">Model</label>
                    <input type="text" class="form-control border border-black mb-3" id="input1"
                        placeholder="Isi model barang" name="model">
                    <label for="input1" class="form-label">Kondisi</label>
                    <input type="text" class="form-control border border-black mb-3" id="input1"
                        placeholder="Isi kondisi barang" name="kondisi">
                </div>
                <div class="mb-3 flex-fill">
                    <label for="formFile" class="form-label">Foto barang</label>
                    <input class="form-control mb-3" type="file" id="formFile" name="foto">
                    <label for="input1" class="form-label">Lokasi</label>
                    <input type="text" class="form-control border border-black mb-3" id="input1"
                        placeholder="Isi lokasi outlet" name="lokasi">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control border border-black mb-3" id="deskripsi" rows="3"
                        placeholder="isi deskripsi lebih lanjut di sini" name="deskripsi"></textarea>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
>>>>>>> ec4445ffcbe463599156ba0d3f38fec135bfa5a4
@endsection
