<?php
session_start();
if (!isset($_SESSION["userRole"])) {
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vizew</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <?php
    require_once("header.php") ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Archives</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reunification of migrant</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-video-area">
                        <iframe src="https://www.youtube.com/embed/1nI-GMmHMHs" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content d-flex">

                        <!-- Blog Content -->
                        <div class="blog-content">

                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="single-post.php" class="post-title mb-2">Reunification of migrant toddlers, parents should be
                                    completed Thursday</a>

                                <div class="d-flex justify-content-between mb-30">
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                    </div>
                                </div>
                            </div>

                            <p>I love dals. All kinds of them but yellow moong dal is my go-to lentil when I am in need of some easy
                                comfort food. In this recipe I added suva or dill leaves to the classic moong dal recipe for a twist. I
                                like the simplicity of this recipe, just the dal, tomatoes and fresh dill with simple seasoning. This
                                recipe is without any onions and garlic. I love the aroma of fresh dill and I think, in Indian food, we
                                don’t really use dill as much as we can. Nine out of ten times, the only green leaves sprinkled on a
                                curry or a dal is fresh coriander and while I love coriander too, dill adds a unique freshness and aroma
                                to the dal. The delicate feathery leaves of dill are also rich in Vitamin A, C and minerals like iron
                                and manganese.</p>


                            <!-- Post Author -->
                            <div class="vizew-post-author d-flex align-items-center py-5">
                                <div class="post-author-thumb">
                                    <img src="img/bg-img/30.jpg" alt="">
                                </div>
                                <div class="post-author-desc pl-4">
                                    <a href="#" class="author-name">Calantha Flower</a>
                                </div>
                            </div>

                            <!-- Related Post Area -->
                            <div class="related-post-area mt-5">
                                <!-- Section Title -->
                                <div class="section-heading style-2">
                                    <h4>Related Post</h4>
                                    <div class="line"></div>
                                </div>

                                <div class="row">

                                    <!-- Single Blog Post -->
                                    <div class="col-12 col-md-6">
                                        <div class="single-post-area mb-50">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/11.jpg" alt="">

                                                <!-- Video Duration -->
                                                <span class="video-duration">05.03</span>
                                            </div>

                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="single-post.php" class="post-title">Warner Bros. Developing ‘The accountant’
                                                    Sequel</a>
                                                <div class="post-meta d-flex">
                                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
                                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="col-12 col-md-6">
                                        <div class="single-post-area mb-50">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/12.jpg" alt="">

                                                <!-- Video Duration -->
                                                <span class="video-duration">05.03</span>
                                            </div>

                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="single-post.php" class="post-title">Searching for the 'angel' who held me on
                                                    Westminste</a>
                                                <div class="post-meta d-flex">
                                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Comment Area Start -->
                            <div class="comment_area clearfix mb-50">

                                <!-- Section Title -->
                                <div class="section-heading style-2">
                                    <h4>Comment</h4>
                                    <div class="line"></div>
                                </div>

                                <ul>
                                    <!-- Single Comment Area -->
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="img/bg-img/31.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <h6>Tomas Mandy</h6>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                                    sed quia non numquam eius</p>
                                            </div>
                                        </div>

                                    </li>

                                    <!-- Single Comment Area -->
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="img/bg-img/33.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <h6>Simon Downey</h6>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                                    sed quia non numquam eius</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Post A Comment Area -->
                            <div class="post-a-comment-area">

                                <!-- Section Title -->
                                <div class="section-heading style-2">
                                    <h4>Leave a reply</h4>
                                    <div class="line"></div>
                                </div>

                                <!-- Reply Form -->
                                <div class="contact-form-area">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <textarea name="message" class="form-control" id="message" placeholder="Message*"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn vizew-btn mt-30" type="submit">Submit Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Latest Video</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-post-area mb-30">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/13.jpg" alt="">

                                    <!-- Video Duration -->
                                    <span class="video-duration">05.03</span>
                                </div>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="single-post.php" class="post-title">Full article Prince Charles's 'urgent' global
                                        research</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.php" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 23</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.php" class="post-title">Sweet Yummy Chocolatea Tea</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 17</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 33</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 26</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/35.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.php" class="post-title">How To Make Orange Chicken Recipe?</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 11</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 21</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>