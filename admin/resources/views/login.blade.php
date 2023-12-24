<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICBJ | Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-1.jpeg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <div id="auth">
        
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/logo-2.jpeg') }}" style="width: 50%">
                                
                            </div>
                            @if(session()->has('loginError'))
                            <div class="alert alert-danger">
                               {{ session('loginError') }}
                            </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Email</label>
                                    <div class="position-relative">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}">
                                        
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                       
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                        {{-- <a href="auth-forgot-password.html" class='float-right'>
                                            <small>Forgot password?</small>
                                        </a> --}}
                                    </div>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="password" id="password" required>
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="clearfix">
                                    <button class="btn btn-primary float-right">Login</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
