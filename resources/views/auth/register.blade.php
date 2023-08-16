<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('common/css/bootstrap.css')}}">
    <style>
        .max-350px{max-width: 350px;}
    </style>
</head>
<body>
    <div class="registerpage p-2">
        <div class="col-md-4 max-350px p-3 mx-4 mt-5 mx-auto shadow rounded-3">

            <h3 class="text-capitalize mx-auto text-center my-3">Register</h3>

            <form method="POST" action="{{route('registerUser')}}">
                @csrf
                
                <div class="form-group my-2">
                    <label class="my-1">Name</label>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" placeholder="Enter full name" name="name"
                    value="{{ old('name') }}">         
                </div>

                <div class="form-group my-2">
                    <label class="my-1">Email</label>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" class="form-control" placeholder="Enter email" name="email"
                    value="{{ old('email') }}">         
                </div>

                <div class="form-group my-2">
                    <label class="my-1">Password</label>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="password" name="password" class="form-control" placeholder="Password" 
                    value="{{ old('password') }}">
                </div>
                
                <button type="submit" class="btn btn-primary my-2">Register</button>

                <br>

                <p>already registered??
                    <a href="/login" class="btn btn-sm btn-primary">
                        login
                    </a>
                </p>

            </form>
        </div>
    </div>
</body>
</html>