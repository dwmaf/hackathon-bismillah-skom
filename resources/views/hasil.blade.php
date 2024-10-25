@extends('layouts.layout')
@section('child')
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Merk: {{ session('recycle')->merk_id }}</h5>
            <p>Model: {{ session('recycle')->model }}</p>
            <p>Kondisi: {{ session('recycle')->kondisi }}</p>
            <p>Lokasi: {{ session('recycle')->lokasi }}</p>
            <p>Deskripsi: {{ session('recycle')->deskripsi }}</p>
            <!-- Jika Anda menyimpan foto, tampilkan di sini -->
            {{-- @if (session('recycle')->foto)
                <img src="{{ asset('storage/' . session('recycle')->foto) }}" alt="Foto Barang" class="img-fluid mt-2">
            @endif --}}
        </div>
    </div>
@endsection
