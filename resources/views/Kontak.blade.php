@extends('layouts.layout')

@section('child')
    <div class="container mt-5">
        <!-- Header Section -->
        <div class="text-center">
            <h3 class="text-center text-success">Hubungi Kami</h3>
            <p class="text-center text-muted mb-4">Apakah Anda memiliki pertanyaan, masukan, atau membutuhkan bantuan? Kami siap membantu!</p>
        </div>

        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6 d-flex align-items-stretch mb-4">
                <div class="card shadow border-0 w-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center font-weight-bold mb-4">Kirim Pesan</h5>
                        <form action="" method="POST" class="flex-grow-1 mt-3">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Anda</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Anda</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Masukkan email Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor Telepon</label>
                                <input type="text" id="phone" name="phone" class="form-control"
                                    placeholder="Masukkan nomor telepon" required>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Pesan Anda</label>
                                <textarea id="message" name="message" rows="4" class="form-control" placeholder="Tuliskan pesan Anda di sini"
                                    required></textarea>
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
                                    <a href="#" class="social-icon" aria-label="LinkedIn"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                    <a href="#" class="social-icon" aria-label="Instagram"><i
                                            class="fa-brands fa-instagram"></i></a>
                                    <a href="#" class="social-icon" aria-label="Twitter"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class="social-icon" aria-label="WhatsApp"><i
                                            class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Styles for icons and layout -->
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
                    color: inherit;
                    text-decoration: none;
                }

                /* Spacing adjustments */
                .gap-3 {
                    gap: 1rem;
                }
            </style>

            <!-- JavaScript for Bootstrap components -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        @endsection
