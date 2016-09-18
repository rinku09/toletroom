<?php include_once('header.php'); ?>
    <div class="spacer-60"></div>
    <div class="container">
        <div class="row">
            <!-- Contact Section -->
            <section id="contact_sec" class="col-md-12">
                <!-- Contact form -->
                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                    Send us email
                </h3>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="cont_frm">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="control-group form-group col-md-6 first">
                                    <div class="controls">
                                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder="Your Name">
                                        <div class="in_ico">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <p class="help-block"></p>
                                    </div>

                                    <div class="controls">
                                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter an email address." placeholder="Email Address">
                                        <div class="in_ico">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <p class="help-block"></p>
                                    </div>

                                    <div class="controls">
                                        <input type="number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." placeholder="Your Phone">
                                        <div class="in_ico">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <p class="help-block"></p>
                                    </div>

                                    <div class="controls last">
                                        <input type="text" class="form-control" id="web" required data-validation-required-message="Please enter your website." placeholder="Website">
                                        <div class="in_ico">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <p class="help-block"></p>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="control-group form-group col-md-6">
                                    <div class="controls">
                                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Message"></textarea>
                                        <div class="in_ico">
                                            <i class="fa fa-paper-plane-o"></i>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                                <div class="clearfix"></div>
                                <div id="success"></div>
                                <!-- For success/fail messages -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
                <!-- Location Map -->
                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                    Our Location
                </h3>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                  
    <div id="map"></div>
     <style>
#map {
        width: 100%;
        height: 400px;
     }
    </style>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat:  28.600895, lng: 77.3763935},
            zoom: 15
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg3BlVjNyHfx6vfmVEkuqozQZKUHe9fVA&callback=initMap">
    </script>
                   
                </div>
                <!-- /.row -->

            </section>

            

            <div class="spacer-60"></div>

        </div>
    </div>
   <?php include_once('footer.php'); ?>