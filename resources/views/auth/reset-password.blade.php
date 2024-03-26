@extends('layouts.navbare')

@section('content')
<br><br><br>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

         <!-- login area start -->
         <section class="bd-login__area section-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="login__wrapper">
                            <div class="login__top mb-30 text-center">
                                <h3 class="login__title">Reset password Now!</h3>
                                
                            </div>
                            <div class="login__form">
                                    
                                    <div class="form__input-box">
                                        <div class="form__input style-two">
                                            <input type="email" placeholder="Enter your email" name="email" value="{{old('email', $request->email)}}" required autofocus autocomplete="username">
                                            <div class="form__icon"><span><i class="fa-light fa-envelope"></i></span>
                                            </div>
                                            <div>
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__input-box">
                                        <div class="form__input style-two">
                                            <input type="password" placeholder="Password" name="password" required autocomplete="new-password">
                                            <i class="fa fa-eye pass-icon"></i>
                                            <div class="form__icon"><span><i class="fa-light fa-lock"></i>
                                                </span>
                                            </div>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="form__input-box">
                                        <div class="form__input style-two">
                                            <input type="password" placeholder="Confirm Password"  name="password_confirmation" required autocomplete="new-password" >
                                            <i class="fa fa-eye pass-icon"></i>
                                            <div class="form__icon"><span><i class="fa-light fa-lock"></i>
                                                </span>
                                            </div>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                    
                                    <div class="login__btn">
                                        <button class="bd-btn w-100" type="submit">Reset password</button>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
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
