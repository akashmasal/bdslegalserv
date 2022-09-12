<script src="https://www.google.com/recaptcha/api.js"></script>
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow theme-hard bg-fixed text-light" style="background-image: url('<?php echo base_url(); ?>assets/strip_bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <h1>Career</h1> -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <!-- <li><a href="#">Pages</a></li> -->
                    <li class="active">Career</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start About 
    ============================================= -->
<div id="about" class="about-area left-details default-padding ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 contact-form-content default-padding-bottom thumb">
                <div class="content">
                    <h3 class="text-center" id="career_desc">Committed to promote a diverse and inclusive workforce</h3>
                    <hr>
                    <h4 class="text-center" id="career_desc">Hello, Nice to Meet You...</h4>
                    <h4 class="text-center" id="career_desc">Leave your message and we will contact you…</h4>
                    <form enctype="multipart/form-data" action="<?php echo base_url('career/send'); ?>" method="POST">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="file" name="attachment" id="attachment">
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="row">
                                <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                                <br />
                                <input type="submit" value="Submit">
                                <script src="https://www.google.com/recaptcha/api.js"></script>
                            </div>
                        </div> -->
                        <br>
                        <div class="col-md-12">
                            <div class="row">
                                <button class="btn btn-primary" type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg">
                                <p><?php echo $this->session->flashdata("success"); ?></p>
                                <p><?php echo $this->session->flashdata("error"); ?></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-6 default wt-subtitle info" id="career_image">
                <img src="<?php echo base_url(); ?>assets/img/about/career.png" id="career_image" alt="">
                <!-- <h2>Career</h2>
                <h3>BDS Legal Services ! ! !</h3>
                <p>
                    is an equal opportunity employer and is committed to promoting a diverse and inclusive workforce.
                </p>
                <p>
                    We will provide you a great amount of exposure in almost all aspects of the legal profession and
                    promises career experiences that are enriched with learning, development and growth. </p> -->

                <!-- <div class="bottom-info align-left">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="item">
                                    <h4>8+ Years <span>Experiance</span></h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <h4>1200+ Active <span>Clients</span></h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <h4>250+ Expert <span>Worker</span></h4>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Google Maps 
    ============================================= -->

<!-- End Google Maps -->
<script>
    //grecaptcha.ready(function() {
    // if (grecaptcha.getResponse() === "") {
    //     alert("Please validate the Google reCaptcha.");
    // } else {
    //     alert("Successful validation! Now you can submit this form to your server side processing.");
    // }
    //});
</script>


<style>
    #career_desc {
        font-weight: bold;
       
    }

    #career_image {
        width: 42vw;
        height: 72vh;
        
    }

    @media screen and (max-width:480px) {
        #career_image {
            width: 100vw;
            height: 40vh;
        }
    }

    @media (min-width:480px) and (max-width:768px) {
        #career_image {
            width: 100vw;
            height: 50vh;
        }
    }

    @media (min-width:768px) and (max-width:1024px) {
        #career_image {
            width: 90vw;
            height: 60vh;
        }
    }

    @media (min-width:1024px){
        #career_image {
            width: 41vw;
            height: 70vh;
        }
    }
</style>