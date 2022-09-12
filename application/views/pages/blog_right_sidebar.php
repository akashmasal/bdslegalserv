<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow theme-hard bg-fixed text-light" style="background-image: url(<?php echo base_url(); ?>assets/img/business/7.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <h1>Latest Blog</h1> -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active">blogs</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
    ============================================= -->
<div class="blog-area full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">
                    <?php
                    if (!empty($blogdata)) {
                        foreach ($blogdata as $data) {
                    ?>
                            <div class="item">
                                <div class="thumb">
                                    <a href="blog-single-left-sidebar.html">
                                        <img src="<?php echo base_url() . $data['blog_image'] ?>" width="700" height="200" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="blog-single-left-sidebar.html"><?php echo $data['blog_header']; ?></a>
                                    </h3>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fas fa-calendar-alt"></i> <?php echo $data['created_at']; ?></li>
                                            <li><a href="#"><i class="fas fa-user"></i> <?php echo $data['blog_author']; ?></a></li>
                                            <!-- <li><a href="#"><i class="fas fa-comments"></i> 5 Comments</a></li> -->
                                        </ul>
                                    </div>
                                    <!-- <div class="tags">
                                        <ul>
                                            <li><a href="#">Growth</a></li>
                                            <li><a href="#">Finance</a></li>
                                        </ul>
                                    </div> -->
                                    <p>
                                        <?php echo $data['blog_short_description']; ?>
                                    </p>
                                    <a href="blog-single-left-sidebar.html" class="btn btn-theme effect btn-sm">Read More</a>
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="item">
                            <h1>No Blogs Found</h1>
                        </div>
                    <?php
                    }

                    ?>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <li><a href="#">Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="title">
                                <h4>Search</h4>
                            </div>
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" class="form-control">
                                    <input type="submit" value="search">
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>category list</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li><a href="#">
                                            educataon</a>
                                    </li>
                                    <li>
                                        <a href="#">national</a>
                                    </li>
                                    <li>
                                        <a href="#">sports</a>
                                    </li>
                                    <li>
                                        <a href="#">megazine</a>
                                    </li>
                                    <li>
                                        <a href="#">health</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Recent Post</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/thumb/1.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">12 Feb, 2018</span> - By <a href="#">Author</a>
                                        </div>
                                        <a href="#">Participate in staff meetings manage dedicated</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/thumb/2.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">12 Feb, 2018</span> - By <a href="#">Author</a>
                                        </div>
                                        <a href="#">Future Plan & Strategy for Consutruction </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/thumb/3.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">12 Feb, 2018</span> - By <a href="#">Author</a>
                                        </div>
                                        <a href="#">Melancholy particular devonshire alteration</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-item archives">
                            <div class="title">
                                <h4>Archives</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li><a href="#">Aug 2018</a></li>
                                    <li><a href="#">Sept 2018</a></li>
                                    <li><a href="#">Nov 2018</a></li>
                                    <li><a href="#">Dec 2018</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item gallery">
                            <div class="title">
                                <h4>Gallery</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/portfolio/1.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/portfolio/3.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/portfolio/4.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/portfolio/con-1.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/portfolio/con-3.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/portfolio/ren-1.jpg" alt="thumb">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item social-sidebar">
                            <div class="title">
                                <h4>follow us</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="g-plus">
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item tags">
                            <div class="title">
                                <h4>tags</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li><a href="#">Fashion</a>
                                    </li>
                                    <li><a href="#">Education</a>
                                    </li>
                                    <li><a href="#">nation</a>
                                    </li>
                                    <li><a href="#">study</a>
                                    </li>
                                    <li><a href="#">health</a>
                                    </li>
                                    <li><a href="#">food</a>
                                    </li>
                                    <li><a href="#">travel</a>
                                    </li>
                                    <li><a href="#">science</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->