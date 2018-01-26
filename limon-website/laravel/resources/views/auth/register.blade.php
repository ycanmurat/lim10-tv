@extends('layouts.admin.login')

@section('icerik')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="zm-section bg-white pt-40 pb-70" style="width:700px;margin:0 auto;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <div class="section-title-2 mb-40">
                            <h3 class="inline-block uppercase">Yeni Kullanıcı Kaydı</h3>
                            <p>Aşağıdaki formu Doldurarak Hızlıca Kayıt Olabilirsiniz</p>
                        </div>
                    </div>
                </div>
                <div class="registation-form-wrap">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-input">
                                    <label>Adınız</label>
                                    <input id="Name" type="text" class="{{ $errors->has('Name') ? ' is-invalid' : '' }}" name="Name" value="{{ old('Name') }}" required>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="single-input">
                                    <label>Soyadınız</label>
                                    <input id="LastName" type="text" class="{{ $errors->has('LastName') ? ' is-invalid' : '' }}" name="LastName" value="{{ old('LastName') }}" required>

                                    @if ($errors->has('LastName'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('LastName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="single-input">
                                    <label>Kullanıcı Adınız</label>
                                    <input id="Username" type="text" class="{{ $errors->has('Username') ? ' is-invalid' : '' }}" name="Username" value="{{ old('Username') }}" required>

                                    @if ($errors->has('Username'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Username') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="single-input">
                                    <label>Şifreniz</label>
                                    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="single-input">
                                    <label>Yeni Şifreniz</label>
                                    <input id="password-confirm" type="password" name="password_confirmation" required>
                                </div>



                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="single-input">
                                    <button class="submit-button mt-20 inline-block" type="submit">Kayıt OL</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </form>
@endsection
