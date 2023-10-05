<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Category</title>
</head>

<body>

    <h1 class="fs-3, text-center mt-5 mb-4">Update Data</h1>

    <form action='admin-edit.category.{{$category->id}}' method='post'>
        @csrf
        @method('PUT')

        <div class="col-6 mx-auto">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-secondary-75">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 pe-5 ps-5">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control"
                                            value="{{ $category->name }}" id="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3 mb-3 d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href='admin.category.index' class="text-decoration-none text-white btn btn-secondary md-1">Back</a>
        </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
