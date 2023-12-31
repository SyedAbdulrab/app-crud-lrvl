<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Create Product</title>
</head>

<body>

    <div class="container mt-4">

        @if ($errors->any())
            <div class="list-group">
                @foreach ( $errors->all() as $error )
                <div
                class="alert alert-danger alert-dismissible fade show"
                role="alert"
            >
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
                <strong>Error!</strong> {{$error}}
            </div>
                @endforeach
            </div>
            
        @endif
        
        <script>
            var alertList = document.querySelectorAll(".alert");
            alertList.forEach(function (alert) {
                new bootstrap.Alert(alert);
            });
        </script>
        

        <h1>Edit A Product</h1>
        
        <div class="mb-4">
            <a href="{{ route('product.index') }}" class="btn btn-success">All Products</a>
        </div>
        <form method="post" action="{{ route('product.update',["product"=>$product]) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}" />
                <small id="helpId" class="form-text text-muted">Enter thy name here, sire</small>
            </div>

            <div class="mb-3">
                <label for="qty" class="form-label">quantity</label>
                <input type="number" class="form-control" name="qty" id="qty" placeholder="qty" value="{{$product->qty}}" />
                <small id="helpId" class="form-text text-muted">Enter thy qty here, sire</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="price" value="{{$product->price}}"/>
                <small id="helpId" class="form-text text-muted">Enter thy price here, sire</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="description" value="{{$product->description}}"/>
                <small id="helpId" class="form-text text-muted">Enter thy description here, sire</small>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">
                    Update Product
                </button>
            </div>


        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>