@extends('layouts.main')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        @if (session('success'))
                            <div class="alert alert-success mt-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('loginError'))
                            <div class="alert alert-danger mt-4">
                                {{ session('loginError') }}
                            </div>
                        @endif


                        <div class="login-wrap p-4 p-lg-5">
                            <h3 class="text-center mb-4">Login Form</h3>
                            <form action="/login" class="login-form" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control rounded-left @error('email') is-invalid @enderror"
                                        placeholder="name@example.com" id="email" name="email" autofocus required
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group d-flex">
                                    <input type="password" class="form-control rounded-left" placeholder="Password"
                                        id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Login</button>
                                </div>

                            </form>


                            <small class="d-block text-center">Not Register? <a href="/register">Register Now!</a></small>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>
@endsection
