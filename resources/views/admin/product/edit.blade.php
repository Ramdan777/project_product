<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Product</title>
</head>

<body>

    <h1 class="fs-3, text-center mt-5 mb-4">Update Data</h1>

    <form action='admin-edit.product.{{$product->id}}' method='post'>
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
                                            value="{{ $product->name }}" id="name">
                                    </div>

                                    <div class="mb-3 pe-5 ps-5">
                                        <label for="type">Type</label>
                                        <input name="type" type="text" class="form-control"
                                            value="{{ $product->type }}" id="type">
                                    </div>

                                    <div class="mb-3 pe-5 ps-5">
                                        <label for="color">Color</label>
                                        <input name="color" type="text" class="form-control"
                                            value="{{ $product->color }}" id="color">
                                    </div>

                                    <div class="mb-3 pe-5 ps-5">
                                        <label for="description">Description</label>
                                        <textarea name="description" type="text" class="form-control" id="description">{{ $product->description }}</textarea>
                                    </div>
                                    <div class="mb-3 pe-5 ps-5">
                                        <label for="price">Price</label>
                                        <input name="price" type="text" class="form-control"
                                            value="{{ $product->price }}" id="price">
                                    </div>

                                    <div class="mb-3 pe-5 ps-5">
                                        <label for="brand">Brand</label>
                                        <select name="brand_id" id="brand" class="form-control">
                                            <option value="{{ $product->product_brand->id }}">
                                                {{ $product->product_brand->name }}</option>
                                            @foreach ($brand as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3 pe-5 ps-5">
                                        <label for="categorie">Category</label>
                                        <select name="category_id" id="categorie" class="form-control">
                                            <option value="{{ $product->product_category->id }}">
                                                {{ $product->product_category->name }}
                                            </option>
                                            @foreach ($categorie as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
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
            <a href='admin.product.index' class="text-decoration-none text-white btn btn-secondary md-1">Back</a>
        </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
