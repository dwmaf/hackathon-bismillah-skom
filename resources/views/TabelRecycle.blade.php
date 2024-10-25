@extends('layouts.layout')
@section('child')

<div class="container">
    <h3 class="mt-5">Choose the item you would like to recycle:</h3> <!-- Menambahkan kelas margin untuk posisi dan jarak -->
<div class="container-fluid">
    <div class="container-custom">
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card align-items-center d-flex flex-column border-0 shadow"> <!-- Hilangkan border dan tambahkan shadow -->
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center p-5">
                            <i class="fa-solid fa-mobile-screen-button fs-1"></i>
                        </div>
                        <h5 class="card-title font-weight-bold">Smartphone</h5>
                        <p>Recycle your old smartphones responsibly.

                            We ensure proper dismantling and recycling of electronic components.
                            
                            Make sure to remove any personal data before recycling.</p>
                    </div>
                    <a href="/recycle/smartphone" class="btn mb-5" style="background-color: #25C350">Recycle Now</a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card align-items-center d-flex flex-column border-0 shadow"> <!-- Hilangkan border dan tambahkan shadow -->
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center p-5">
                            <i class="fa-solid fa-laptop fs-1"></i>
                        </div>
                        <h5 class="card-title font-weight-bold">Laptop</h5>
                        <p>Dispose of your old laptops in an eco-friendly way.

                            Our recycling process adheres to environmental standards.
                            
                            Please remove batteries before recycling.</p>
                    </div>
                    <a href="/recycle/laptop" class="btn mb-5" style="background-color: #25C350">Recycle Now</a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card align-items-center d-flex flex-column border-0 shadow"> <!-- Hilangkan border dan tambahkan shadow -->
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center p-5">
                            <i class="fa-solid fa-computer fs-1"></i>
                        </div>
                        <h5 class="card-title font-weight-bold">Computer</h5>
                        <p>Recycle your outdated desktop computers responsibly.

                            Our recycling service ensures the safe handling and disposal of electronic parts.
                            
                            Please remove any hard drives to safeguard personal data before recycling.</p>
                    </div>
                    <a href="/recycle/computer" class="btn mb-5" style="background-color: #25C350">Recycle Now</a>
                </div>
            </div>

            
        </div>
    </div>
</div>
</div>

@endsection
