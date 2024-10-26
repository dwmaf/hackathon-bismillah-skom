@extends('layouts.layout')

@section('child')
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh; min-width:500px">
        <div class="card mt-4 shadow">
            <div class="card-body text-center">
                
                {{-- Success alert --}}
                @if (session()->has('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Pending and description message --}}
                <div class="mt-4">
                    <img src="https://cdn-icons-png.flaticon.com/128/1327/1327264.png" alt="">
                    <p class="text-muted mt-3">
                        <strong>Status:</strong> Barang Anda sedang diproses dan telah masuk dalam antrian. Terima kasih telah berkontribusi untuk daur ulang!
                        <br>Segera antar barang Anda ke lokasi terdekat untuk membantu menjaga lingkungan kita tetap bersih dan sehat.
                    </p>
                    <p class="text-success mt-2">
                        Setiap kontribusi kecil dari Anda adalah langkah besar untuk masa depan yang lebih baik. Jadilah bagian dari perubahan!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
