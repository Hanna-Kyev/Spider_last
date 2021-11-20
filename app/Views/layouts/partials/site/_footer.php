    <!-- footer -->
    <footer class="bg-dark text-white mt-3">
        <!-- container -->
        <div class="container py-4">
            <!-- row -->
            <div class="row py-5">
                <!-- 3 columns -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <h6 class="text-uppercase">Customer services</h6>
                    <ul class="list-unstyled">
                        <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
                        <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
                        <li><a class="footer-link" href="#">Online Stores</a></li>
                        <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <h6 class="text-uppercase">Company</h6>
                    <ul class="list-unstyled">
                        <li><a class="footer-link" href="#">What We Do</a></li>
                        <li><a class="footer-link" href="#">Available Services</a></li>
                        <li><a class="footer-link" href="#">Latest Posts</a></li>
                        <li><a class="footer-link" href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="text-uppercase">Social media</h6>
                    <ul class="list-unstyled footer-socials social-icon">
                        <li><a class="footer-link twitter" href="https://twitter.com/"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a class="footer-link facebook" href="https://www.facebook.com/"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a class="footer-link instagram" href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i> Instagram </a></li>
                        <li><a class="footer-link linkedin" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i> Linkedin </a></li>
                    </ul>
                </div>
            </div>
            <div class="border-top pt-4">
                <!-- 2 columns -->
                <div class="row">
                    <div class="col-lg-6">
                        <p class="small text-muted mb-0"> &copy; 2021 Spider-BookStore.</p>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <p class="text-white reset-anchor">Template designed by Anna<a href="#">My Temple</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- login -->
    <div id="login" class="modal">
        <div class="dialog">
            <a href="#close" title="Close" class="close">X</a>
            <form class="text-center border border-light p-5 m-auto" method="POST" action="/login">
                <h3 class="h4 mb-4">Sign in</h3>
                <!-- Email -->
                <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
                <!-- Password -->
                <input type="password" name="password" class="form-control mb-4" placeholder="Password">
                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember_me" class="custom-control-input" id="formRemember">
                            <label class="custom-control-label" for="formRemember">Remember me</label>
                        </div>
                        <p class="my-1">
                            <!-- Forgot password -->
                            <a href="/forgot">Forgot password?</a>
                        </p>
                    </div>
                </div>
                <!-- Sign in button -->
                <button class="btn btn-dark btn-block my-4" type="submit">Sign in</button>
                <!-- Register -->
                <p>Not a member?<a href="#register">Register</a></p>
                <!-- Terms of service -->
            </form>
        </div>
    </div>

    <!-- Sign Up -->
    <div id="register" class="modal">
        <div class="dialog">
            <a href="#close" class="close">X</a>
            <form class="text-center border p-5 m-auto" action="/register" method="POST">
                <h4 class="h4 mb-4"> Sign Up </h4>
                <div class="row mb-4">
                    <div class="col-md-6 mx-0">
                        <input type="text" class="form-control" name="first_name" placeholder="Enter your name:" autofocus name="first_name"">
                </div>
                <div class=" col-md-6 mx-0">
                        <input type="text" class="form-control" name="last_name" placeholder="Enter your surname:">
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email:">
                    <input type="password" class="form-control" name="password" placeholder="Enter Your password:">
                    <small class="form-text text-muted mb-4">At least 8 characters and 1 digit</small>
                    <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Your password:">
                    <small class="form-text text-muted mb-4">Retype password again</small>
                    <!-- Phone number -->
                    <input type="tel" class="form-control" name="phone_number" placeholder="Phone number">
                    <small class="form-text text-muted mb-4">Optional - for two step authentication</small>
                </div>
                <!-- Sign up button -->
                <button class="btn btn-dark my-4 btn-block" type="submit">Register</button>

                <p>By clicking <em> Register </em> you agree to our
                    <a href="" target="_blank">terms of service</a>
                </p>
                <p class="y-1"><small class="form-text text-muted mb-4">Already a member?
                        <a href="#login"> Sign In </a></small> </p>
            </form>
        </div>
    </div>