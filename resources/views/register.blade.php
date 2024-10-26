<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bismillah Skom</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="/js/datatables-simple-demo.js"></script>
    <style>
        body {
            padding-top: 85px;
            background-color: rgb(240, 246, 242);
            font-family: 'Poppins', sans-serif;
            /* Changed to Poppins */
        }

        .navbar {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: none;
            height: 85px;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }

        .navbar-nav .nav-item {
            margin-right: 30px;
            /* Adjust this value to increase/decrease spacing */
        }

        /* Optional: Adjust the last nav-item to remove extra margin */
        .navbar-nav .nav-item:last-child {
            margin-right: 0;
        }

        .nav-link {
            transition: color 0.3s ease;
            /* Smooth color transition */
            color: #333;
            /* Dark color for inactive links */
        }

        /* Active link color */
        .nav-link.active {
            color: #28a745;
            /* Green for active links */
        }

        .nav-link:hover {
            color: #28a745;
            /* Change link color on hover */
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>

<body>
    

    <main class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5" style="height: 480px">
                        <div class="card-header text-center">
                            <h3 class=" font-weight-light my-4">Register</h3>
                        </div>
                        @if (session()->has('LoginError'))
                            <div class="mx-3 alert alert-danger alert-dismissible fade show mt-4" role="alert">
                                {{ session('LoginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card-body" >
                            <form action="/registeruser" method="POST">
                                @csrf
                                <label for="input1" class="form-label">Email</label>
                                <input type="text" class="form-control border border-black mb-3" id="input1"
                                name="email" placeholder="email">
                                <label for="input1" class="form-label">Username</label>
                                <input type="text" class="form-control border border-black mb-3" id="input1"
                                name="name" placeholder="username">
                                <label for="input1" class="form-label">Password</label>
                                <input type="text" class="form-control border border-black mb-3" id="input1"
                                name="password" placeholder="password">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
        
                            </form>
                            <h6 class="mt-2">Jika sudah punya akun <a href="/login">Silahkan masuk di sini</a></h6 class="mt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </main>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
</body>

</html>

    
