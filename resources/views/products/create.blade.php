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
        <h1>Create A Product</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name" />
                <small id="helpId" class="form-text text-muted">Enter thy name here, sire</small>
            </div>

            <div class="mb-3">
                <label for="qty" class="form-label">quantity</label>
                <input type="number" class="form-control" name="qty" id="qty" placeholder="qty" />
                <small id="helpId" class="form-text text-muted">Enter thy qty here, sire</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="price" class="form-control" name="price" id="price" placeholder="price" />
                <small id="helpId" class="form-text text-muted">Enter thy price here, sire</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="description" />
                <small id="helpId" class="form-text text-muted">Enter thy description here, sire</small>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">
                    Save a new Product
                </button>
            </div>


        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>