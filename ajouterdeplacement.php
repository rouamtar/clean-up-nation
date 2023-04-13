<?php
    include_once '../Model/deplacement.php';
    include_once '../Controller/deplacementC.php';

    $error = "";

    // create deplacement
    $deplacement = null;

    // create an instance of the controller
    $deplacementC = new deplacementC();
    if (
        isset($_POST["id_dep"]) &&
        isset($_POST["data_depart"]) &&
        isset($_POST["lieu_depart"]) &&
        isset($_POST["duree_depart"]) &&
        isset($_POST["destination"]) &&
        isset($_POST["instructions"]) &&
        isset($_POST["cout_personne"])
    ) {
        if (
            !empty($_POST["id_dep"]) &&
            !empty($_POST["data_depart"]) &&
            !empty($_POST["lieu_depart"]) &&
            !empty($_POST["duree_depart"]) &&
            !empty($_POST["destination"]) &&
            !empty($_POST["instructions"]) &&
            !empty($_POST["cout_personne"])
        ) {
            $deplacement = new deplacement(
                $_POST['id_dep'],
                $_POST['data_depart'],
                $_POST['lieu_depart'],
                $_POST['duree_depart'],
                $_POST['destination'],
                $_POST['instructions'],
                $_POST['cout_personne']
            );
            $deplacementC->ajouterdeplacement($deplacement);
            header('Location: afficherdeplacement.php');
            exit();
        } else {
            $error = "Missing information";
        }
    }

?>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Clean Up Nation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="template/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+52654847</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>cleanup@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="template\index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">Clean Up Nation</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="template\index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                <a href="project.html" class="nav-item nav-link">Projects</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="template\contact.html" class="nav-item nav-link active">deplacement</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    
                
    
    







    

    <form action="" method="POST">
    <div class="row g-3">
        <h2>Déplacement</h2>
                                
         <div class="col-md-6">
        
            <tr>
                <td>
                    <label for="id_dep">identifiant deplacement:</label>
                </td>
                <td><input type="text"  class="form-control" name="id_dep" id="id_dep" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="data_depart">date de depart:</label>
                </td>
                <td><input type="date"  class="form-control" name="data_depart" id="data_depart" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="lieu_depart">lieu de depart:</label>
                </td>
                <td><input type="text" class="form-control" name="lieu_depart" id="lieu_depart" onblur="validateLieuDepart()" maxlength="20"></td>
                <span id="lieu_depart_error" class="invalid-feedback"></span>
            </tr>
            <tr>
                <td>
                    <label for="duree_depart">duree de depart:</label>
                </td>
                <td>
                    <input type="text"  class="form-control" name="duree_depart" id="duree_depart">

                </td>
            </tr>
            <tr>
           
 
    <tr>
      <td>
        <label for="destination">destination:</label>
      </td>
      <td>
        <input type="text" class="form-control" name="destination" id="destination" onblur="validateDestination()"> 
        <span id="destination_error" class="invalid-feedback"></span>
      </td>
    </tr>
  



            </tr>
            <tr>
                <td>
                    <label for="instructions">instructions:</label>
                </td>
                <td>
                    <input type="text"
                        <input type="text" class="form-control" name="instructions" id="instructions">
                    </td>
                </tr>
              
                    
                <td>
                        <label for="cout_personne">cout de personne:
                        </label>
                    </td>
                    <td>
                        <input type="cout_personne"  class="form-control" name="cout_personne" id="cout_personne" >
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                    <td>
                        
                        <input type="submit" value="Envoyer" class="envoyer-btn"> 
                    </td>
                    
                </tr>
            
        </form>
                                
                                  
                </div>
               
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Contact End -->

 
<!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Nos Services </h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>tunis, arianasoghra, ghazela</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>52684695</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Clean Up Nation
                        @gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
              
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Liens</h4>
                    <a class="btn btn-link" href="">A propos</a>
                    <a class="btn btn-link" href="">Contact </a>
                    <a class="btn btn-link" href="">Nos Services</a>
                   
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Mail</h4>
                   
                    <div class="position-relative w-100">
                        <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


   
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="template/lib/wow/wow.min.js"></script>
    <script src="template/lib/easing/easing.min.js"></script>
    <script src="template/lib/waypoints/waypoints.min.js"></script>
    <script src="template/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="template/lib/counterup/counterup.min.js"></script>
    <script src="template/lib/parallax/parallax.min.js"></script>
    <script src="template/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="template/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="template/js/main.js"></script>
    <script src="method.js"></script>
</body>

</html>




