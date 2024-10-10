 <!-- Footer Start -->
 <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-9">
                        <div class="mb-5">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-5">
                                    <div class="footer-item">
                                        <a href="/" class="d-flex p-0">
                                        <h3 class="text-white">Ratauli YC</h3>
                                            <!-- <img src="img/ryc-logo.png" alt="Logo"> -->
                                        </a>
                                        <p class="text-white mb-4">Ratauli Yuba Club is a non-profit organization established 1991 AD in Mahottari District  and is affiliated with Social Welfare Council, Nepal.</p>
                                        <div class="footer-btn d-flex">
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <?php if ( is_active_sidebar( 'third_widget_area' ) ) : ?>
                                                <?php dynamic_sidebar( 'third_widget_area' ); ?>
                                        <?php endif; ?>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <?php if ( is_active_sidebar( 'forth_widget_area' ) ) : ?>
                                                <?php dynamic_sidebar( 'forth_widget_area' ); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Address</h4>
                                                    <p class="mb-0">Ratauli, Mahottari, Nepal</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-envelope fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Mail Us</h4>
                                                    <p class="mb-0">info@ryc.org.np</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fa fa-phone-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Telephone</h4>
                                                    <p class="mb-0">044-520843 / 041-521218 </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Newsletter</h4>
                            <p class="text-white mb-3">Get updates about RYC programs and events.</p>
                            <div class="position-relative rounded-pill mb-4">
                                <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                            <div class="d-flex flex-shrink-0">
                                <div class="footer-btn">
                                    <a href="#" class="btn btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                                        <i class="fa fa-code fa-2x"></i>                                        
                                    </a>
                                </div>
                                <div class="d-flex flex-column ms-3 flex-shrink-0">
                                    <span>Developed by</span>
                                    <a href="https://lokbidhi.com"><span class="text-white">Lokbidhi Cyberlab</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/raw/lib/wow/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/raw/lib/easing/easing.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/raw/lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/raw/lib/counterup/counterup.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/raw/lib/lightbox/js/lightbox.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/raw/lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="<?php echo get_template_directory_uri();?>/raw/js/main.js"></script>
    </body>

</html>