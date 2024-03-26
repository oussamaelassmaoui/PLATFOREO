@extends('layouts.navbare')

@section('content')
<br><br><br>
    

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
         <!-- login area start -->
         <section class="bd-login__area section-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="login__wrapper">
                            <div class="login__top mb-30 text-center">
                                <h3 class="login__title">Forgot Password?</h3>
                                <p>Enter your email address to request password reset.</p>
                            </div>
                            <div class="login__form">
                                
                                    <div class="form__input-box">
                                        <div class="form__input style-two">
                                            <input name="email" id="email" type="email" placeholder="Enter your email" name="email" value="{{old('email')}}" required autofocus >
                                            <div class="form__icon"><span><i class="fa-light fa-envelope"></i></span>
                                            </div>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                         <x-auth-session-status class="mb-4" :status="session('status')" />
                                    </div>
                                    <div class="login__btn">
                                        <button class="bd-btn w-100" type="submit">Send Request</button>
                                    </div>
                                
                                <div class="login__register-now">
                                    <p>Remember your password?<a href="{{ route('login') }}"> Login</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- login area end -->
    </form>
@endsection
