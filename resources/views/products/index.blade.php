<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        @if (session()->has('success'))
            <div class="list-group">

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Success!</strong> {{ session('success') }}
                </div>

            </div>
        @endif

        <script>
            var alertList = document.querySelectorAll(".alert");
            alertList.forEach(function(alert) {
                new bootstrap.Alert(alert);
            });
        </script>


        <h1>Products</h1>
        <div class="mb-4">
            <a href="{{ route('product.create') }}" class="btn btn-success">Create Product</a>
        </div>


        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Quantity: {{ $product->qty }}</li>
                                <li class="list-group-item">Price: ${{ number_format($product->price, 2) }}</li>
                            </ul>
                            <div class="d-flex justify-content-start gap-2 mt-3">
                                <a href="#" class="btn btn-primary">View Details</a>
                                <!-- Edit button with yellow color -->
                                <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-warning">Edit</a>
        
                                <form method="post" action="{{ route("product.destroy", ['product' => $product]) }}">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        

    </div>










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>

</html>
