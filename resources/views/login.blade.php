@extends("layout.layout")

@section("content")

    <div class="row height-width-100">

        <div class="col-md-6 login-page-left">
            <p class="plagcheck-login-logo">plagcheck</p>
            <p class="plagcheck-subtitle">Scan Secure Succeed</p>
        </div>

        <div class="col-md-6 login-page-right">
            <p class="hello-again-text">Hello Again!</p>
            <p class="hello-again-subtitle">Login to Your Account</p>

            <input type="text" placeholder="Enter to your email" id="email" name="email" class="login-input">
            <input type="password" placeholder="Password" id="password" name="password" class="login-input">
            <a href="#" class="forgot-password-link">Forgot Password?</a>
            <a href="/dashboard" class="login-button">Login</a>

            <p class="footer-login-text">Or continue with</p>
            <div class="google-facebook-button-container">
                <a href="#" class="google-facebook-button">
                    <img src="{{asset("assets/image/google-logo.png")}}" width="30" height="30" class="me-2">
                    Google
                </a>
                <a href="#" class="google-facebook-button">
                    <img src="{{asset("assets/image/facebook-icon.png")}}" width="30" height="30" class="me-2">
                    Facebook
                </a>
            </div>

            <p class="footer-login-text">Not registered? <a href="#" class="footer-login-link">Sign Up now!</a></p>

        </div>

    </div>

@stop
