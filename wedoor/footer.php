
    <!-- Footer -->
    <footer>
        <!-- Footer Top -->           
        <div class="footer_top">
            <div class="container">   
                <div class="row">
                    <!-- About Section -->                
                    <div class="col-md-3 abt_sec">
                        <h2 class="foot_title">
                   About US
                </h2>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                                         </div>
                    <!-- Latest Tweets --> 
                    <div class="col-md-3">
                        <h2 class="foot_title">
                   Social Network
                </h2>
                        <ul class="tweets">
                                <div class="fb-page" 
                                    data-tabs="events"
                                    data-href="https://www.facebook.com/ToletRoom-1764889083764472"
                                    data-width="280">      
                              </div>
                               
                                <div class="clearfix"></div>
                            </li>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7&appId=589925034509314";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            <li class="spacer-10"></li>

                            
                        </ul>

                    </div>
                    <!-- Contact Info -->
                    <div class="col-md-3">
                        <h2 class="foot_title">
                   Contact Info
                </h2>
                        <ul class="cont_info">
                            <li><i class="fa fa-map-marker"></i>
                                <p>Bhopal </p>
                            </li>
                            <li><i class="fa fa-phone"></i>
                                <p> <a href="tel:407-546-2034"> Phone:  </a> </p>
                            </li>
                            <li><i class="fa fa-envelope"></i>
                                <p> <a href="mailto:connect@crelegant.com?Subject=

ToletRoom%20enquiry"> Email: connect@crelegant.com </a> </p>
                            </li>
                        </ul>

                    </div>
                    <!-- Useful Links -->
                    <div class="col-md-3">
                        <h2 class="foot_title">
                            Useful Links
                        </h2>
                        <ul class="foot_nav">
                            <li> <a href="index.php">Home Search</a> </li>
                            <li> <a href="property_listing.php">Properties Inspection</a> </li>
                            <li> <a href="contact.php">Get in touch</a> </li>
                        </ul>

                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->

        </div>
        <!-- Copyright -->
        <div class="footer_copy_right">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <p>&copy; Copyright <?php echo date("Y");?> All Rights Reserved by <a href="#">  </a>
                        </p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>Developed by <a href=""> The Bhopal Team </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal.php -->
    <div id="login_box" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="log_form">
                        <h2 class="frm_titl"> Login Form </h2>
                        <form name="sentMessage" id="loginForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="text" class="form-control" id="u-name" required data-validation-required-message="Please enter your username." placeholder="Username">
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password." placeholder="Password">

                                    <p class="help-block"></p>
                                </div>
                                <div class="checkbox col-md-6">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                                <div class="forg_pass col-md-6 text-right">
                                    <a class="" href="#"> Forgot your password?  </a>
                                </div>
                                <div class="clearfix"></div>

                                <button type="submit" class="btn btn-primary">Sign In</button>
                                <div id="success2"></div>
                                <!-- For success/fail messages -->
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="reg_box" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="log_form">
                        <h2 class="frm_titl"> Create Account </h2>
                        <form name="sentMessage" id="RegisForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="text" class="form-control" id="username" required data-validation-required-message="Please enter your username." placeholder="Username">
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <input type="email" class="form-control" id="e-mail" required data-validation-required-message="Please enter your email." placeholder="Email">
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <input type="password" class="form-control" id="passd" required data-validation-required-message="Please enter your password." placeholder="Password">

                                    <p class="help-block"></p>
                                </div>
                                <div class="controls">
                                    <input type="password" class="form-control" id="re-passd" required data-validation-required-message="Please enter your password." placeholder="Retype Password">

                                    <p class="help-block"></p>
                                </div>

                                <button type="submit" class="btn btn-primary">Create Account</button>
                                <div id="success3"></div>
                                <!-- For success/fail messages -->
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="prop_box" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="log_form">
                        <h2 class="frm_titl"> Property Listing </h2>
                        <form name="sentMessage" id="listform" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="text" class="form-control" id="list_name" required data-validation-required-message="Please enter the listing name." placeholder="Listing Name">
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <input type="text" class="form-control" id="addr" required data-validation-required-message="Please enter your Address." placeholder="Address">

                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls col-md-6 first">
                                    <select name="Type" class="form-control" required="" data-validation-required-message="Please select a type.">
                                        <option value="0" selected="selected">Select the listing type</option>
                                        <option value="1">Industrial</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Household</option>
                                    </select>
                                </div>
                                <div class="controls col-md-6">
                                    <select name="Actions" class="form-control" required="" data-validation-required-message="Please select a Actions.">
                                        <option value="0" selected="selected">Select the Action</option>
                                        <option value="1">For Rent</option>
                                        <option value="2">For Sale</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls col-md-6 first">
                                    <input type="text" class="form-control" id="area" required data-validation-required-message="Please enter the Area." placeholder="Area(sq.ft)">
                                </div>
                                <div class="controls col-md-6">
                                    <input type="text" class="form-control" id="rate" required data-validation-required-message="Please enter your Rate." placeholder="Rate">
                                </div>
                                <div class="clearfix"></div>
                            </div>                            
                            <div class="control-group form-group">
                                <div class="controls col-md-6 first">
                                    <input type="text" class="form-control" id="agt_name" required data-validation-required-message="Please enter the Agent name." placeholder="Agent Name">
                                </div>
                                <div class="controls col-md-6">
                                    <input type="text" class="form-control" id="agt_number" required data-validation-required-message="Please enter the Agent Contact Number." placeholder="Agent Contact Number">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <textarea rows="10" cols="60" class="form-control" id="message" required="" data-validation-required-message="Please enter your Property description" maxlength="999" style="resize:none" placeholder="Property Description"></textarea>
                                </div>
                            <button type="submit" class="btn btn-primary">Submit Property</button>
                            <div id="success4"></div>
                            <!-- For success/fail messages -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Owl room JavaScript -->
    <script src="js/owl.room.min.js"></script>

    <!-- Flexslider JavaScript -->
    <script src="js/jquery.flexslider-min.js"></script>


    <!-- Script to Activate the Carousels -->
    <script type="text/javascript">
        $(document).ready(function () {
        'use strict';
            $("#owl-room").owlCarousel({
                items: 5,
                itemsDesktop: [1199, 5],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [768, 2],
                itemsMobile: [479, 1],
                navigation: true,
                navigationText: [
      "<i class='fa fa-chevron-left icon-white'></i>",
      "<i class='fa fa-chevron-right icon-white'></i>"
      ],
                autoPlay: false,
                pagination: false
            });

            $("#slide_pan").owlCarousel({
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1],
                navigation: true,
                navigationText: [
      "<i class='fa fa-chevron-left icon-white'></i>",
      "<i class='fa fa-chevron-right icon-white'></i>"
      ],
                autoPlay: false,
                pagination: false
            });

            $(".testim_sec").owlCarousel({
                items: 2,
                itemsDesktop: [1199, 2],
                itemsDesktopSmall: [979, 2],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1],
                navigation: true,
                navigationText: [
      "<i class='fa fa-chevron-left icon-white'></i>",
      "<i class='fa fa-chevron-right icon-white'></i>"
      ],
                autoPlay: false,
                pagination: false
            });


            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false
            });
        });
    </script>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.285905357942!2d77.42785931449257!3d23.23268091427368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c42674b2da615%3A0x95f55ebfebed323!2sCodeAce+Technologies+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1449328886099" width="350" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>

</body>

</html>