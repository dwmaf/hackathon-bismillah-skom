<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Bismillah Skom</title>
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
        }

        .card {
            border: none; /* Menghilangkan border */
            background-color: #ffffff; /* Warna latar belakang card */
            height: 300px; /* Tinggi tetap untuk semua card */
            display: flex; /* Memastikan elemen dalam card ditampilkan dengan baik */
            flex-direction: column; /* Mengatur elemen di dalam card secara vertikal */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan untuk efek menonjol */
        }

        .container-custom {
            padding: 20px; /* Ruang di dalam container */
            border-radius: 10px; /* Membuat sudut bulat pada container */
            background-color: #ffffff; /* Menjaga warna putih pada latar belakang */
        }

        .btn {
            margin-top: auto; /* Menggeser tombol ke bawah dalam card */
        }
    </style>
</head>

<body>
    <h1 class="text-center mb-3">Isi Data Barang</h1>
    <div class="container-fluid">
        <div class="container-custom">
            <div class="row mt-4">
                <div class="col-md-6 mb-4">
                    <div class="card align-items-center d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Smartphone</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatum nulla vel similique aspernatur ad porro reprehenderit illo! Itaque atque numquam neque at rerum hic nostrum ducimus nulla, voluptas eum!</p>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary mb-5">Recycle Now</button>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card align-items-center d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Laptop</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatum nulla vel similique aspernatur ad porro reprehenderit illo! Itaque atque numquam neque at rerum hic nostrum ducimus nulla, voluptas eum!</p>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="jenis_surat" value="surat nikah">
                            <button type="submit" class="btn btn-primary">Recycle Now</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 mb-4">
                    <div class="card align-items-center d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Smartphone</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatum nulla vel similique aspernatur ad porro reprehenderit illo! Itaque atque numquam neque at rerum hic nostrum ducimus nulla, voluptas eum!</p>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="jenis_surat" value="surat nikah">
                            <button type="submit" class="btn btn-primary">Recycle Now</button>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card align-items-center d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Laptop</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatum nulla vel similique aspernatur ad porro reprehenderit illo! Itaque atque numquam neque at rerum hic nostrum ducimus nulla, voluptas eum!</p>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="jenis_surat" value="surat nikah">
                            <button type="submit" class="btn btn-primary">Recycle Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
