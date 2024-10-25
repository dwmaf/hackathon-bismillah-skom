<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bismillah Skom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>

        .card {
            border: none;
            height: 300px; 
            display: flex; 
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
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
  <nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-between"> <!-- Ganti container-fluid dengan container -->
        <a class="navbar-brand" href="/">
            {{-- <img src="{{ url('/img/logo-jombang1.png') }}" alt="Logo"> --}}
            Bismillah-Skom
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02"> <!-- Ganti justify-content- menjadi justify-content-end -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/Trecycle">Recycle</a>
                </li>
                
            </ul>
        </div>
        
    </div>
  </nav>
  @yield('child')
  

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>
