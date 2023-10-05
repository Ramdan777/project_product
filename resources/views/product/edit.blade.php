<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>update product</title>
  </head>
  <body>
    <form action='{{ url('product/'.$product->id) }}' method='post'>
        @csrf
        @method('PUT')
        <a href='{{ url('product/' . $product->product_category->id) }}' class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
            </svg>
        </a>
        <div class="mb-3 row">
        <div class="mb-3">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" value="{{ $product->name }}" id="name">
        </div>

        <div class="mb-3">
            <label for="type">Type</label>
            <input name="type" type="text" class="form-control" value="{{ $product->type }}" id="type">
        </div>

        <div class="mb-3">
            <label for="color">Color</label>
            <input name="color" type="text" class="form-control" value="{{ $product->color }}" id="color">
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <input name="description" type="text" class="form-control" value="{{ $product->description }}" id="description">
        </div>

        <div class="mb-3">
            <label for="price">Price</label>
            <input name="price" type="text" class="form-control" value="{{ $product->price }}" id="price">
        </div>

        <div class="mb-3">
            <label for="brand">Brand</label>
            <select name="brand_id" id="brand" class="form-control">
                <option value="{{ $product->product_brand->id }}">{{ $product->product_brand->name }}</option>
                @foreach ($brand as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="categorie">Category</label>
            <select name="category_id" id="categorie" class="form-control">
                <option value="{{ $product->product_category->id }}">{{ $product->product_category->name }}</option>
                @foreach ($categorie as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-dark" type="submit">Simpan</button>
        </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
