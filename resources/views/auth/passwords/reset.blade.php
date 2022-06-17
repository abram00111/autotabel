@extends('layouts.auth')

@section('title')
    Авторизация
@endsection


@section('content')

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../public/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
                    @csrf

                    @if(isset($errorw))
                        <div class="alert alert-danger alert-dismissible">
                            <h5>Ошибка!</h5>
                            Неверный логин или пароль
                        </div>
                    @endif
                    <span class="login100-form-title">
                        Восстановление пароля
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Это поле обязательное и должно быть email: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" value="{{ old('email') }}" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Восстановить
                        </button>
                    </div>


                    <div class="text-center p-t-136">
                        <a class="txt2" href="/register">
                            Создайте аккаунт
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
