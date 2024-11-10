<?php
get_header();
get_template_part( 'topbar');
?>


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-white text-uppercase fw-bold mb-4">Ratauli Yuwa Club</h4>
                                    <h1 class="display-4 text-white mb-4">Mahottari’s Path to Progress and Social Equality</h1>
                                    <p class="mb-5 fs-5">RYC is a non-profit organization established in 1991 (BS 2047) in Mahottari District, Nepal and affiliated with the Social Welfare Council of Nepal.
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                        <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 animated fadeInRight">
                                <div class="calrousel-img" style="object-fit: cover;">
                                    <img src="<?php echo get_template_directory_uri();?>/raw/img/carousel-2.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                            <div class="col-lg-5 animated fadeInLeft">
                                <div class="calrousel-img">
                                    <img src="<?php echo get_template_directory_uri();?>/raw/img/carousel-2.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 animated fadeInRight">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-white text-uppercase fw-bold mb-4">RYC Major Achievements</h4>
                                    <h1 class="display-4 text-white mb-4">Building a Better Mahottari, One Step at a Time</h1>
                                    <p class="mb-5 fs-5">We have organized a series of impactful programs focused on empowering local communities, promoting education, improving health services, addressing environmental challenges, and fostering social justice. 
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                        <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-fluid bg-light about py-5">
            <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">RYC Major Achievements</h4>
                    <h1 class="display-4 mb-4">Building a Better Mahottari</h1>
                    <p class="mb-0">We have organized a series of impactful programs focused on empowering local communities, promoting education, improving health services, addressing environmental challenges, and fostering social justice. 
                    </p>
                </div>
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-content bg-white rounded p-5 h-100">
                            <h4 class="text-primary">Programs we conducted</h4>
                            <h1 class="display-6 mb-4">Impactful programs focused on empowering local communities</h1>
                            <p>From vocational training and awareness campaigns to disaster relief efforts and women's empowerment initiatives, we are committed to uplifting Mahottari, ensuring sustainable development, and creating lasting positive change for future generations.
                            </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Health Education and Sanitation programs</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>School Latrine Construction</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Human Rights Training &  Rally</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="#">View all programs</a>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-5 h-100">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
                                    <div class="rounded bg-light">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/agm-2018.jpg" class="img-fluid rounded w-100" alt="" loading="lazy">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">129</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Community Programs</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">109</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Areas restored</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">56</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Workshop conducted</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">267</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Volunteering Members</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <div class="container-fluid about py-5">
        <div class="container py-5">
         <?php the_content(); ?>
        </div>
        </div>
        <?php
        get_footer();
        ?>