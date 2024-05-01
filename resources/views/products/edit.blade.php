<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="background: lightgray;">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- IMAGE --}}
                            <div class="form-group mb-3">
                                <label for="image" class="font-weight-bold">IMAGE</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                                @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- TITLE --}}
                            <div class="form-group mb-3">
                                <label for="title" class="font-weight-bold">TITLE</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $product->title) }}" placeholder="Masukkan judul produk">

                                @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- DESCRIPTION --}}
                            <div class="form-group mb-3">
                                <label for="description" class="font-weight-bold">DESCRIPTION</label>
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" row="5" placeholder="Masukkan deskripsi produk">{{  old('description', $product->description) }}</textarea>

                                @error('description')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- PRICE --}}
                            <div class="form-group mb-3">
                                <label for="price" class="font-weight-bold">PRICE</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Masukkan harga produk" value="{{ old('price', $product->price) }}">

                                @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- STOCK --}}
                            <div class="form-group mb-3">
                                <label for="stock" class="font-weight-bold">STOCK</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" placeholder="Masukkan stok produk" value="{{ old('stock', $product->stock) }}">

                                @error('stock')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-md btn-primary me-3" type="submit">UDPATE</button>
                            <button class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bunder.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</body>
</html>
