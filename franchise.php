<?php include "include/header.php" ?>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Page Title Area
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="page-title-area bg-image bg-parallax2"
            style="background-image:url('assets/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Franchise</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Franchise</li>
                                </ol>
                            </div>
                            <!--~~./ breadcrumb-area ~~-->
                        </div>
                        <!--~~./ page-header-content ~~-->
                    </div>
                </div>
            </div>
            <!--~~./ end container ~~-->
        </div>
        <!--~~./ end page title area ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Reservation Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="reservation-block style-five">
            <div class="res-bg bg-image" style="background-image:url('assets/images/logo/chef-f.png');background-size: 80%;"></div>
            <div class="container">
                <div class="row justify-content-end mx-md-n5">
                    <div class="col-lg-6 px-md-5">
                        <div class="reservation-form-area ptb-100">
                            <div class="section-title section-default text-center">
                                <h2 class="title-main">Join our <span> Franchise</span></h2><!-- /.title-main -->
                                <div class="divider">
                                    <span class="icon-star-full"></span>
                                    <span class="icon-star-full"></span>
                                    <span class="icon-star-full"></span>
                                </div>
                            </div><!-- /.section-title -->
                            <form action="https://miraclestudio.design/html/deliciousa-html/reser-process.php" method="post" class="reservation-form" id="reservation-forms">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-controllar" name="name2" placeholder="Full Name">
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-controllar" name="email2" placeholder="Email Address">
                                        </div><!-- /.form-group -->
                                    </div>                                    

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-controllar" name="phone" placeholder="Phone Number">
                                        </div><!-- /.form-group -->
                                    </div>                                

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-controllar" name="location" placeholder="Location">
                                        </div><!-- /.form-group -->
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-controllar" name="comment2" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" id="reser-submit" class="btn btn-default btn-white">Book Now</button>
                                    </div>
                                </div>
                            </form>
                            <div class="done2">
                                <strong>Thank you!</strong> We have received your message. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--~~./ end reservation block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start SITE FOOTER
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <?php include "include/footer.php" ?>