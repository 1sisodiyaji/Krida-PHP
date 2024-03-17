<?php
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">

<head>
   <?php  include_once 'Component/link.php'?>
    <title> Krida | fantasy-Platform</title>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        .effect:hover {
            border-bottom: 1px solid #FFE164;
        }

        .nav-pills li a:hover {
            border-bottom: 1px solid #FFE164;
        }
    </style>
</head>

<body style=" background-color: #011528 ;width: 100vw; height: 100vh; margin: 0%; padding: 0%; overflow-x: hidden;">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: #031321">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/BrandName.png" width="45" alt=""></a>

        <div class="d-flex justify-content-around g-6  ms-4  align-items-center">
            <a href=""><p class=" ms-4 effect" style=" color : #FFE164">Home</p></a>
            <a href=""><p class=" ms-4 effect" style=" color : #FFE164">About us</p></a>
            <a href=""><p class=" ms-4 effect" style=" color : #FFE164">Point System</p></a>
            <a href=""><p class=" ms-4 effect" style=" color : #FFE164">Contact Us</p></a>
        </div>
        <div class="d-flex justify-content-evenly  align-items-center  ">
            <a href="">
                <div style="border-radius: 50% ; border : 1px solid #FFE164 " class="me-0 ">
                    <a href=""><img  src="assets/default_pic.png" width="45" alt="default pic"></a>
                </div>
            </a>
        </div>
    </div>
</nav>

<!--carousel-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
    <div class="carousel-inner" style="height: 50vh;">
        <div class="carousel-item active">
            <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="d-block w-100 h-100"
                 alt="Wild Landscape"/>
        </div>
        <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="d-block w-100  h-100" alt="Camera"/>
        </div>
        <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100  h-100 "
                 alt="Exotic Fruits"/>
        </div>
    </div>
</div>

<!--important to play section-->
<div class="row text-center mx-auto d-flex justify-content-evenly align-items-center mt-lg-5 m-0">
    <h3 style="color: #FFE164;">
        Some Easy Steps To Play Fantasy Games With Us..
    </h3>
    <div class="col-lg-3 col-10 text-secondary p-3">
        <i class="fi fi-rs-cricket fa-3x" style=" color: #FFE164; "></i>
        <br></br>
        <span style="font-size: 2rem ; color: #FFE164">
        Select a Match
        </span>
        <br/>
        Select the upcoming matches in Contest
    </div>
    <div class="col-lg-4 col-10 text-secondary p-3">
        <i class="fi fi-rs-check-circle fa-2x " style="color: #FFE164;"></i>
        <br></br>
        <span style="font-size: 2rem ; color: #FFE164">
        Get ready
        </span>
        <br/>
        Deposit Money And get ready for play betting
    </div>
    <div class="col-lg-3 col-10 text-secondary p-3">
        <i class="fi fi-rs-smile-beam fa-2x" style=" color: #FFE164; "></i>
        <br/>
        <span style="font-size: 2rem ; color: #FFE164">
        Enjoy
        </span>
        <br></br>
        Betting More And More & Enjoy the game
    </div>
</div>

<!--spin-->
<div class="container mt-lg-4 p-lg-4 p-1">
    <div class="row">
        <div class="col-lg-5 col-10 p-lg-4 p-3">
            <img src="/assets/coprative.png" class="img-fluid" alt="spin"/>
        </div>
        <div class="col-lg-5 col-12 p-lg-4 p-3">
            <h2 style="color: #FFE164">Unlock Free Points</h2>
            <p class="text-secondary">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Molestiae provident amet sunt eveniet iusto voluptatibus autem
                incidunt, nesciunt reiciendis perferendis impedit rerum aperiam
                quidem, dolor dolorum doloribus iure facilis nihil id rem soluta
                veritatis fuga blanditiis voluptatem? Libero ex voluptate sunt,
                nam laborum vitae dicta!
            </p>
            <button class="btn text-dark" style="background-color : #FFE164">Claim Now</button>
        </div>
    </div>
</div>

<!--faqs-->
<section>
    <div class="container-fluid mt-lg-5 mt-3">
        <div class="row mx-auto">
            <div class="col-lg-6 col-12 text-start">
                <h3 class="text-center" style="color: #FFE164">
                    Frequently Asked Questions
                </h3>
                <details
                        class="p-lg-2 p-1 m-lg-2 mt-2 questions"
                        style="color: #FFE164 ;background-color: #031321 "
                >
                    <summary style=" color: #FFE164">
                        What is Fantasy Sports?
                    </summary>
                    <p style=" color: #fff">
                        Fantasy sports is a strategy-based online sports game where
                        you can create a virtual team of real players, playing in live
                        matches worldwide. You earn points and win cash prizes based
                        on the performances of these players in actual matches.
                    </p>
                </details>
                <details
                        class="p-lg-2 p-1 m-lg-2 mt-2 questions"
                        style="color: #FFE164 ;background-color: #031321 "
                >
                    <summary style="color: #FFE164">
                        Is it safe to add money to Dream11 ?
                    </summary>
                    <p class="text-light">
                        Adding money to your Dream11 account is both simple and safe.
                        We have many different payment options enabled on Dream11 to
                        ensure that your personal details are safe with us. What's
                        more? After you verify your personal details, you can withdraw
                        the money that you win on Dream11 directly to your bank
                        account.
                    </p>
                </details>
                <details
                        class="p-lg-2 p-1 m-lg-2 mt-2 questions"
                        style="color: #FFE164 ;background-color: #031321 "
                >
                    <summary style="color: #FFE164">
                        How are Dream11 points calculated?
                    </summary>
                    <p class="text-light">
                        Dream11 points system is calculated on the basis of the
                        performance of the player in an actual match. Check Dream11
                        Fantasy Points System for various sports.{" "}
                    </p>
                </details>
                <details
                        class="p-lg-2 p-1 m-lg-2 mt-2 questions"
                        style="color: #FFE164 ;background-color: #031321 "
                >
                    <summary style="color: #FFE164">
                        When do I get my winnings?
                    </summary>
                    <p class="text-light">
                        A successfully processed withdrawal request via IMPS should
                        get credited almost instantly or within 3 working days. NEFT
                        should get credited within 3 working days for more details,
                        see this question posted on our helpdesk.
                    </p>
                </details>
                <details
                        class="p-lg-2 p-1 m-lg-2 mt-2 questions"
                        style="color: #FFE164 ;background-color: #031321 "
                >
                    <summary style="color: #FFE164">

                        How do I use the Dream11 discount coupon code?
                    </summary>
                    <p class="text-light">
                    <ul>
                        <li> Go to ‘Rewards’ at the bottom right corner</li>
                        <li>
                            {" "}
                            Click on ‘My Rewards’ and tap on ‘Have a discount coupon
                            code?’
                        </li>
                        <li> Enter your code, tap ‘Apply now'</li>
                        <li> Enter any contest and enjoy your discount</li>
                    </ul>
                    </p>
                </details>
                <details
                        class="p-lg-2 p-1 m-lg-2 mt-2 questions"
                        style="color: #FFE164 ;background-color: #031321 "
                >
                    <summary style="color: #FFE164">
                        How should I download the Dream11 app?{" "}
                    </summary>
                    <p class="text-light">
                        There are 3 ways in which you can download the Dream11 app.
                    <ol>
                        <li>
                            {" "}
                            Head to www.dream11.com on your desktop or mobile browser
                            and enter your mobile number to get the download link
                        </li>
                        <li>
                            {" "}
                            Alternatively, you can also give us a missed call on
                            1800-572-9878 to get the download link{" "}
                        </li>
                        <li>
                            {" "}
                            If you're an iOS user, you can also search for ‘Dream11’
                            in the App Store and download the app
                        </li>
                    </ol>
                    </p>
                </details>
                <details
                        class="p-lg-2 p-1 m-lg-2 mt-2 questions"
                        style="color: #FFE164 ;background-color: #031321 "
                >
                    <summary style="color: #FFE164">
                        Which type of contests can I join?{" "}
                    </summary>
                    <p class="text-light">
                        Select your favourite sport, click on a match from that sport,
                        create your Dream11 and join any public, private, head-to-head
                        or mega contests. <br></br>
                        You can also choose to join paid contests by paying the
                        contest entry amount or hone your skills by entering practice
                        contests before you compete with others.
                    </p>
                </details>
                <details
                        class="p-lg-2 p-1 m-lg-2 mt-2 questions"
                        style="color: #FFE164 ;background-color: #031321 "
                >
                    <summary style="color: #FFE164">
                        How to Play on Dream11 App?{" "}
                    </summary>
                    <p class="text-light">
                        Log in with your mobile number to register on Dream11 App.
                        Follow the instructions as you set up your player profile.
                        Once done, follow the steps to participate in this game of
                        mind and thrills!
                    </p>
                    <ul>
                        <li>Select the match</li>
                        <li>Pay entry fee and join contests</li>
                        <li>
                            Put your skills to test and create your Fantasy team
                        </li>
                        <li>
                            Check the real-time leaderboard while you watch the match
                            LIVE
                        </li>
                    </ul>
                    <p>
                        for more details, visit the how to play fantasy cricket page.
                    </p>
                </details>

            </div>
            <div class="col-lg-6 col-12 text-center" style="background-color:#031321 ">
                <h3 style=" font-size: 1.5rem ; color: #FFE164">
                    Today's Tournament
                </h3>
                <div class="card" style=" background-color: #031321">
                    <div class="card-body">
                        <div class="card-title row d-flex justify-content-center align-items-center">
                            <div class="col-lg-5 col-12 text-danger">
                                <h4>Time Remaining</h4>
                            </div>
                            <div class="col-lg-2 col-3 border border-danger p-2 m-1 text-danger">
                                03 <br/> Hours
                            </div>
                            <div class="col-lg-2 col-3 border border-danger p-2 m-1 text-danger">
                                44 <br/> Mins
                            </div>
                            <div class="col-lg-2 col-3 border border-danger p-2 m-1 text-danger">
                                01 <br/> Sec
                            </div>
                        </div>
                    </div>
                    <p class="card-text">

                    <div class="row">
                        <div class="col-lg-6">matches</div>
                        <div class="col-lg-6">location</div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--brands partner-->
<section>
    <div class="container-fluid mt-lg-5 mt-3" style="background-color: #031321">
        <div class="row">
            <div class="col-lg-6 col-12 text-center p-4" style="background-color: #031321">
                <h5 class=" p-4" style="color:#FFE164;"> Subscribe For Offers </h5>
                <div class="row g-0">
                    <div class="col-lg-10 col-10" data-mdb-input-init>
                        <input
                                type="email"
                                id="typeEmail"
                                class="form-control w-full  text-light"
                                style="background-color: #011528; border: 1px solid #FFE164 "
                                placeholder="Enter Your Email First .."
                        />
                    </div>
                    <div class="col-lg-2 col-2 d-flex justify-content-start align-items-center">
                        <button class="btn btn-sm  ms-1" style="background-color: #FFE164;">
                            <i class="fi fi-rs-paper-plane" style="color : #011528"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-4">
                <h3 class="text-center" style="color: #FFE164">
                    Our Supporting Partners
                </h3>
                <div class="row">
                    <img
                            src="/assets/G-Pay.png"
                            class="col-lg-3 col-3 p-5"
                            alt="Google pay"
                    />
                    <img
                            src="/assets/paypal.png"
                            class="col-lg-3 col-3 p-5"
                            alt="Paypal"
                    />
                    <img
                            src="/assets/Upi.png"
                            class="col-lg-3 col-3 p-5"
                            alt="upi"
                    />
                    <img
                            src="/assets/Visa.png"
                            class="col-lg-3 col-3 p-5"
                            alt="visa"
                    />
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'Component/Footer.php' ?>

<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>