<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Job4u</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Success Hunt">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="{{ asset('assets/css/main.8d288f825d8dffbbe55e.css') }}" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome back,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>
                                    </div>
                                    <form action="{{ route('enduser.login.post') }}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="divider"></div>
                                    <h6 class="mb-0">No account? <a href="{{ route('enduser.register') }}" class="text-primary">Sign up now</a></h6>
                                </div>
                                <div class="modal-footer clearfix">
                                    {{-- <div class="float-left"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a></div> --}}
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Successhunt@2023</div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="{{ ('assets/scripts/main.8d288f825d8dffbbe55e.js') }}"></script></body>
</html>

