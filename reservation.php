<?php include 'includes/header.php' ?>

    <!--Banner Inner-->
    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area lgx-heading-area-fixedlogo">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading-title">Book A Restaurant Table</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="index"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                    <li class="active">Reservation</li>
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
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        <div class="alert text-center" style="display: none;"></div>
                        <div class="lgx-reservation-area lgx-reservation-area-another"> <!--lgx-reservation-area-another-->
                            <div class="open-close-time">
                                <p>Monday- Friday: <span>08am - 12pm</span></p>
                                <p>Saturday - Sunday: <span>10am - 11pm</span></p>
                            </div>
                            <form id="reservationbooking">
                                <div class="form-group  lgx-form-left">
                                    <input class="form-control" name="name" id="foodiebooking_name" placeholder="Enter Your Name" aria-required="true" type="text">
                                </div>
                                <div class="form-group lgx-form-right">
                                    <input class="form-control" name="email" id="foodiebooking_email" placeholder="Email Address" aria-required="true" type="email">
                                </div>
                                <div class="form-group lgx-form-left">
                                    <input class="form-control" name="phone" id="foodiebooking_phone" placeholder="Telephone Number" type="text">
                                </div>
                                <div class="form-group lgx-form-right">
                                    <select class="form-control" name="person" id="person" aria-required="true">
                                        <option value="">Number of Guests</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="8">9</option>
                                        <option value="10">10</option>
                                        <option value="more">More than 10</option>
                                    </select>
                                </div>
                                <div class="form-group lgx-form-full lgx-form-left">
                                    <div class="input-group date" id="datetimepicker">
                                        <input name="date" id="reservationbooking_date" class="form-control" placeholder="Date format ( mm-dd-yyyy )." aria-required="true" type="text">
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>
                                </div>
                                <div class="form-group lgx-form-right">
                                    <select class="form-control" name="time" id="time" aria-required="true">
                                        <option value="">Time</option>
                                        <option value="Breakfast">Breakfast</option>
                                        <option value="Lunch">Lunch</option>
                                        <option value="Dinner">Dinner</option>
                                    </select>
                                </div>
                                <div class="lgx-form-group">
                                    <!--<input  class="lgx-btn lgx-submit" value="Booking Submit" type="submit">-->
                                    <button type="button" name="submit" value="contact-form" class="lgx-btn lgx-btn-big hvr-glow hvr-radial-out lgxsend lgx-send reservation"><span>Send Massage</span></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
    </main>


<?php include 'includes/footer.php' ?>
<script type="text/javascript" src="myjs/reservation.js"></script>
