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

    <h2>Register Form</h2>
    <div id="error"></div>

    <form  action="{{url('register_page')}}" method="POST" >

    <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" name="name" class="form-control" id="usr">
        @error('name')
        <strong>{{ $message }}</strong>
        @enderror
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email">
            @error('email')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd">
            @error('password')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="pwdconfirm">Password Confirm:</label>
            <input type="password" name="password_confirm" class="form-control" id="pwdconfirm">
            @error('password_confirm')
            <strong>{{ $message }}</strong>
            @enderror
        </div>

        <button type="submit"   class="btn btn-primary form-control">Sign Up</button>
    </form>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

</script>
</html>
