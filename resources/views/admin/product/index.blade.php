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

    <div class="container">
        <h1 class="mt-4 text-center">Ini Halaman Product</h1>

        <div class="mt-3 mb-5 d-flex justify-content-end">
            <a href="admin.product.create" class="btn btn-success">Add Product</a>
        </div>

        @if (Session::has('status'))
            <div class="alert alert-secondary" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <h3><b>Product List</b></h3>

        <div class="pb-3 my-5 col-12 col-sm-8 col-md-5">
            <form class="d-flex" action="" method="get">
                <div class="input-group mb-3 ">
                    <input type="search" class="form-control me-1 rounded-3" name="keyword"
                        placeholder="Search by Name" aria-label="Search">
                    <button class="btn btn-outline-dark rounded-3" type="submit">Search</button>
                </div>
            </form>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $data)
                    <tr>
                        <td>{{ $loop->iteration + $product->firstItem() - 1 }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->type }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->product_category->name }}</td>
                        <td>
                            <a href='admin.product.detail.{{ $data->id }}' class="btn btn-primary btn-sm">
                                View
                            </a>
                            <a href='admin.product.edit.{{ $data->id }}' class="btn btn-success btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <form class="d-inline" action="admin-delete.product.{{ $data->id }}" method="post"
                                onclick="return confirm('Yakin akan menghapus data?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="my-5">
            {{ $product->links() }}
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
</body>

</html>
