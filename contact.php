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
                                <h2 class="page-title">Contact Us</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Contact Us</li>
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
            Start Contact Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="contact-block" class="contact-block">
            <div id="contact_map"></div>
            <div class="contact-form-area-outer">
                <div class="contact-form-area">
                    <div class="contact-form-area-inner">
                        <h2 class="contact-heading">get in touch</h2>
                        <form method="post" class="contact-form" action="https://miraclestudio.design/html/deliciousa-html/process.php" id="contect-forms">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="Full Name" />
                                    </div>
                                </div><!-- /.col-12 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="Email Address" />
                                    </div>
                                </div><!-- /.col-12 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <input name="subject" type="text" placeholder="Subject" />
                                    </div>
                                </div><!-- /.col-12 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="comment" placeholder="Message"></textarea>
                                    </div>
                                </div><!-- /.col-12 -->

                                <div class="col-12 text-center">
                                    <div class="loading"></div>
                                    <button type="submit" id="submit" class="btn btn-default btn-primary btn-white btn-contact">Book
                                        Now</button>
                                </div><!-- /.col-12 -->
                            </div><!-- /.row -->
                        </form><!-- /.contact-form -->

                        <div class="done mrt-15">
                            <strong>Thank you!</strong> We have received your message. 
                        </div>
                    </div>
                </div><!-- /.contact-form-area -->
            </div>
        </div>

        <div class="contact-info container bootstrap snippets">
            <div class="row text-center">
                <div class="col-sm-4">
                <div class="contact-detail-box">
                    <i class="fa fa-phone-alt fa-3x text-colored"></i>
                    <h4>Phone</h4>
                    <a href="tel:+91 7577888366">+91 7577888366  </a><br>
                    <a href="tel:+91 9101323098">+91 9101323098</a>
                </div>
                </div><!-- end col -->

                <div class="col-sm-4">
                <div class="contact-detail-box">
                    <i class="fa fa-map-marker-alt fa-3x text-colored"></i>
                    <h4>Our Location</h4>

                    <address>
                    ABC POINT, TARUN NAGAR MAIN ROAD,<br> GUWAHATI -781005
                </address>
                </div>
                </div><!-- end col -->

                <div class="col-sm-4">
                <div class="contact-detail-box">
                    <i class="fa fa-envelope fa-3x text-colored"></i>
                    <h4>Email</h4>
                    <a href="mailto:cfsflavours@gmail.com" class="text-muted">cfsflavours@gmail.com</a> 
                </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!--~~./ end contact block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start SITE FOOTER
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <?php include "include/footer.php" ?>