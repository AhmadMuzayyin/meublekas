@extends('layouts.Frontend.FrontendLayout')
@section('content')
    <!-- SignIn Details  Start -->
    <section id="sign-in-screen">
        <div class="container">
            <div class="sign-in-screen_full">
                <div class="sign-in-screen-top">
                    <h1>Welcome Back!</h1>
                    <p class="sign-in-cont">Sign in to continue</p>
                    <form class="sign-in-form mt-32" action="{{ route('auth.login') }}" method="POST">
                        @csrf
                        <div class="form-sec">
                            <label class="txt-lbl">Email</label><br>
                            <input type="email" id="email" name="email" placeholder="yourname@mail.com"
                                class="txt-input">
                            <div class="form_bottom_boder"></div>
                        </div>
                        <div class="form-sec mt-16">
                            <label class="txt-lbl">Password</label><br>
                            <input type="password" id="password" name="password" placeholder="********" class="txt-input">
                            <div class="form_bottom_boder"></div>
                        </div>
                        <div class="sign-in mt-32">
                            <button type="submit" style="border: 0">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- SignIn Details  End -->
@endsection
