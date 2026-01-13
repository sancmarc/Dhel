<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.header')
</head>

<body class="d-flex flex-column min-vh-100 bg-login">
    <div class="container">
        <div class="row justify-content-center mt-5 text-dark">
            <div class="col-md-5">
                <div class="card shadow-lg mb-5 bg-body rounded mt-5">
                    <div class="card-header">
                        <h3 class="my-4 text-center">{{ __('Login') }}</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="text-center invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="text-center invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center text-light justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small">Hi Q M Furniture </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>