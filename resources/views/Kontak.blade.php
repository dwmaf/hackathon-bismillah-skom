@extends('layouts.layout')
@section('child')

<div class="container mt-5">
    <div class="text-center mb-5">
        <h3 class="text-uppercase font-weight-bold">- Hubungi Kami -</h3>
        <p class="text-muted">Ada pertanyaan atau ingin bertanya? Hubungi kami sekarang!</p>
    </div>

    <div class="row">
        <!-- Form Section -->
        <div class="col-md-6 d-flex align-items-stretch mb-4">
            <div class="card shadow border-0 w-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center font-weight-bold mb-4">Kirim Pesan</h5>
                    <form action="" method="POST" class="flex-grow-1">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Anda</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Anda</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="text" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Pesan Anda</label>
                            <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="col-md-6 d-flex align-items-stretch mb-4">
            <div class="card shadow border-0 w-100">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center mb-4">Informasi Kontak</h5>
                    <ul class="list-unstyled">
                        <!-- Address Section -->
                        <li class="mb-4 d-flex align-items-center gap-3">
                            <div class="icon-box d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-location-dot fs-5"></i>
                            </div>
                            <span>Pontianak, Kalimantan Barat, 78123</span>
                        </li>
                        
                        <!-- Phone Section -->
                        <li class="mb-4 d-flex align-items-center gap-3">
                            <div class="icon-box d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-phone fs-5"></i>
                            </div>
                            <span>+62 812-3456-7890</span>
                        </li>
                        
                        <!-- Email Section -->
                        <li class="mb-4 d-flex align-items-center gap-3">
                            <div class="icon-box d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-envelope fs-5"></i>
                            </div>
                            <span>kontak@perusahaan.com</span>
                        </li>
                        
                        <!-- Social Media Section -->
                        <li class="d-flex align-items-center gap-3">
                            <div class="icon-box d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-share-nodes fs-5"></i>
                            </div>
                            <div class="d-flex gap-2">
                                <span class="social-icon"><i class="fa-brands fa-linkedin"></i></span>
                                <span class="social-icon"><i class="fa-brands fa-instagram"></i></span>
                                <span class="social-icon"><i class="fa-brands fa-twitter"></i></span>
                                <span class="social-icon"><i class="fa-brands fa-whatsapp"></i></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <style>
            .icon-box {
                width: 40px;
                height: 40px;
                background-color: #e9ecef;
                border-radius: 8px;
            }

            .social-icon {
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 8px;
                background-color: #e9ecef;
            }

            /* Remove link appearance */
            .card-body span, .card-body a {
                color: inherit;
                text-decoration: none;
            }

            /* Add spacing between list items */
            .gap-3 {
                gap: 1rem;
            }
        </style>
        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
