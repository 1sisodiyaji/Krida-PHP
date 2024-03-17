<!doctype html>
<html lang="en">

<head>
    <?php include_once '../Component/link.php' ?>
    <title> Login | Krida</title>
    <style>
        .form-control {
            border: none !important;
            outline: none !important;
            box-shadow: none !important;
            border-bottom: 1px solid #FFE164 !important;
        }

        .form-control::placeholder {
            color: white !important;
            opacity: 80%;
        }
    </style>
</head>
<body style=" background-color: #011528 ;width: 100vw; height: 100vh; margin: 0%; padding: 0%; overflow-x: hidden;">


<div class="container mb-4">
    <div class="row">
        <div class="col-lg-6  g-0">
            <div class="d-flex justify-content-end align-content-center my-5 py-5 gy-5 ">
                <img src="../assets/coprative.png" class="img-fluid " alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class=" h-100 d-flex justify-content-center align-items-center">
                <div class="  w-100">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a
                                    class="nav-link active"
                                    style="color: #FFE164; background-color: #031321"
                                    id="tab-login"
                                    data-mdb-pill-init
                                    href="#pills-login"
                                    role="tab"
                                    aria-controls="pills-login"
                                    aria-selected="true"
                            >Login</a
                            >
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                    class="nav-link"
                                    style="color: #FFE164; background-color: #031321"
                                    id="tab-register"
                                    data-mdb-pill-init
                                    href="#pills-register"
                                    role="tab"
                                    aria-controls="pills-register"
                                    aria-selected="false"
                            >Register</a
                            >
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content">
                        <div
                                class="tab-pane fade show active"
                                id="pills-login"
                                role="tabpanel"
                                aria-labelledby="tab-login"
                        >
                            <form>
                                <div class="text-center mb-3" style="color: #FFE164">
                                    <p>Sign in with:</p>
                                    <button data-mdb-ripple-init type="button" style="border : 1px solid #FFE164"
                                            class="btn  btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button data-mdb-ripple-init type="button" style="border : 1px solid #FFE164"
                                            class="btn  btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>
                                </div>

                                <p class="text-center" style="color: #FFE164">or:</p>

                                <!-- Email input -->
                                <div class="mb-4">
                                    <p id="email_error" style="color: #FFE164;"></p>
                                    <input type="email" id="email_id" class="form-control rounded-0 py-2"
                                           style=" background-color: rgba(3,26,48,1) ; color :#FFE164 "
                                           placeholder="email "/>
                                </div>

                                <!-- Password input -->
                                <div class="mb-4">
                                    <p id="pass_error" style="color: #FFE164;"></p>
                                    <input type="password" id="password" class="form-control rounded-0 py-2 "
                                           style=" background-color: rgba(3,26,48,1) ; color :#FFE164"
                                           placeholder="password"/>
                                </div>

                                <!-- 2 column grid layout -->
                                <div class="row mb-4">
                                    <div class="col-md-6 d-flex justify-content-center">

                                    </div>

                                    <div class="col-md-6 d-flex justify-content-center">
                                        <!-- Simple link -->
                                        <a href="#!">Forgot password?</a>
                                    </div>
                                </div>
                                <!--submit -->
                                <button id="login_button" data-mdb-ripple-init type="button"
                                        class="btn btn-block mb-4 text-capitalize py-3"
                                        style=" background-color : #FFE164 ; color :#011528; font-size: 1rem; ">Login
                                </button>
                            </form>
                        </div>
                        <div
                                class="tab-pane fade"
                                id="pills-register"
                                role="tabpanel"
                                aria-labelledby="tab-register"
                        >
                            <form>
                                <div class="text-center mb-3" style="color: #FFE164">
                                    <p>Sign in with:</p>
                                    <button data-mdb-ripple-init type="button" style="border : 1px solid #FFE164"
                                            class="btn  btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button data-mdb-ripple-init type="button" style="border : 1px solid #FFE164"
                                            class="btn  btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>
                                </div>

                                <p class="text-center" style="color: #FFE164">or:</p>

                                <!-- Name input -->
                                <div  class=" mb-4">
                                    <input type="text" id="registername" class="form-control rounded-0 py-2"
                                           style=" background-color: rgba(3,26,48,1) ; color :#FFE164 "
                                           placeholder="Name "/>

                                </div>

                                <!-- Mobile input -->
                                <div  class=" mb-4">
                                    <input type="number" id="registerphone" class="form-control rounded-0 py-2"
                                           style=" background-color: rgba(3,26,48,1) ; color :#FFE164 "
                                           placeholder="Mobile Number "/>

                                </div>

                                <!-- Email input -->
                                <div class="mb-4">
                                    <p id="email_error" style="color: #FFE164;"></p>
                                    <input type="email" id="email_id" class="form-control rounded-0 py-2"
                                           style=" background-color: rgba(3,26,48,1) ; color :#FFE164 "
                                           placeholder="email "/>
                                </div>

                                <!-- Password input -->
                                <div class="mb-4">
                                    <p id="pass_error" style="color: #FFE164;"></p>
                                    <input type="password" id="password" class="form-control rounded-0 py-2 "
                                           style=" background-color: rgba(3,26,48,1) ; color :#FFE164"
                                           placeholder="password"/>
                                </div>


                                <!-- Repeat Password input -->
                                <div class="mb-4">
                                    <p id="repeatpass_error" style="color: #FFE164;"></p>
                                    <input type="password" id="repeatPassword" class="form-control rounded-0 py-2 "
                                           style=" background-color: rgba(3,26,48,1) ; color :#FFE164"
                                           placeholder="Repeat password"/>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input
                                            class="form-check-input me-2"
                                            type="checkbox"
                                            value=""
                                            id="registerCheck"
                                            checked
                                            aria-describedby="registerCheckHelpText"
                                    />
                                    <label class="form-check-label" for="registerCheck" style="color: #FFE164">
                                        I have read and agree to the terms
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button id="login_button" data-mdb-ripple-init type="button" class="btn btn-block mb-4 text-capitalize py-3"
                                      style=" background-color : #FFE164 ; color :#011528; font-size: 1rem; "> sign up
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Pills content -->
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once '../Component/Footer.php' ?>

<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>