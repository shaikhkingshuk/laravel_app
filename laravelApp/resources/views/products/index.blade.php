<!DOCTYPE html>
<html>

<head>
    <title>All Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>




    <nav class="navbar navbar-expand-sm bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="/"> Home </a>
            </li>
        </ul>
    </nav>

    <br>
    <div class="container">
        <div class="text-right">
            <a href="product/create" class="btn btn-dark mt-2">Add Product</a>
        </div>
        <h1>Products</h1>


        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <img src="products/{{ $product->image }}" class="rounded-circle" width="50"
                                height="50">
                        </td>
                        <td>
                            <a href="product/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                            <a href="product/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>




</body>

</html>
