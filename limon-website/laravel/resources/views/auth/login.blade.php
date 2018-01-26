@extends('layouts.admin.login')

@section('icerik')

    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Login form -->
        <form method="POST" class="login-form" action="{{ route('login') }}">
            @csrf

            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">{{config('app.name')}} Giriş Yap</h5>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input id="email" type="text"
                               class="form-control{{ $errors->has('Username') ? ' is-invalid' : '' }}" name="Username"
                               value="{{ old('Username') }}" required autofocus placeholder="Kullanıcı Adı">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('Password') ? ' is-invalid' : '' }}"
                               name="password" required placeholder="Parola">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Giriş Yap <i
                                    class="icon-circle-right2 ml-2"></i></button>
                    </div>


                </div>
            </div>
        </form>
        <!-- /login form -->

    </div>
    <!-- /content area -->
@endsection
