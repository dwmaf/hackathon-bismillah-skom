@extends('layouts.layout')
@section('child')
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh; min-width:500px">
        <div class="card mt-4">
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <p>Merk: {{ session('merk')->nama_merk }}</p>
                <p>Model: {{ session('recycle')->model }}</p>
                <p>Kondisi: {{ session('recycle')->kondisi }}</p>
                <p>Lokasi: {{ session('recycle')->lokasi }}</p>
                <p>Deskripsi: {{ session('recycle')->deskripsi }}</p>
            </div>
        </div>
    </div>
@endsection
