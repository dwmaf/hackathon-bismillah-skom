@extends('layouts.layout')

@section('child')
    <div class="d-flex justify-content-center mb-5 mt-5" style="height: 120vh;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/submitrecycle" class="bg-white container shadow p-5 rounded" style="max-width: 900px;"
            enctype="multipart/form-data" method="POST">
            @csrf
            <input type="text" name="jenis" value="{{ $jenis }}" required hidden>
            <h4 class="text-center mb-4 text-success">Formulir Pengajuan Barang untuk Daur Ulang</h4>
            <p class="text-muted text-center mb-4">Isi detail barang yang ingin Anda daur ulang. Pastikan informasi lengkap
                dan akurat.</p>

            <div class="d-flex flex-column gap-4">
                <!-- Merk Selection -->
                <div>
                    <label for="merk_id" class="form-label fw-bold">Merk Perangkat</label>
                    <select class="form-select border border-success" name="merk_id" id="merk_id" required>
                        <option value="" disabled selected>Pilih merk perangkat yang ingin didaur ulang</option>
                        @foreach ($merks as $merk)
                            <option value="{{ $merk->id }}">{{ $merk->nama_merk }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Model Input -->
                <div>
                    <label for="inputModel" class="form-label fw-bold">Model Perangkat</label>
                    <input type="text" class="form-control border border-success" id="inputModel" name="model"
                        placeholder="Contoh: iPhone 11, Samsung Galaxy S20" required>
                </div>

                <!-- Kondisi Input -->
                <div>
                    <label for="inputKondisi" class="form-label fw-bold">Kondisi Barang</label>
                    <input type="text" class="form-control border border-success" id="inputKondisi" name="kondisi"
                        placeholder="Contoh: Masih berfungsi, layar retak, atau rusak total" required>
                </div>

                <!-- File Upload -->
                <div>
                    <label for="formFile" class="form-label fw-bold">Foto Barang</label>
                    <input class="form-control border border-success" type="file" id="formFile" name="foto"
                        accept="image/*" required>
                    <small class="text-muted">Unggah foto barang Anda untuk mempermudah identifikasi.</small>
                </div>

                <!-- Lokasi Selection -->
                <div>
                    <label for="lokasiMitra" class="form-label fw-bold">Lokasi Mitra</label>
                    <select class="form-select border border-success" name="lokasi_id" id="lokasiMitra" required>
                        <option value="" disabled selected>Pilih lokasi mitra terdekat</option>
                        @foreach ($mitras as $mitra)
                            <option value="{{ $mitra->id }}">{{ $mitra->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Deskripsi Textarea -->
                <div>
                    <label for="inputDeskripsi" class="form-label fw-bold">Deskripsi Tambahan</label>
                    <textarea class="form-control border border-success" id="inputDeskripsi" rows="3" name="deskripsi"
                        placeholder="Contoh: Warna perangkat, kerusakan khusus, atau aksesoris tambahan" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success w-100 py-2">Kirim Formulir</button>
                </div>
            </div>
        </form>
    </div>
@endsection
