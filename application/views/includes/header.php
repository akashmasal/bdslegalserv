<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Intellectual Property Service Provider for BDS Legal Services. Get free quotes from trusted intellectual property right service providers.">

    <meta name="keywords" content="intellectual property service, intellectual property service providers, intellectual property service company">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- ========== Page Title ========== -->
    <title>BDSLegalserv</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/bdslegalserv/favicons/fac.jpg" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php echo base_url(); ?>assets/css/plugins.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- <script src="<?php echo base_url(); ?>assets/js/html5/html5shiv.min.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/html5/respond.min.js"></script> -->
    <!-- <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/bootstrap-icons.svg">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">



    <!--<a href="https://api.whatsapp.com/send?phone=+919137255057" class="float" target="_blank">-->
    <!-- <a href="https://api.whatsapp.com/send?phone=919152859137" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a> -->

    <style>
        /* .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:15px;
	right:20px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
} */
    </style>


</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed border white bootsnav">
            <!-- removed class from upper nabvar to keep navbar same :no-background -->
            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url(); ?>assets/img/bdslegalserv/logo/white_logo.jpg" class="logo logo-display" alt="Logo">
                        <img src="<?php echo base_url(); ?>assets/img/bdslegalserv/logo/logo.jpg" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a class="smooth-menu" href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="dropdown">
                            <a class="smooth-menu" data-toggle="dropdown">About Us <i class="bi bi-caret-down-fill"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("about/company_profile"); ?>">Company Profile</a></li>
                                <li><a href="<?php echo base_url("about/our_clients"); ?>">Our Clients</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="smooth-menu" data-toggle="dropdown">Services <i class="bi bi-caret-down-fill"></i></a>
                            <ul class="dropdown-menu" id="dropdown_our_services">
                                <li class="dropdown"><a>Legal Services <i class="bi bi-caret-right-fill"></i></a>
                                    <ul class="dropdown-menu">
                                        <!-- <li><a href="<?php echo base_url("services/cheque_bouncing"); ?>">Cheque Bouncing</a></li> -->
                                        <li><a href="<?php echo base_url("services/drafting_legal_documents"); ?>">Drafting Of Legal Documents</a></li>
                                        <!-- <li><a href="<?php echo base_url("services/copyright"); ?>">Legal Consultation and Counseling</a></li> -->
                                    </ul>
                                </li>

                                <li class="dropdown"><a>Company Registration <i class="bi bi-caret-right-fill"></i></a>
                                    <ul class="dropdown-menu">
                                        <!-- <li><a href="<?php echo base_url("services/patent"); ?>">Limited Company Registration</a></li> -->
                                        <li><a href="<?php echo base_url("services/private_limited_company"); ?>">Private Limited Company Registration</a></li>
                                        <li><a href="<?php echo base_url("services/llp"); ?>">Limited Liability Partnership (LLP)</a></li>
                                        <li><a href="<?php echo base_url("services/opc"); ?>">One Person Company Registration (OPC)</a></li>
                                        <li><a href="<?php echo base_url("services/partnership_firm_registration"); ?>">Partnership firm Online Registration</a></li>
                                        <!-- <li><a href="<?php echo base_url("services/copyright"); ?>">Partnership Deed (Notary)</a></li> -->
                                        <li><a href="<?php echo base_url("services/roc"); ?>">ROC Compliance</a></li>
                                        <li><a href="<?php echo base_url("services/twelveA_certificate"); ?>">Section 8 Registration – 12A/80G Registration and FCRA Registration</a></li>
                                        <!-- <li><a href="<?php echo base_url("services/copyright"); ?>">Trust Registration – 12A/80G Registration and FCRA Registration</a></li> -->
                                        <!-- <li><a href="<?php echo base_url("services/copyright"); ?>">Nidhi Company Registration</a></li> -->
                                    </ul>
                                </li>

                                <li class="dropdown"><a>Intellectual Property Rights<i class="bi bi-caret-right-fill"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url("services/trademark"); ?>">Trademark
                                            </a></li>
                                        <li><a href="<?php echo base_url("services/copyright"); ?>">
                                                Logo Copyright</a></li>
                                        <li><a href="<?php echo base_url("services/design_registration"); ?>">Design</a></li>

                                        <!-- <li><a href="<?php echo base_url("services/patent"); ?>">Patent</a></li> -->
                                    </ul>
                                </li>


                                <li class="dropdown"><a>Tax <i class="bi bi-caret-right-fill"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url("services/filing_itr"); ?>">ITR Filling</a></li>
                                        <li><a href="<?php echo base_url("services/trademark"); ?>">Gst Registration Service</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="smooth-menu" data-toggle="dropdown">FSSAI <i class="bi bi-caret-right-fill"></i></a>
                                    <ul class="dropdown-menu">
                                        <!-- id="other_dropdown" -->
                                        <li><a href="<?php echo base_url("services/fssai_basic"); ?>">FSSAI BASIC</a></li>
                                        <li><a href="<?php echo base_url("services/fssai_state"); ?>">FSSAI STATE</a></li>
                                        <li><a href="<?php echo base_url("services/fssai_central"); ?>">FSSAI CENTRAL</a></li>
                                        <!-- <li><a href="<?php echo base_url("services/iso_certification"); ?>">ISO Certification</a></li> -->
                                        <!-- <li><a href="<?php echo base_url("services/trademark"); ?>">IEC Registration</a></li> -->
                                        <!-- <li><a href="<?php echo base_url("services/copyright"); ?>">NSIC Registration</a></li> -->
                                        <!-- <li><a href="<?php echo base_url("services/trademark"); ?>">FDA Registration</a></li> -->
                                        <!-- <li><a href="<?php echo base_url("services/copyright"); ?>">Gumasta / Shop Act Establishment Registration</a></li> -->
                                        <!-- <li><a href="<?php echo base_url("services/msme"); ?>">MSME Registration</a></li> -->
                                        <!-- <li><a href="<?php echo base_url("services/copyright"); ?>">Startup Registration</a></li> -->
                                    </ul>
                                </li>
                                <!-- <li class="dropdown"><a class="smooth-menu" data-toggle="dropdown">Other <i class="bi bi-caret-right-fill"></i></a> -->
                                <li><a href="<?php echo base_url("services/iso_certification"); ?>">ISO Certification</a></li>
                                <li><a href="<?php echo base_url("services/msme"); ?>">MSME Registration</a></li>
                                <li><a href="<?php echo base_url("services/import_export"); ?>">IEC</a></li>
                                <!-- <li class="dropdown"><a>Intellectual Property Rights <i class="bi bi-caret-right-fill"></i></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url("services/patent"); ?>">Patent</a></li>
                                        <li><a href="<?php echo base_url("services/trademark"); ?>">Trademark & Service Marks</a></li>
                                        <li><a href="<?php echo base_url("services/copyright"); ?>">Copyright</a></li>
                                        <li><a href="<?php echo base_url("services/design_registration"); ?>">Design Registration</a></li>
                                        <li><a href="<?php echo base_url("services/trade_secrets"); ?>">Trade Secrets</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a>Legal <i class="bi bi-caret-right-fill"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url("services/drafting_legal_documents"); ?>">Drafting Of Legal Documents</a></li>
                                        <li><a href="<?php echo base_url("services/barcode_registration"); ?>">Barcode Registration</a></li>
                                        <li><a href="<?php echo base_url("services/shop_establishment_license_registration"); ?>">Shop & Establishment Licence Registration</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a>Returns <i class="bi bi-caret-right-fill"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url("services/gst_return"); ?>">GST Return</a></li>
                                        <li><a href="<?php echo base_url("services/itr"); ?>">Income Tax Return</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a>Tax <i class="bi bi-caret-right-fill"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url("services/filing_itr"); ?>">Filing Of ITR</a></li>
                                        <li><a href="<?php echo base_url("services/twelveA_certificate"); ?>">12A/80G Certificate</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>

                        <!-- <li class="dropdown">
                            <a class="smooth-menu" data-toggle="dropdown">Company Registration <i class="bi bi-caret-down-fill"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("services/llp"); ?>">LLP</a></li>
                                <li><a href="<?php echo base_url("services/opc"); ?>">One Person Company</a></li>
                                <li><a href="<?php echo base_url("services/private_limited_company"); ?>">Private Limited Company</a></li>
                                <li><a href="<?php echo base_url("services/roc"); ?>">Roc Compliances</a></li>
                                <li><a href="<?php echo base_url("services/trust_registration"); ?>">Trust Registration</a></li>
                                <li><a href="<?php echo base_url("services/partnership_firm_registration"); ?>">Partneship Firm Registration</a></li>
                                <li><a href="<?php echo base_url("services/company_annual_filing"); ?>">Company Annaul Filing</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a class="smooth-menu" data-toggle="dropdown">Other <i class="bi bi-caret-down-fill"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("services/iso_certification"); ?>">ISO Certification</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)">FSSAI <i class="bi bi-caret-right-fill"></i></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url("services/fssai_basic"); ?>">Basic</a></li>
                                        <li><a href="<?php echo base_url("services/fssai_state"); ?>">State</a></li>
                                        <li><a href="<?php echo base_url("services/fssai_central"); ?>">Central</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url("services/import_export"); ?>">Import-Export Code Registration</a></li>
                                <li><a href="<?php echo base_url("services/msme"); ?>">MSME</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a class="smooth-menu" href="<?php echo base_url("contact"); ?>">contact us</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="<?php echo base_url("VPC"); ?>">pay now</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="<?php echo base_url("career"); ?>">Career</a>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->