@extends('layouts.main')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="text-center mb-4">Register Form</h3>
                        <form action="/register" method="POST" class="register-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left @error('name') is-invalid @enderror"
                                    placeholder="Username" name="name" id="name" required
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control rounded-left @error('email') is-invalid @enderror"
                                    placeholder="Email" name="email" id="email" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password"
                                    class="form-control rounded-left @error('password') is-invalid @enderror"
                                    placeholder="Password" name="password" id="password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit px-3">Register</button>
                            </div>
                            <div class="form-group">
                                <small class="text-center d-block">Already Registered? <a href="/login"> Log In</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
