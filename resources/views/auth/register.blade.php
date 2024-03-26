@extends('layouts.navbare')

@section('content')
<br><br><br>
    <form method="POST" action="{{ route('register') }}" >
        @csrf

        
         <!-- login area start -->
         <section class="bd-login__area section-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="login__wrapper">
                            <div class="login__top mb-30 text-center">
                                <h3 class="login__title">Register Now!</h3>
                                <p>You can signup with you social account below</p>
                            </div>
                            <div class="login__form">
                               
                                    <div class="form__input-box">
                                        <div class="form__input style-two">
                                            <input type="text"  id="name" name="name" placeholder=" Username" value="{{old('name')}}" required autofocus autocomplete="name" >
                                            <div class="form__icon"><span><i class="fa-light fa-user"></i></span></div>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                    <!-- Email Address -->
                                    </div>
                                    <div class="form__input-box">
                                        <div class="form__input style-two">
                                            <input type="email" placeholder="Enter your email" name="email"  value="{{old('email')}}" required autocomplete="username" >
                                            <div class="form__icon"><span><i class="fa-light fa-envelope"></i></span>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__input-box">
                                        <div class="form__input style-two">
                                            <input type="password" placeholder="Password"  name="password" required autocomplete="new-password">
                                            <i class="fa fa-eye pass-icon"></i>
                                            <div class="form__icon"><span><i class="fa-light fa-lock"></i>
                                                </span>
                                            </div>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="form__input-box">
                                        <div class="form__input style-two">
                                            <input type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                            <i class="fa fa-eye pass-icon"></i>
                                            <div class="form__icon"><span><i class="fa-light fa-lock"></i>
                                                </span>
                                            </div>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />             
                                        </div>
                                    </div>
                                    <div class="login__option mb-30 d-sm-flex justify-content-between">
                                        <div class="login__remember">
                                            <input type="checkbox" id="bd-remember">
                                            <label for="bd-remember">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="login__btn">
                                        <button class="bd-btn w-100" type="submit">Sign up</button>
                                    </div>
                                
                            
                                <div class="login__register-now">
                                    <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                                </div>
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
