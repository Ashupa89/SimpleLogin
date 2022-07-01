<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">

    <h2>Create Product/h2>
    <form  action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" value="{{$product->name}}" name="name" class="form-control" id="usr">
            @error('name')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="text">Description:</label>
            <input type="text" value="{{$product->description}}"name="description" class="form-control" id="text">
            @error('description')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="file">Image:</label>
            <input type="file" value="{{$product->file}}" name="file" class="form-control"  id="file" >
            @error('file')
            <strong>{{ $message }}</strong>
            @enderror
        </div>

        <button type="submit"   class="btn btn-primary form-control">Create Product</button>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

</script>
</html>
