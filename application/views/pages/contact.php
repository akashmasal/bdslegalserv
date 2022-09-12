<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow theme-hard bg-fixed text-light" style="background-image: url('<?php echo base_url();?>assets/strip_bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <h1>Contact Us</h1> -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <!-- <li><a href="#">Pages</a></li> -->
                    <li class="active">Contact US</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact 
    ============================================= -->
<div class="contact-form-area default-padding-top">
    <div class="container">
        <div class="row">
            <!-- Start Contact Form -->
            <div class="col-md-7 contact-form-content default-padding-bottom">
                <div class="content">
                    <form action="<?php echo base_url("contact/send"); ?>" method="POST">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="subject" placeholder="Subject" type="text" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg">
                                <?php echo $this->session->flashdata("success");; ?>
                                <?php echo $this->session->flashdata("errors");; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Contact Form -->
            <div class="col-md-5 thumb">
                <img src="<?php echo base_url(); ?>assets/img/about/contact.png" alt="Thumb">
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<!-- Start Google Maps 
    ============================================= -->
<div class="google-maps-area full-width">
    <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.5299806147063!2d72.92334551455153!3d19.12826485529905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c78bcf1b9fbb%3A0xf05e14dcc5dc9108!2sBDS%20Legal%20Services!5e0!3m2!1sen!2sin!4v1659955027466!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- End Google Maps -->