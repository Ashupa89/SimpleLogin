<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <h2> Login Form</h2>
    <div id="error"></div>
    <form method="post" action="{{url('login')}}">
        <div class="form-group">
            <label for="username"><b>Email</b></label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email" id="usr">
            @error('email')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="psw"><b>Password</b></label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password">
            @error('password')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary form-control">Log In</button>
    </form>
</div>
</body>
</html>
