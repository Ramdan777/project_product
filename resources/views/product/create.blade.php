<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>tambah product</title>
  </head>
  <body>
    <form action='{{ url('product') }}' method='post' enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>

        <div class="mb-3">
            <label for="type">Type</label>
            <input name="type" type="text" class="form-control" id="type">
        </div>

        <div class="mb-3">
            <label for="color">Color</label>
            <input name="color" type="text" class="form-control" id="color">
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <input name="description" type="text" class="form-control" id="description">
        </div>

        <div class="mb-3">
            <label for="price">Price</label>
            <input name="price" type="text" class="form-control" id="price">
        </div>

        <div class="mb-3">
            <label for="brand">Brand</label>
            <select name="brand_id" id="brand" class="form-control">
                <option value="">select one</option>
                @foreach ($brand as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="categorie">Category</label>
            <select name="category_id" id="categorie" class="form-control">
                <option value="">select one</option>
                @foreach ($categorie as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="photo">Image</label>
            <div class="input-group">
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-dark" type="submit">Simpan</button>
        </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
