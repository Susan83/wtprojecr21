<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Parent<span>care.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn"><?php
                        session_start();
                        if(isset($_SESSION['username']))
                        {
                            echo $_SESSION['username'];
                        }
                        {
                        echo "";
                        }
                    ?></a></li>
                <li><a href="./view/viewProfile.php" class="menu-btn">View Profile</a></li>
                <li><a href="../Chat/page1.php" class="menu-btn">COMMUNICATION</a></li>
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#track" class="menu-btn">Trak</a></li>
                <li><a href="#items" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li>
                    <a href="../Chat/logout.php" class="menu-btn">
                        <?php
                        //session_start();
                        if(isset($_SESSION['username']))
                        {
                        echo "Log Out";
                        }
                        {
                        echo "";
                        }
                    ?>
                    </a>
                </li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">MAKE COMMUNICATION IMPACTFUL WITH US</div>
                <div class="text-2">CLOUD CARE</div>
            </div>
        </div>
    </section>


    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About US</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/SUSAN.jpg" alt="">
                </div>
                <div class="column right">

                    <p> Child care challenges have become a barrier to work, especially for mothers, who disproportionately take on unpaid caregiving responsibilities when their family cannot find or afford childcare. In Bangladesh, most parents have limited
                        knowledge on child care and rearing Ourprojectobjectistosolvethechildcaresystemforworkingparents.The name of our application project is “CLOUD CARE”. so, our software will help you to take care of your baby with an educated moderator.
                        So specifically, this created for childcare attendance tracking, accounting, and tuition payments .</p>

                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">our services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">

                        <div class="text"><a href="./view/addstudentInfo.php"> MODARETOR INFO</a></div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">

                        <div class="text">CHILD TRACK</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">

                        <div class="text">PAYMENT</div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title"> CHILD'S INFO </h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/1.jpg" alt="">
                        <div class="text">MEDICINE</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/3.jpg" alt="">
                        <div class="text">FOOD</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">

                        <img src="images/4.jpg" alt="">
                        <div class="text">ATTENDANCE</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/5.jpg" alt="">
                        <div class="text">WORLD

                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact</h2>
            <div class="contact-content">
                <div class="column left">

                    <div class="column right">
                        <div class="text">Message me</div>
                        <form action="#">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" placeholder="Name" required>
                                </div>
                                <div class="field email">
                                    <input type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Subject" required>

                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                            </div>
                            <div class="button-area">
                                <button type="submit">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>



    <script src="script.js"></script>
</body>

</html>