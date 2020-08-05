<?php
    include('../../config.php');
    session_start();
    if(!isset($_SESSION['regd_no'])) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spectrum</title>
    <link rel="icon" href="../../assets/tablogo.png">
    <!----------------Font Styles--------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">


    <!-----------------------------CSS FILES------------------>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/glider.css" />

    <!----------------AOS------------------>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



    <!-- ---------------------------------------BOOTSTRAP----------------------------- -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap    CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>

<body>

    <!-- -----------------------------------------------------ICON BAR----------------------------- -->
    <div class="icon-bar">
        <a href="https://www.facebook.com/spCETrum"><i class="fab fa-facebook-f text-white"></i></a>
        <a href="https://github.com/Spectrum-CETB"><i class="fab fa-github text-white"></i></a>
        <a href="https://www.linkedin.com/in/spectrum-cet-3b71431b1/"><i class="fab fa-linkedin-in text-white"></i></a>
        <a href="https://www.instagram.com/spectrum.cetb/?hl=en"><i class="fab fa-instagram text-white"></i></a>
    </div>



    <!-- ----------------------------  Navigation ---------------------------------------------- -->
    <div class="banner" id="home">
        <header>
            <a href="#" class="logo">Spectrum</a>
            <div class="toggle-collapse">
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a href="../index.html#home">Home</a>
                        <a href="../index.html#about">About Us</a>
                        <a href="../index.html#projects">Projects</a>
                        <a href="../index.html#team">Team</a>
                        <a href="../mozilla-campus-club">Mozilla Campus Club</a>
                        <a href="../index.html#contact">Contact us</a>

                    </div>
                </div>

                <div class="toggle-icons" onclick="openNav()">
                    <i class="fas fa-bars"></i>
                </div>


                <script>

                    function openNav() {
                        document.getElementById("myNav")
                            .style.height = "100%";
                    }

                    function closeNav() {
                        document.getElementById("myNav")
                            .style.height = "0%";
                    }

                </script>

            </div>

            <div class="mid-nav">
                <ul class="nav-items">
                    <li class="nav-link current">
                        <a href="#home">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="#about">About Us</a>
                    </li>

                    <li class="nav-link">
                        <a href="#projects">Projects</a>
                    </li>
                    <li class="nav-link">
                        <a href="#team">Team</a>
                    </li>
                    <li class="nav-link">
                        <a href="#faq">FAQ</a>
                    </li>
                    <li class="nav-link">
                        <a href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </header>

    </div><br><br><br><br>
    <!-- Navbar ends -->

    <!-- Certificate status! -->
            <?php
                $regd_no = $_SESSION['regd_no'];
                $search = "SELECT * FROM verify WHERE regd_no='$regd_no'";
                $search_result = mysqli_query($con,$search) or die(mysqli_error($con));
                $row = mysqli_fetch_assoc($search_result);
            ?>
            <div class="container text-center mt-4">
                <div class="card" style="display:inline-block;width: 45em;">
                <h1 class="lead pr-auto pl-auto mt-4">
                            Status : <?php echo $row['status']; ?>
                        </h1>
                    <div class="card-body">
                        <p class="lead">Name: <?php echo $row['name']; ?></p>
                        <p class="lead">Registration No. : <?php echo $row['regd_no']; ?></p>
                        <a href="./certificates/<?php echo $row['name'] ?>.pdf" style="border-radius: 25px;" class="btn btn-success">Download certificate</a>  
                        <a href="back.php" style="border-radius: 25px;background-color: #ff6611 !important;" class="btn btn-primary btn-card">Go back to the main page!</a> 
                    </div>
                </div>
            </div><br>



     <!-- ---------------------------------------------FOOTER----------- -->
     <footer class="page-footer bg-dark" id="contact">
        <div class="tab">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-12 text-center">
                        <a href="https://www.facebook.com/spCETrum"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                        <a href="https://github.com/Spectrum-CETB"><i class="fab fa-github text-white mr-4"></i></a>
                        <a href="https://www.linkedin.com/in/spectrum-cet-3b71431b1/"><i class="fab fa-linkedin-in text-white mr-4"></i></a>
                        <a href="https://www.instagram.com/spectrum.cetb/?hl=en"><i class="fab fa-instagram text-white"></i></a>

                    </div>
                </div>
            </div>
        </div>


        <div class="container text-center text-md-left mt-5">
            <div class="row">
                <div class="first-row col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">SPECTRUM</h6>
                    <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
                    <p class="mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur dolor repudiandae,
                        cum quis accusamus blanditiis est exercitationem dignissimos autem cumque?Lorem ipsum dolor sit
                        amet. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, sit! Lorem ipsum </p>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">WINGS</h6>
                    <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2">HARDWARE</li>
                        <li class="my-2">SOFTWARE</li>
                        <li class="my-2">DESIGN</li>

                    </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">USEFUL LINKS</h6>
                    <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">

                    <ul class="list-unstyled">
                        <li class="my-2"><a href="#">HOME</a></li>
                        <li class="my-2"><a href="#">ABOUT US</a></li>
                        <li class="my-2"><a href="#">PROJECTS</a></li>
                        <li class="my-2"><a href="#">BLOGS</a></li>
                        <li class="my-2"><a href="#">FAQ</a></li>


                    </ul>
                </div>

                <div class="fourth-row col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">CONTACTS</h6>
                    <hr class=" mb-2 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">

                    <ul class="list-unstyled">
                        <li class="my-2"><i class="fas fa-home"> College Of Engineering And Technology, Ghatikia,
                                Bhubaneswar - 751003</i></li>
                        <li class="my-2"><i class="fas fa-envelope"> spectrumcet@gmail.com</i></li>
                        <li class="my-2"><i class="fas fa-phone"> +91-9999999999</i></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center py-3">
            <p>&copy;
                <a href="#">spectrumcet.com</a>
            </p>
            <p>Designed By Web-Team Spectrum</p>
        </div>
    </footer>



    <!-------------------------------------JS FILES------------------------->
    <script src="../../js/observers.js"></script>
    <script src="../../js/team.js"></script>
    <script src="../../js/glider.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>



    <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "See All"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "See less"; 
            moreText.style.display = "inline";
          }
        }
        </script>


    <!-- -------------------------------------BOOTSTRAP------------- -->

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap    JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB    JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>




</body>

</html>