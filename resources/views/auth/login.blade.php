@extends('layouts.navbare')

@section('content')
<br><br><br>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- login area start -->
        <section class="bd-login__area section-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="login__wrapper">
                            <div class="login__top mb-30 text-center">
                                <h3 class="login__title">Hello Again</h3>
                                <p>Enter your credentials to access your account.</p>
                            </div>
                            <div class="login__form">

                                <div class="form__input-box">
                                    <div class="form__input style-two">
                                        <input name="email" id="email" type="email" placeholder="Email or Username"
                                            value="{{ old('email') }}" required autofocus autocomplete="username">
                                        <div class="form__icon"><span><i class="fa-light fa-user"></i></span></div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                </div>
                                <!-- Password -->
                                <div class="form__input-box">
                                    <div class="form__input style-two">
                                        <input name="password" id="password" type="password" placeholder="Password"
                                            required autocomplete="current-password">
                                        <i class="fa fa-eye pass-icon"></i>
                                        <div class="form__icon"><span><i class="fa-light fa-lock"></i>
                                            </span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    </div>
                                </div>
                                <div class="login__option mb-30 d-sm-flex justify-content-between">
                                    <div class="login__remember">
                                        <input type="checkbox" id="bd-remember"  name="remember">
                                        <label for="bd-remember">Remember me</label>
                                    
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <div class="login__forgot">
                                        <a  href="{{ route('password.request') }}" >Forgot Password?</a>
                                    </div> 
                                    @endif
                                </div>
                                <div class="login__btn">
                                    <button class="bd-btn w-100" type="submit">Sign in</button>
                                 
                                </div>

{{-- 
                                <div class="login__register-now">
                                    <p>Don’t have an account? <a href="{{ route('register') }}">Register Now</a></p>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- login area end -->

    </form>
    <script>
        // password show
        const triggerPassword = document.querySelector('.fa-eye');
        const showPassword = trigger => {
            trigger.addEventListener('click', () => {
                if (trigger.previousElementSibling.getAttribute('type') === 'password') {
                    trigger.previousElementSibling.setAttribute('type', 'text');
                    trigger.classList.remove('fa-eye');
                    trigger.classList.add('fa-eye-slash');
                } else if (trigger.previousElementSibling.getAttribute('type') === 'text') {
                    trigger.previousElementSibling.setAttribute('type', 'password');
                    trigger.classList.remove('fa-eye-slash');
                    trigger.classList.add('fa-eye');
                }
            });
        }
        showPassword(triggerPassword);

        //remember me
        const rmCheck = document.getElementById("bd-remember"),
            emailInput = document.getElementById("email");

        if (localStorage.checkbox && localStorage.checkbox !== "") {
            rmCheck.setAttribute("checked", "checked");
            emailInput.value = localStorage.username;
        } else {
            rmCheck.removeAttribute("checked");
        }

        function lsRememberMe() {
            if (rmCheck.checked && emailInput.value !== "") {
                localStorage.username = emailInput.value;
                localStorage.checkbox = rmCheck.value;
            } else {
                localStorage.username = "";
                localStorage.checkbox = "";
            }
        }
    </script>
@endsection
