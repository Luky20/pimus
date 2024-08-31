@extends('layout.mainweb')

@section('title')
    PIMUS 14 - Login
@endsection

@section('content')
    <section id="login" class="mb-5" style="margin-top: 150px">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-12 col-12"></div>
                <div class="col-lg-6 col-md-12 col-12">
                    <img src="{{ url('/assets/images/logo/LOGO PIMUS 14-03.png') }}" alt="PIMUS XI" class="mb-4">
                    <form method="POST" action="{{ route('login') }}" class="form-login-register">
                        @csrf
                        <div class="transBox">
                            <table>
                                <tr>
                                    <div class="transBox2">
                                        <td style="width: 100px">
                                            <p class="colorText">SNRP : </p>
                                        </td>
                                        <td>
                                            <input id="email" type="text" class="@error('email') is-invalid @enderror" placeholder=""
                                            name="email" required autocomplete="text" maxlength=10 autofocus>
                                        </td>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </tr>
                                <tr>
                                    <div class="transBox2">
                                        <td>
                                            <p class="colorText">PASSWORD : </p>
                                        </td>
                                        <td>
                                            <input id="password" type="password" class="@error('password') is-invalid @enderror"
                                            placeholder="" name="password" required autocomplete="current-password">
                                        </td>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </tr>
                                
                            </table>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="forget" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password') }}<span style="font-family: 'Arial';">?</span>
                            </a>
                        @endif
                        <div class="clear"></div>
                        <button class="btnLogin">Login</button>
                        <p class="register">Don't have an account yet<span style="font-family: 'Arial';">?</span> <a href="{{ url('/register') }}"> Sign Up</a>
                        </p>
                    </form>
                </div>
                <div class="col-lg-3 col-md-12 col-12"></div>
            </div>
        </div>
    </section>
@endsection