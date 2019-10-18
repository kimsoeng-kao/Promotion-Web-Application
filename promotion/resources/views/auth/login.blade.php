<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="apple-touch-icon" href="{{asset('admin/apple-touch-icon.png')}}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset('admin/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/app-green.css')}}">

</head>

<body>
    <div class="auth">
        <div class="auth-container">
            <div class="card">
                <header class="auth-header">
                    <h1 class="auth-title">
                        <div class="logo">
                            <span class="l l1"></span>
                            <span class="l l2"></span>
                            <span class="l l3"></span>
                            <span class="l l4"></span>
                            <span class="l l5"></span>
                        </div> My Admin
                    </h1>
                </header>
                <div class="auth-content">
                    <p class="text-center">LOGIN TO CONTINUE</p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" class="form-control underlined" name="username" id="username" placeholder="Your username" required value="{{old('username')}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required>
                        </div>
                        <div class="form-group">
                            <label for="remember">
                                <input class="checkbox" id="remember" type="checkbox">
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                @if(count($errors)>0)
                                <div class="alert alert-warning" role="alert">
                                    Invalid username or password!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>


    <script src="{{asset('admin/js/vendor.js')}}"></script>
    <script src="{{asset('admin/js/app.js')}}"></script>

</body>

</html>