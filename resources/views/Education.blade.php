@extends('layouts.layout')

@section('child')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h3 class="text-uppercase font-weight-bold">- E-Waste Education -</h3>
        <p class="text-muted">Explore articles and resources on e-waste management!</p>
    </div>

    <div class="row">
        @for ($i = 0; $i < 6; $i++)
        <div class="col-md-4 mb-4">
             <div class="card shadow-sm border-0 h-100">
                <img src="" class="card-img-top" alt="Image for" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center font-weight-bold mb-3">Judul {{ $i + 1 }}</h5>
                    <p class="card-text text-muted mb-3">Deskripsi singkat artikel ini.</p>
                    <a href="" class="btn btn-success mt-auto">Baca Lebih Lanjut</a>
                </div>
             </div>
        </div>
        @endfor
    </div>
</div>
@endsection
