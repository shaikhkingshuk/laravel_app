<!DOCTYPE html>
<html>

<head>
    <title>Creating Product</title>
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
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1>Create Product</h1>
                <div class="card mt-3 p-3">
                    <form method="POST" action="/product/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" value="{{ old('price') }}" class="form-control">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <textarea class="form-control" rows="4" name="status">{{ old('status') }}</textarea>
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>


                </div>
                </form>
            </div>

        </div>
    </div>
    </div>
</body>

</html>
