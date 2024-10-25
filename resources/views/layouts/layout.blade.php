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
        .navbar {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
            border: none; /* Menghilangkan border */
            height: 85px;
        }

        .navbar-nav {
            margin-left: auto; /* Untuk memindahkan navbar ke tengah */
            margin-right: auto; /* Untuk memindahkan navbar ke tengah */
        }

        body {
            padding-top: 85px; /* Memberikan ruang untuk navbar yang fixed */
            background-color: rgb(240, 246, 242);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> <!-- Menambahkan fixed-top -->
        <div class="container">
            <a class="navbar-brand" href="#">Brand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/map">E-Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Trecycle">Recycle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Rules</a>
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
