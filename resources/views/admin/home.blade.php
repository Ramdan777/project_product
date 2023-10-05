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
    {{-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> --}}
</head>

<body class="bg-light">
    <!-- Header -->

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ms-3" href="#">
                    {{-- <img src="{{ asset('storage/logo/logo.png') }}" alt="" width="30" height="24"
                        class="d-inline-block align-text-top"> --}}
                    <h1 class="fs-4">App-<strong>Product</strong></h1>
                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="admin">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.product.index">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.category.index">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.brand.index">Brand</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="d-grid gap-2 me-2 justify-content-md-end">
                                <a href="/logout" class="btn btn-outline-light">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
    </body>

</html>
