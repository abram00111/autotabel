@extends('layouts.auth')

@section('title')
    Регистрация
@endsection

@section('content')

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="public/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="post" action="/register">
                    @csrf
                    <span class="login100-form-title">
                        Регистрация
                    </span>

                    <div class="wrap-input100 validate-input"
                         data-validate="Это поле обязательное">
                        <input class="input100 @error('login') is-invalid @enderror" type="text" name="login"
                               placeholder="Логин" value="{{ old('login') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('login')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input"
                         data-validate="Это поле обязательное и должно быть email: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" type="text" name="email"
                               placeholder="Email" value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input"
                         data-validate="Это поле обязательное">
                        <input class="input100 @error('surname') is-invalid @enderror" type="text" name="surname"
                               placeholder="Фамилия" value="{{ old('surname') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('surname')
                    <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input"
                         data-validate="Это поле обязательное">
                        <input class="input100 @error('lastname') is-invalid @enderror" type="text" name="lastname"
                               placeholder="Имя" value="{{ old('lastname') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('lastname')
                    <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 ">
                        <input class="input100 @error('patronymic') is-invalid @enderror" type="text" name="patronymic"
                               placeholder="Отчество" value="{{ old('patronymic') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('patronymic')
                    <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <div class="wrap-input100 validate-input" data-validate="Это поле обязательное">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"
                               placeholder="Пароль">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>

                    </div>
                    @error('password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Это поле обязательное">
                        <input class="input100" type="password" name="password_confirmation"
                               placeholder="Повторите пароль">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>

                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Регистрация
                        </button>
                    </div>


                    <div class="text-center p-t-12">
                        <a class="txt2" href="/login">
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                            Если у Вас уже есть аккаунт, то авторизуйтесь
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
