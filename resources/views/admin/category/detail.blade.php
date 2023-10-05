<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>App-Product</title>
</head>

<body class=".bg-body-secondary">
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark mb-3">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">
                {{-- <img src="{{ asset('storage/logo/logo.png') }}" alt="" width="30" height="24"
                    class="d-inline-block align-text-top"> --}}
                <h1 class="fs-4">App-<strong>Product</strong></h1>
            </a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href='admin.category.index' class="btn btn-secondary me-md-2">Back</a>
            </div>
        </div>
    </nav>


    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
        </svg> --}}


        <div class="container mb-5">
            <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card style="width: 18rem;">
                            <img src="{{ asset('storage/photo/' . $category->image) }}" class="card-img-top" alt=".">
                            <div class="card-body">
                                <h6 class="card-title">{{ $category->name }}</h6>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                @foreach ($category->product_category as $data)
                    <div class="col-md-4">
                        <div class="card style="width: 18rem;">
                            <img src="{{ asset('storage/photo/' . $data->image) }}" class="card-img-top" alt=".">
                            <div class="card-body">
                                <h6 class="card-title">{{ $data->name }}</h6>
                                <p class="card-text">{{ $data->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
