<!-- Page Content -->
    <section id="srch_slide">

        <div class="container">

            <!-- Search & Slider -->
            <div class="row">
                <!-- Search Form -->
                <div class="col-md-4">
                    <div class="srch_frm">
                        <h3>Real Estate Search</h3>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Keyword </label>
                                    <input type="text" class="form-control" id="keyword" required data-validation-required-message="Please enter a keyword." placeholder="Any keyword">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Location </label>
                                    <select name="State" class="form-control" required data-validation-required-message="Please select a state.">
                                        <option value="" selected="selected">Any Location</option>
                                        
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls col-md-6 first">
                                    <label>Type </label>
                                    <select name="Type" class="form-control" required data-validation-required-message="Please select a type.">
                                        <option value="" selected="selected">Industrial</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Household</option>
                                    </select>
                                </div>
                                <div class="controls col-md-6">
                                    <label>Actions </label>
                                    <select name="Actions" class="form-control" required data-validation-required-message="Please select a Actions.">
                                        <option value="" selected="selected">For Rent</option>
                                        <option value="2">For Sale</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="control-group form-group">
                                <div class="controls col-md-6 first">
                                    <label>Min. Price </label>
                                    <select name="min-price" class="form-control" required data-validation-required-message="Please select a Min. Price.">
                                        <option value="" selected="selected">₹50</option>
                                       
                                       
                                        <option value="3">₹2500</option>
                                    </select>
                                </div>
                                <div class="controls col-md-6">
                                    <label>Max. Price </label>
                                    <select name="max-price" class="form-control" required data-validation-required-message="Please select a Max. Price.">
                                        <option value="" selected="selected">₹200</option>
                                        
                                        <option value="3">₹2500</option>
                                        <option value="3">₹3000</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
                 <!-- Slider -->
                <div class="col-md-8 slide_sec">
                    <div id="slider" class="silde_img flexslider">
                        <ul class="slides">
                           <!-- Slide 1 -->
                            <li>
                                <img src="<?= base_url('assests/images/room_1.jpg')?>" alt="Slider image" />
                                <div class="slide-info">
                                    <p class="sli_price"> ₹425.000 </p>
                                    <p class="sli_titl"> Room Rent Prov </p>
                                    <p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                </div>
                            </li>
                            <!-- Slide 2 -->
                            <li>
                                <img src="<?= base_url('assests/images/room_2.jpg')?>" alt="Slider image" />
                                <div class="slide-info">
                                    <p class="sli_price"> ₹450.000 </p>
                                    <p class="sli_titl"> Amillarah Lorem Islands </p>
                                    <p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                </div>
                            </li>
                            <!-- Slide 3 -->
                            <li>
                                <img src="<?= base_url('assests/images/room_3.jpg')?>" alt="Slider image" />
                                <div class="slide-info">
                                    <p class="sli_price"> ₹445.000 </p>
                                    <p class="sli_titl"> Amillarah Dolar Islands </p>
                                    <p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                </div>
                            </li>
                            <!-- Slide 4 -->
                            <li>
                                <img src="<?= base_url('assests/images/room_4.jpg')?>" alt="Slider image" />
                                <div class="slide-info">
                                    <p class="sli_price"> ₹545.000 </p>
                                    <p class="sli_titl"> Amillarah Amet Islands </p>
                                    <p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                </div>
                            </li>
                            <!-- Slide 5 -->
                            <li>
                                <img src="<?= base_url('assests/images/room_1.jpg')?>" alt="Slider image" />
                                <div class="slide-info">
                                    <p class="sli_price"> ₹475.000 </p>
                                    <p class="sli_titl"> Amillarah Consectetuer Islands </p>
                                    <p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                </div>
                            </li>
                            <!-- Slide 6 -->
                            <li>
                                <img src="<?= base_url('assests/images/room_2.jpg')?>" alt="Slider image" />
                                <div class="slide-info">
                                    <p class="sli_price"> ₹555.000 </p>
                                    <p class="sli_titl"> Amillarah Ipsum Islands </p>
                                    <p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                </div>
                            </li>
                            <!-- Slide 7 -->
                            <li>
                                <img src="<?= base_url('assests/images/room_3.jpg')?>" alt="Slider image" />
                                <div class="slide-info">
                                    <p class="sli_price"> ₹595.000 </p>
                                    <p class="sli_titl"> Amillarah Elition Islands </p>
                                    <p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                </div>
                            </li>
                            <!-- Slide 8 -->
                            <li>
                                <img src="<?= base_url('assests/images/room_4.jpg')?>" alt="Slider image" />
                                <div class="slide-info">
                                    <p class="sli_price"> ₹585.000 </p>
                                    <p class="sli_titl"> Amillarah Adituer Islands </p>
                                    <p class="sli_desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </section>

    <div class="spacer-60"></div>

    <!-- Featured Properties Section -->
    <section id="feat_propty">
        <div class="container">
            <!-- <div class="row"> -->
              <div class="intro-box">
              <center>
                <article class="" data-wow-duration="700ms" data-wow-delay="400ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 400ms;">
                        <h1>Buy, Sell and Rent Properties!</h1>
                        <br><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut e </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor</p>
                    <div class="action-button">
                        <a href="<?= base_url('Home/property')?>" title="List your property" class="button primary large">
                        <i class="icon-building"></i>List your property</a>
                    </div>
                </article>
              </center>
           <!-- </div> -->
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>