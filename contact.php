<?php include 'includes/header.php'?>

    <section>
        <div class="lgx-banner lgx-banner-inner" style="padding: 15rem 0">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading-title">Contact us</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                    <li class="active">Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->

    <main>
        <div class="lgx-page-wrapper">
            <div class="container">
                <div class="alert text-center" style="display: none;"></div>

                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <form>

                            <div class="form-group">
                                <input type="text" name="name" class="form-control lgxname" id="lgxname" placeholder="Enter Your Name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control lgxemail" id="lgxemail" placeholder="Enter email" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" class="form-control lgxsubject" id="lgxsubject" placeholder="Subject" required>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control lgxmessage" name="message" id="message" rows="5" placeholder="We expect drop some line from you..." required></textarea>
                            </div>

                            <button type="button" name="submit" value="contact-form" class="lgx-btn lgx-btn-big hvr-glow hvr-radial-out lgxsend lgx-send contact"><span>Send Massage</span></button>
                        </form>

                        <!-- MODAL SECTION -->
<!--                        <div id="lgx-form-modal" class="modal fade lgx-form-modal" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--                            <div class="modal-dialog modal-lg">-->
<!--                                <div class="modal-content lgx-modal-content">-->
<!--                                    <div class="modal-header lgx-modal-header">-->
<!--                                        <button type="button" class="close brand-color-hover" data-dismiss="modal" aria-label="Close">-->
<!--                                            <i class="fa fa-power-off"></i>-->
<!--                                        </button>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="modal-body">-->
<!--                                        <div class="alert lgx-form-msg" role="alert"></div>-->
<!--                                    </div> <!--//MODAL BODY-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div> <!-- //MODAL -->

                    </div> <!--//.COL-->
                    <div class="col-sm-12 col-md-6">
                        <div class="contact-info">
                            <div class="lgx-box">
                                <!--<span class="lgx-icon"><i class="fa fa-map-marker"></i></span>-->
                                <div class="address">
                                    <h3 class="title">Location</h3>
                                    <p>3153 sugarloaf parkway, <br/>
                                        114/115 Lawrenceville GA 30045.</p>
                                    <!--<p>SKYPE:jhon.doe</p>-->
                                </div>
                            </div>
                            <div class="lgx-box">
                                <!--<span class="lgx-icon"><i class="fa fa-headphones"></i></span>-->
                                <div class="address">
                                    <h3 class="title">Contact Info</h3>
                                    <p>PHONE: 4704360719</p>
                                </div>
                            </div>
<!--                            <div class="lgx-box">-->
<!--                                <!--<span class="lgx-icon"><i class="fa fa-envelope"></i></span>-->
<!--                                <div class="address">-->
<!--                                    <h3 class="title">Mail Info.</h3>-->
<!--                                    <p>Email:<a href="https://themearth.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bed4d6d1d090dad1dbfedbc6dfd3ced2db90ddd1d3">[email&#160;protected]</a></p>-->
<!--                                    <p><a href="https://themearth.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fc96949392d2989399bc99849d918c9099ced29f9391">[email&#160;protected]</a></p>-->
<!--                                    <p>FAX:jhon.doe</p>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->
        </div>
    </main>

<?php include 'includes/footer.php'?>
<script type="text/javascript" src="myjs/contact.js"></script>
