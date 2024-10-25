@extends('layouts.layout')
@section('child')
<h1 class="text-center mb-5">Isi data barang</h1>
    <div class="d-flex justify-content-center " style="height: 100vh;">
        <form action="" class="container">
            <div class="d-flex flex-row gap-3 ">
                <div class="mb-3 flex-fill">
                    <label for="input1" class="form-label">Merk</label>
                    <input type="text" class="form-control border border-black mb-3" id="input1" placeholder="Isi merk barang">
                    <label for="input1" class="form-label">Model</label>
                    <input type="text" class="form-control border border-black mb-3" id="input1" placeholder="Isi model barang">
                    <label for="input1" class="form-label">Kondisi</label>
                    <input type="text" class="form-control border border-black mb-3" id="input1" placeholder="Isi kondisi barang">
                </div>
                <div class="mb-3 flex-fill">
                    <label for="formFile" class="form-label">Foto barang</label>
                    <input class="form-control mb-3" type="file" id="formFile">
                    <label for="input1" class="form-label">Lokasi</label>
                    <input type="text" class="form-control border border-black mb-3" id="input1" placeholder="Isi lokasi outlet">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control border border-black mb-3" id="deskripsi" rows="3" placeholder="isi deskripsi lebih lanjut di sini"></textarea>
                </div>

            </div>
            <div class="container mt-5 d-flex justify-content-center">
                <button type="submit" class="btn " style="background-color: #25C350">Submit</button>
            </div>
            
        </form>
    </div>    
@endsection