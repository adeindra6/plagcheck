@extends("layout.layout")

@section("content")

    <form method="post" action="{{ route('loginProcess') }}">
        @csrf
        <div class="row height-width-100">

            <div class="col-md-6 login-page-left">
                <p class="plagcheck-login-logo">plagcheck</p>
                <p class="plagcheck-subtitle">Scan Secure Succeed</p>
            </div>

            <div class="col-md-6 login-page-right">
                <p class="hello-again-text">Hello Again!</p>
                <p class="hello-again-subtitle">Login to Your Account</p>

                <input type="text" placeholder="Enter to your email" id="email" name="email" class="login-input">
                <div class="input-container">
                    <input type="password" placeholder="Password" id="password" name="password" class="login-input">
                    <i class="fa fa-eye-slash eye-icon" id="eyeIcon" onclick="togglePassword()"></i>
                </div>

                <a href="#" class="forgot-password-link">Forgot Password?</a>
                <input type="submit" name="submit" id="submit" class="login-button" value="Login">

                <div class="login-error-msg">{{ $errors->first('invalid_credential') }}</div>

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
    </form>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var eyeIcon = document.getElementById("eyeIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            }
        }
    </script>

@stop
