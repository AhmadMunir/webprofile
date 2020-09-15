<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <?php $this->load->view('partial/head') ?>

    </head>
    <body>
        <!--================Header Area =================-->
        <?php $this->load->view('partial/header') ?>

        <!--================Header Area =================-->

        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Gallery</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================Breadcrumb Area =================-->
        <!-- <section class="gallery_area section_gap"> -->
            <div class="container">
            <br><img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">
                <div class="row imageGallery1" id="gallery">
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="assets/image/gallery/02.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="assets/image/gallery/01.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="assets/image/gallery/02.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="assets/image/gallery/02.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="assets/image/gallery/02-1.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="assets/image/gallery/03.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="assets/image/gallery/04.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="assets/image/gallery/04.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="assets/image/gallery/06.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="assets/image/gallery/05.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="assets/image/gallery/04.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="assets/image/gallery/06.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="assets/image/gallery/01-1.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="assimage/gallery/01-1.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="assets/image/gallery/02-1.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="image/gallery/02-1.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="assets/image/gallery/03-1.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="image/gallery/03-1.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================ start footer Area  =================-->
        <?php $this->load->view('partial/footer') ?>

		<!--================ End footer Area  =================-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php $this->load->view('partial/javascript') ?>

    </body>
</html>
