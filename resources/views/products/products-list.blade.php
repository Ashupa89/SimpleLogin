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
<div class="container-fluid">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Products's List</h3>
        </div>
        <div class="card-body">
            <table align="center" cellspacing="5" class="table table-bordered table-hover table-striped" id="datatable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Create Date</th>
                    <th class="project-actions text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td><img src="image\{{$product->image}}" alt="" width="50px" height="50px"></td>
                        <td>{{date($product->created_at), date('Y-m-d')}}</td>
                        <td class="text-center">
                            <a href="{{url('products/'.$product->id.'/edit')}}" title="Edit">
                               Edit
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="{{url('products/'.$product->id)}}"   title="Click to delete">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
