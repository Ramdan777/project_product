<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cek Dulu Yuks</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark mb-3 p-2">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">
                {{-- <img src="{{ asset('storage/logo/logo.png') }}" alt="" width="30" height="24"
                    class="d-inline-block align-text-top"> --}}
                <h1 class="fs-4">CekDulz.<strong>Product</strong></h1>
            </a>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href='/' class="btn btn-secondary">Back</a>
            </div>
        </div>

    </nav>

    {{-- <a href='/' class="btn btn-secondary btn-sm">
        Back
    </a> --}}

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($categorie->product_category as $data)
                <div class="mt-5 col-md-4 mx-auto">
                    <div class="card style=width: 14rem;">
                        <img src="{{ asset('storage/photo/' . $data->image) }}" class="mb-0" alt=".">
                        <div class="card-body">
                            <h6 class="card-title">{{ $data->name }}</h6>
                            <p class="card-text"><i>{{ $data->price }}</i></p>
                            <a href='user.detail.{{ $data->id }}' class="btn btn-primary btn-sm">
                                View
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
