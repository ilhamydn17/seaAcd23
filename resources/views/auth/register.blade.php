@extends('auth.masterAuth')

@section('content-auth')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="{{ asset('assets/img/stisla-fill.svg') }}" alt="logo" width="100"
                            class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>

                        <div class="card-body">
                            <form class="need-validation" action="{{ route('register') }}" method="POST">
                                @csrf
                                {{-- USERNAME & NAME --}}
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="username">Username</label>
                                        <input id="username" type="text"
                                            class="form-control
                                        @error('username')
                                            is-invalid
                                        @enderror"
                                            name="username" required>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Nama</label>
                                        <input id="name" type="text"
                                            class="form-control
                                        @error('name')
                                            is-invalid
                                        @enderror
                                        "
                                            name="name" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- PASSWORD --}}
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password"
                                            class="form-control pwstrength
                                            @error('password')
                                                is-invalid
                                            @enderror
                                        "
                                            data-indicator="pwindicator" name="password" required>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password_confirmation" class="d-block">Password Confirmation</label>
                                        <input id="password_confirmation" type="password" class="form-control"
                                            name="password_confirmation" required>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- AGE --}}
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="birthdate">Tanggal Lahir</label>
                                        <input id="birthdate" type="date" class="form-control" name="birthdate" required>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Developed by Ilham Yudantyo &copy; 2023
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
