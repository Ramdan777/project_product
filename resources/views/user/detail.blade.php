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
    <nav class="navbar navbar-dark bg-dark mb-3 p-1">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">
                {{-- <img src="{{ asset('storage/logo/logo.png') }}" alt="" width="30" height="24"
                        class="d-inline-block align-text-top"> --}}
                <h1 class="fs-4">CekDulz.<strong>Product</strong></h1>
            </a>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href='user.index.{{ $product->product_category->id }}' class="btn btn-secondary">Back</a>
            </div>
        </div>
    </nav>

    {{-- <a href='user.index.{{ $product->product_category->id }}' class="btn btn-secondary">
        Back
    </a> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-secondary-75">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('storage/photo/' . $product->image) }}"
                                    class="rounded mx-auto d-block" width="100%" alt=".">
                            </div>
                            <div class="col-md-6 mt-5">
                                <p>{{ $product->type }}</p>
                                <h2>{{ $product->name }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Brand</td>
                                            <td>:</td>
                                            <td>{{ $product->product_brand->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Web Brand</td>
                                            <td>:</td>
                                            <td>{{ $product->product_brand->web_address }}</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>:</td>
                                            <td>{{ $product->color }}</td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td>:</td>
                                            <td>{{ $product->price }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>:</td>
                                            <td>{{ $product->description }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
