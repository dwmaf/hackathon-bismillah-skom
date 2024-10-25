@extends('layouts.layout')
@section('child')
<h1 class="text-center mb-3">Pilih Barang</h1>
<div class="container-fluid">
    <div class="container-custom">
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card align-items-center d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-mobile-screen-button fs-1"></i>
                        </div>
                        <h5 class="card-title">Smartphone</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatum nulla vel similique aspernatur ad porro reprehenderit illo! Itaque atque numquam neque at rerum hic nostrum ducimus nulla, voluptas eum!</p>
                    </div>
                    <a href="/recycle" class="btn mb-5" style="background-color: #25C350">Recycle Now</a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card align-items-center d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-laptop fs-1"></i>
                        </div>
                        
                        <h5 class="card-title">Laptop</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatum nulla vel similique aspernatur ad porro reprehenderit illo! Itaque atque numquam neque at rerum hic nostrum ducimus nulla, voluptas eum!</p>
                    </div>
                    <a href="/recycle" class="btn mb-5" style="background-color: #25C350">Recycle Now</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card align-items-center d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-tv fs-1"></i>
                        </div>
                        <h5 class="card-title">Tv</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatum nulla vel similique aspernatur ad porro reprehenderit illo! Itaque atque numquam neque at rerum hic nostrum ducimus nulla, voluptas eum!</p>
                    </div>
                    <a href="/recycle" class="btn mb-5" style="background-color: #25C350">Recycle Now</a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card align-items-center d-flex flex-column">
                    <div class="card-body">
                        <h5 class="card-title">Laptop</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatum nulla vel similique aspernatur ad porro reprehenderit illo! Itaque atque numquam neque at rerum hic nostrum ducimus nulla, voluptas eum!</p>
                    </div>
                    <a href="/recycle" class="btn btn-primary mb-5">Recycle Now</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
