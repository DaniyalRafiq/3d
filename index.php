<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <?php include 'links.php' ?>
    <!-- https://f5394ad4a4d84890b42f15605b139cf8.prod.enterapp.pro/ -->
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->

    <!-- section banner -->
    <section class="hero-section">
        <div class="hero-bg-zoom"
            style="background-image: linear-gradient(rgba(10, 13, 12, 0.8), rgba(10, 13, 12, 0.9)), url('assets/images/hero-bg.jfif');">
        </div>

        <div class="frame-corner top-left"></div>
        <div class="frame-corner top-right"></div>
        <div class="frame-corner bottom-left"></div>
        <div class="frame-corner bottom-right"></div>

        <div class="container hero-container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10 col-xl-9">

                    <span class="hero-badge text-uppercase">Ultra-Luxury 3D Visualization Studio</span>
                    <div class="hero-title-wrapper">

                        <h1 class="hero-title phrase-1">
                            <div class="line-mask">
                                <span class="smooth-line">Render Your Architectural Vision</span>
                            </div>
                            <div class="line-mask">
                                <span class="smooth-line line-italic">Into Reality</span>
                            </div>
                        </h1>

                        <h1 class="hero-title phrase-2">
                            <div class="line-mask">
                                <span class="smooth-line">Immersive 3D Spatial Concepts</span>
                            </div>
                            <div class="line-mask">
                                <span class="smooth-line line-italic">Hyper-Real Precision</span>
                            </div>
                        </h1>

                    </div>

                    <p class="hero-desc">
                        We craft ultra-photorealistic 3D environments that reveal exactly what your property will look
                        like — every texture, every shadow, every detail — before construction begins.
                    </p>

                    <div
                        class="hero-actions d-flex flex-sm-row flex-column justify-content-center align-items-center gap-3">
                        <a href="#" class="btn btn-theme">
                            Request a Consultation <i class="ri-arrow-right-line ms-2"></i>
                        </a>
                        <a href="#" class="btn btn-theme btn-theme-outline">
                            <i class="ri-play-fill me-2"></i> View Our Work
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="scroll-explore">
            <span class="text-uppercase">Scroll to Explore</span>
            <i class="ri-arrow-down-s-line chevron-down"></i>
        </div>
    </section>
    <!-- End section -->

    <!-- section partner -->
    <?php //include "partners.php" ?>
    <!-- end -->

    <!-- Get Quote Model -->
    <?php  // include 'get-quote.php' ?>
    <!-- end -->

    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- end -->


</body>

</html>