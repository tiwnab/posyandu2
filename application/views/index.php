<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Posyandu </title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url()?>front/img/core-img/favicon.ico">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>front/style.css">
</head>

<body>
<!-- Preloader-->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>

<?php $this->load->view($header);?>

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="welcome-slides owl-carousel">

        <!-- Single Welcome Slides -->
        <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(<?php echo base_url()?>front/img/bg-img/1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-10">
                        <div class="welcome-content">
                            <h2 data-animation="fadeInUp" data-delay="200ms">Pencarian KMS</h2>
                            <a href="<?php echo base_url()?>kms" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Pencarian</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<footer class="footer-area">

    <div class="copywrite-area">
        <div class="container">
            <div class="copywrite-text">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dev<i class="fa fa-heart-o" aria-hidden="true"></i> by aa
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-nav">
                            <nav>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jquery 2.2.4  -->
<script src="<?php echo base_url()?>front/js/jquery.min.js"></script>
<!-- Popper js -->
<script src="<?php echo base_url()?>front/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo base_url()?>front/js/bootstrap.min.js"></script>
<!-- Owl Carousel js -->
<script src="<?php echo base_url()?>front/js/owl.carousel.min.js"></script>
<!-- Classynav -->
<script src="<?php echo base_url()?>front/js/classynav.js"></script>
<!-- Wow js -->
<script src="<?php echo base_url()?>front/js/wow.min.js"></script>
<!-- Sticky js -->
<script src="<?php echo base_url()?>front/js/jquery.sticky.js"></script>
<!-- Magnific Popup js -->
<script src="<?php echo base_url()?>front/js/jquery.magnific-popup.min.js"></script>
<!-- Scrollup js -->
<script src="<?php echo base_url()?>front/js/jquery.scrollup.min.js"></script>
<!-- Jarallax js -->
<script src="<?php echo base_url()?>front/js/jarallax.min.js"></script>
<!-- Jarallax Video js -->
<script src="<?php echo base_url()?>front/js/jarallax-video.min.js"></script>
<!-- Active js -->
<script src="<?php echo base_url()?>front/js/active.js"></script>
</body>

</html>