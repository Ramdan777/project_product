<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Category</title>
</head>

<body>

    <h1 class="fs-3, text-center mt-5 mb-4">Input Data</h1>

    <form action='admin-add.category' method='post' enctype="multipart/form-data">
        @csrf
        <div class="col-6 mx-auto">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-secondary-75">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 pe-5 ps-5">
                                        <label for="floatingTextarea">Name Category</label>
                                        <input name="name" type="text" class="form-control" id="name" required>
                                    </div>

                                    <div class="mb-3 pe-5 ps-5">
                                        <label for="photo">Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="photo" name="photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 mt-3 col-3 mx-auto">
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
