@extends('layouts.layout')
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
            <div class="container mt-5 d-flex justify-content-center">
                <button type="submit" class="btn " style="background-color: #25C350">Submit</button>
            </div>

        </form>
    </div>
@endsection
