<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-form">
            <h3 class="text-center text-danger mb-4">Login</h3>
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Enter email">
                    {{-- @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}
                    @endif --}}
                    @error('email')
                    <span class="text-danger">{{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}
                    @endif
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="acceptTerms" name="remember">
                    <label class="form-check-label" for="acceptTerms">Rememeber Me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>



</body>

</html>
