@extends('layout.mainweb')

@section('title')
    PIMUS 14 - Sign Up
@endsection

@section('content')
<style type="text/css">
.form-login-register{
    color: #fff !important;
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
@media screen and (min-width:576px){
    .form-regis-hp{
        display: none;
    }
}
@media screen and (max-width:576px){
    .form-login-register{
        display: none;
    }
    .form-regis-hp{
        display: block;
    }
    .transBox{
        display: flex;
        flex-direction: column;
        gap: 32px
    }
    .form-login-register input{
        margin-left: 0 !important; 
        color: #fff !important;
        margin-bottom: 0 !important;
    }
    .form-login-register .transBox{
        padding: 28px 20px;
    }
    .transBox2{
        position: relative;
        color: #fff;
        display: flex;
        flex-direction: column;
    }
    .transBox2 label{
        position: absolute;
        top: 50%;
        left: 16px;
        transform: translateY(-50%);
        color: #fff;
        font-size: 22px;
        pointer-events: none;
        transition: 0.3s;
    }

    .transBox2 input:focus ~ label,
    .transBox2 input:valid ~ label{
        top: 0;
        transform: translateY(-24px);
        left: 16px;
        font-size: 16px;
        padding: 0 2px;
    }
}

</style>
    <section id="login" class="mb-5" style="margin-top: 150px">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-12 col-12"></div>
                <div class="col-lg-6 col-md-12 col-12">
                    <img src="{{ url('/assets/images/logo/LOGO PIMUS 14-03.png') }}" alt="PIMUS XI" class="mb-4">
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if (Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                            @endif
                        @endforeach
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="form-login-register">
                        @csrf
                        <div class="transBox">
                            <table>
                                <tr>
                                    <div class="transBox2">
                                        <td style="width: 200px">
                                            <p class="colorText">NAMA LENGKAP : </p>
                                        </td>
                                        <td>
                                            <input type="text" name="nama" placeholder="" class="@error('nama') is-invalid @enderror"
                                        required autofocus autocomplete="name">
                                        </td>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </tr>
                                <tr>
                                    <div class="transBox2">
                                        <td>
                                            <p class="colorText">NRP : </p>
                                        </td>
                                        <td>
                                            <input type="number" id="nrp" min='100000000' max='999999999' name="nrp" placeholder="" class="@error('nrp') is-invalid @enderror" maxlength="9" required>
                                        </td>
                                        @error('nrp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!-- <input type="email" id="email" name="email" placeholder="Email Gooaya" class="@error('email') is-invalid @enderror"
                                            required readonly>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror -->
                                    </div>
                                </tr>
                                <tr>
                                    <div class="transBox2">
                                        <td>
                                            <p class="colorText">PASSWORD : </p>
                                        </td>
                                        <td>
                                            <input type="password" name="password" placeholder="Min. 8 Characters"
                                            class="@error('password') is-invalid @enderror" required autocomplete="new-password">
                                        </td>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </tr>
                                <tr>
                                    <div class="transBox2">
                                        <td>
                                            <p class="colorText">RETYPE PASSWORD : </p>
                                        </td>
                                        <td>
                                            <input type="password" name="password_confirmation" placeholder="Min. 8 Characters"
                                            class="@error('password_confirmation') is-invalid @enderror" autocomplete="new-password">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    
                                    </div>
                                </tr>
                            </table>
                        </div>
                        <button class="btnLogin">Sign Up</button>
                        <p class="register">Already have an account<span style="font-family: 'Arial';">?</span> <a href="{{ url('/login') }}"> Login</a></p>
                    </form>


                    <form method="POST" action="{{ route('register') }}" class="form-login-register form-regis-hp">
                        @csrf
                        <div class="transBox">
                            <div class="input-field">
                                <div class="transBox2">
            
                                    <input type="text" name="nama" placeholder=""
                                        class="@error('nama') is-invalid @enderror" required autofocus autocomplete="name">
                                    <label for='nama' class="colorText">NAMA LENGKAP </label>
                                </div>
                                @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            
                            <div class="input-field">
                                <div class="transBox2">
            
                                    <input type="number" id="nrp" name="nrp" placeholder=""
                                        class="@error('nrp') is-invalid @enderror" maxlength="9" min='100000000' max='999999999' required>
                                        <label class="colorText">NRP </label>
                                </div>
                                @error('nrp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!-- <input type="email" id="email" name="email" placeholder="Email Gooaya" class="@error('email') is-invalid @enderror"
                                    required readonly>
                                @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror -->
                            </div>
                           
                            <div class="input-field">
                                <div class="transBox2">
                                    <input type="password" name="password" placeholder=""
                                        class="@error('password') is-invalid @enderror" required autocomplete="new-password">
                                    <label class="colorText">PASSWORD <span>(Min. 8 Characters)</span> </label>
                                    {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                  
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        
                            <div class="transBox2">    
                                <input type="password" name="password_confirmation" placeholder=""
                                    class="@error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
                                    <label class="colorText">RETYPE PASSWORD</label>

                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                        </div>
                       
                        <button class="btnLogin">Sign Up</button>
                        <p class="register">Already have an account<span style="font-family: 'Arial';">?</span> <a href="{{ url('/login') }}"> Login</a>
                        </p>
                    </div>
                
                    </form>
                </div>
                <div class="col-lg-3 col-md-12 col-12"></div>
            </div>
        </div>
    </section>
@endsection
