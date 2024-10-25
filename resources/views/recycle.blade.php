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
</head>

<body>
    <h1 class="text-center">Isi data barang</h1>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="">
            <div class="d-flex flex-row gap-3">
                <div class="mb-3">
                    <label for="input1" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="input1" placeholder="Isi merk barang">
                    <label for="input1" class="form-label">Model</label>
                    <input type="text" class="form-control" id="input1" placeholder="Isi model barang">
                    <label for="input1" class="form-label">Kondisi</label>
                    <input type="text" class="form-control" id="input1" placeholder="Isi kondisi barang">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto barang</label>
                    <input class="form-control" type="file" id="formFile">
                    <label for="input1" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="input1" placeholder="Isi lokasi outlet">
                    <label for="exampleFormControlTextarea1" class="form-label">Example Textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your text here"></textarea>
                </div>

            </div>
            <button type="submit" class="btn " style="background-color: green">Submit</button>
        </form>
    </div>
</body>

</html>
