<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav-icon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style1.css'); ?>" />
    <title>Compuspares</title>
    <style>
        .img {
            height: 300px;
            width: 100%;
        }

        .box1 {
            background-color: #1c4c78;

            width: 100%;
        }
        .img_view {
            height: 300px;
            width: 100%;
        }

        .box1 {
            background-color: #1c4c78;

            width: 100%;
        }

        #aboutus {
            font-family: 'Montserrat', sans-serif;
        }

        .rent {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .rent img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .rent_specification ul li {
            margin-top: 0px;
            font-size: 14px;
        }

        .rent-tle {
            color: #FF6B00;
            font-size: 25px;
        }

        .rent li {
            
            text-indent: -0.7rem;
            list-style: none;
            line-height: 25px;
        }

        .rent li::before {
            content: "\2605";
            margin-right: 10px;
        }

        

        .conul {
            margin-top: 20px;

            
        }

        .req_btn {
            display: flex;
            color: #FF6B00;
            background-color: white;
            border-radius: 50px;
            border: 1px solid #FF6B00;
            margin-left: 50px;
            width: 150px;
        }

        .req_btn:hover {
            color: white;
            background-color: #e55a00;
        }

        /* .req_btn {} */

        /* sidePopupForm */

        #sidePopupFormLabel {
            color: #FF6B00;
        }

        .side_pad {
            padding: 20px;
        }

       
        .back{
            background-color: white;

        }
        body{
            background-color: white;
        }

        .social-media a { margin:0 15px; }

        .social-media  .fa{
            /* font-size: 60px; */
            line-height:40px;
            transition: .6s;
            color: #000;
        }
        .social-media  a i{
            font-size:18px;
            padding-top:7px;

        }
        .social-media  { color: #fff;  }

        .social-media  .fa:hover{ color:#fff; }

        .social-media  a {
            display:block;
            width:30px;
            height: 30px;
            border-radius: 50%;
            text-align:center;
            transition: .6s; 
            background-color:#fff;
            box-shadow: 0 2px 2px rgba(0,0,0,.5);
        }  
        .social-media  a:hover{
            transform: translate(0, -5px);
        }
        .fa-brands:hover{ color: #fff;}
        .facebook_icon{ color:#3b5999;}
        .youtube_icon{ color: #bb0000;}
        .linkedin_icon{ color: #007bb6;}
        .instagram_icon{ color: #E4405F;}
        .whatsapp_icon{ color: #25D366;}
                

        .facebook_icon:hover{background-color: #3b5999;  color:#fff; }
        .youtube_icon:hover{background-color: #bb0000;  color:#fff; }
        .linkedin_icon:hover{background-color: #007bb6;  color:#fff; }
        .instagram_icon:hover{background-color: #E4405F;  color:#fff; }
        .whatsapp_icon:hover{background-color: #25D366;  color:#fff; }




        h2{
        text-align:center;
        padding: 20px;
        }
        /* Slider */

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider
        {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                    user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
                touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list
        {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        .slick-list:focus
        {
            outline: none;
        }
        .slick-list.dragging
        {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list
        {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
        }

        .slick-track
        {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }
        .slick-track:before,
        .slick-track:after
        {
            display: table;
            content: '';
        }
        .slick-track:after
        {
            clear: both;
        }
        .slick-loading .slick-track
        {
            visibility: hidden;
        }

        .slick-slide
        {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }
        [dir='rtl'] .slick-slide
        {
            float: right;
        }
        .slick-slide img
        {
            display: block;
        }
        .slick-slide.slick-loading img
        {
            display: none;
        }
        .slick-slide.dragging img
        {
            pointer-events: none;
        }
        .slick-initialized .slick-slide
        {
            display: block;
        }
        .slick-loading .slick-slide
        {
            visibility: hidden;
        }
        .slick-vertical .slick-slide
        {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }
        .slick-arrow.slick-hidden {
            display: none;
        }
        .arrow{
            position: relative;

        }
        .inbtn{
            position:fixed;
            right: 10px;
            bottom:10px;
            z-index: 10;
        }
        .top-image img {
                width: 100%;
                height: 900px;
        }
            .top-image {
            width: 100%;
            height: 950px;
        } 
        
     

        @media  screen and (max-width:620px) {

            .top-image img {
                width: 100%;
                height: 500px;
            }
             .top-image {
                width: 100%;
                height: 450px;
            } 
        }


  

    </style>

</head>

<body class="back arrow">
        <div class="inbtn ">
            <a href="#top"  class=" rounded pb-4 text-dark"  data-aos="fade-left"  data-aos-offset="600">
                <i style=" background-color: #F9A825; font-size:20px" class="bi bi-arrow-up  p-1 pt-3 rounded-2"></i>
            </a>
        </div>
    <div class="contact-align " id="top">
        
        <div class="contact ">
            <div class="add">
                <span>computerschennai@gmail.com</span>
            </div>
            <div class="social-media d-flex pt-2 d-none d-lg-flex ">
                <a class="facebook_icon" href="https://www.facebook.com/profile.php?id=61551204340288"><i class="fa-brands fa-facebook"></i>   </a>
                <a class="youtube_icon" href="https://www.youtube.com/@compuspares"><i class="fa-brands fa-youtube"></i>  </a>
                <a class="linkedin_icon" href="https://www.linkedin.com/in/compu-spares-018905241/"><i class="fa-brands fa-linkedin"></i>   </a>
                <a class="instagram_icon" href="https://www.instagram.com/compuspares/"><i class="fa-brands fa-instagram"></i>   </a>
                <a class="whatsapp_icon" href="https://wa.me/9840433727"><i class="fa-brands fa-whatsapp"></i>   </a>
            </div>
        </div>
    </div>

    <div class="container back">
        <div class="row back m-0 p-0">
            <div class="col-12 d-flex justify-content-center col-lg-3">
                <div class="contact1-align ">
                    <div class="contact1">
                        <div class="logo">
                            <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 m-0  tex-center  d-flex  justify-content-md-center   col-lg-3">
                <div class="shop_no  ">
                    <div class="cont1   ">
                        <i class="fa-solid fa-phone-flip "></i>
                        <p>Sales <br />
                            Call <span>(+91) 98404 33727 </span>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-12 d-flex m-0  justify-content-md-center    col-lg-3">
                <div class="cont1 m-0 p-0">
                    <i class="fa-solid fa-phone-flip"></i>
                    <p style="font-size: 18px;color: #1c4c78;">
                        Customer Care <br />
                        Call <span>(+91) 7299 00 9991</span>
                    </p>
                </div>
            </div>

            <div class="col-12   d-flex  justify-content-md-center   col-lg-3 ">
                <div class="cont1 m-0 p-0 ">
                    <i class="fa-solid fa-calendar-days"></i>
                    <p style="font-size: 18px;color: #1c4c78;">
                        Mon - Sat <br />
                        <span style="color:red;">10 AM - 9 PM</span>
                    </p>
                </div>
            </div>
        </div>



    

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="menu text-algins-start text-white">
                    <a href="#"><span>HOME</span></a>
                    <a href="#service"><span>ABOUT US</span></a>
                    <a href="#aboutus"><span>SERVICES</span></a>

                    <a href="#gallery"><span>GALLERY</span></a>
                    <a href="#contact"><span>CONTACT US</span></a>
                </div>
                <div class="hamburger" onclick="toggleMenu()">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- slider -->

    <div id="carouselExampleControls" class="carousel slide container-fluid" data-bs-ride="carousel">


        <div class="carousel-inner" data-aos="flip-left">
            <?php $sno = 1;
            foreach ($slide as $row): ?>
                <?php if ($row['status'] == 1): ?>

                    <div class="carousel-item <?php if ($sno == 1) {
                        echo 'active';
                    } ?>">
                        <div class="top-image">
                            <img src="<?php echo base_url() . "/uploads/" . $row['slide']; ?>" alt="..."/>
                        </div>
                    </div>


                    <?php $sno++; endif ?>
            <?php endforeach; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- slider-ends -->

    <div class="container " id="aboutus">
        <p class="text1">COMPUTER REPAIR & DESIGN SERVICES</p>
        <p class="text2">Hundreds of satisfied customers</p>

        <div class="row block m-0 ">


            <?php foreach ($services as $row): ?>
                <?php
                $sentences = explode('.', $row['content']);
                $sentences = array_map('trim', $sentences);
                $sentences = array_filter($sentences);
                ?>


                <div class="col-lg-3 col-md-6">
                    <div class="card rent " data-aos="zoom-in" data-aos-duration="1500">
                        <div class="img-place">
                            <img src="<?php echo base_url() . "/uploads/" . $row['image']; ?>" alt="MacBook for Rent"
                            class="card-img-top" style=" height: 200px;" >
                        </div>
               
                        <div class="card-body rent_specification">
                            <h5 class="card-title rent-tle">MacBook For Rent</h5>
                            <ul class="conul">
                                <?php foreach ($sentences as $sentence): ?>
                                    <li><?php echo $sentence . PHP_EOL; ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <p>

                            </p>
                        </div>
                        <a class="btn  mb-3  req_btn" data-bs-toggle="offcanvas" data-bs-target="#sidePopupForm"
                            aria-controls="sidePopupForm">Request A Quote</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Offcanvas Component (Side Pop-up Form) -->
    <div class=" offcanvas offcanvas-end mt-5  rounded" tabindex="-1" id="sidePopupForm"
        aria-labelledby="sidePopupFormLabel" style="height:400px;">
        <div class="offcanvas-header">
            <h6 id="sidePopupFormLabel">Get high-quality laptops on rent for your business</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body side_pad">
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control offcanvas_r border-0 border-bottom" id="companyName"
                        placeholder="Name">
                </div>

                <div class="mb-3">
                    <input type="phone" class="form-control offcanvas_r border-0 border-bottom" id="Name"
                        placeholder="Contact">
                </div>
                <div class="mb-3">
                    <select class="form-select border-0 border-bottom " id="lookingFor ">
                        <option class="text-muted" value="" selected>What are you looking for</option>
                        <option value="desktops">Rental Desktops</option>
                        <option value="laptops">Rental Laptops</option>
                        <option value="mac">Rental Mac Systems</option>
                        <option value="tablet">Rental Tablet</option>
                        <option value="workstation">Rental Workstation</option>
                        <option value="servers">Rental Servers</option>
                        <option value="networking">Rental Networking Devices</option>
                        <option value="storage">Rental Storage Solution</option>
                        <option value="others">Others</option>

                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select border-0 border-bottom offcanvas_r" id="location">
                        <option selected>Select your location</option>
                        <option value="1">New York</option>
                        <option value="2">California</option>
                        <option value="3">Texas</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-custom req_btn w-30">Send Request</button>
            </form>
        </div>
    </div>




    <div class="container mt-4 mb-4  ">
        <div class="tech_support  vh-60 ms-xl-2 me-xl-2 " id="service" >
            <div class="container">
                <div class="row pt-4">
                    <div class="col">
                        <p class="text1 ">Tech Support When You Need It</p>
                        <p class="text2">
                            Get fast, professional IT support from highly-qualified
                        </p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <style>
                    .aboutpara{
                        text-align:justify;
                    }
                    
                </style>
        

                <div class="container pb-4 "  >
                    <?php foreach ($support as $row): ?>
                        <div class="row m-0 ">
                            <div class=" col-md-6 d-flex mt-3 justify-content-center  align-items-center">
                                <div>
                                    <img src="<?php echo base_url() . "/uploads/" . $row['img']; ?>" class="img-fluid rounded "
                                        alt="" style="height: 300px;"data-aos="fade-right"  
                                        data-aos-duration="1500"/>
                                </div>
                            </div>

                            <div class="col-md-6 align-self-start">
                                <p class="aboutpara mt-5 col-12 " style="line-height: 28px; font-weight: 550; font-size:16px;"
                                    data-aos="fade-left" data-aos-duration="1200">
                                    <?php echo $row['content']; ?>
                                </p>
                            
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- <h2>Our  Partners</h2> -->
        <section class="customer-logos slider">
        <?php $s = 1; foreach ($brand as $row): ?>
            <?php if ($row['status'] == 1): ?>
                <div class="slide "  ><img src="<?php echo base_url() . "/uploads/" . $row['img']; ?>"></div>
            
            <?php endif ?>
        <?php $s++; endforeach; ?>
        </section>
    </div>


  



   
   <style>
        body {
            margin: 0;
            background-color: #e5e5e5;
        }

        main {
            width: min(1200px, 90vw);
            margin: auto;
            margin-top: 80px;
        }

        .slider {
            width: 100%;
            height: var(--height);
            overflow: hidden;
            mask-image: linear-gradient(to right,
                    transparent,
                    #000 10% 90%,
                    transparent);
        }

        .slider .list {
            display: flex;
            width: 100%;
            min-width: calc(var(--width) * var(--quantity));
            position: relative;
        }

        .slider .list .item {
            width: var(--width);
            height: var(--height);
            position: absolute;
            left: 100%;
            animation: autoRun 10s linear infinite;
            transition: filter 0.5s;
            animation-delay: calc((10s / var(--quantity)) * (var(--position) - 1) - 10s) !important;
        }

        .slider .list .item img {
            width: 100%;
        }

        @keyframes autoRun {
            from {
                left: 100%;
            }

            to {
                left: calc(var(--width) * -1);
            }
        }

        .slider:hover .item {
            animation-play-state: paused !important;
            filter: grayscale(1);
        }

        .slider .item:hover {
            filter: grayscale(0);
        }
    </style>




    <!-- Gallery -->



    <div class="container" id="gallery">
        <p class="text1">GALLERY</p>


        <div class="row gallery m-0 p-0">
            <?php foreach ($gallery as $row): ?>
                <?php if ($row['status'] == 1): ?>
                    <div class="col-xl-4 col-md-6 col-sm-12 ">
                        <img data-aos="flip-left" data-aos-duration="1500" id="img1" src="<?php echo base_url() . "/uploads/" . $row['img']; ?>" alt=""
                            class="img-fluid img img_test " />
                    </div>

                    <div class="popup-image">
                        <span>&times;</span>

                        <img src="" alt="">
                    </div>
                <?php endif ?>
            <?php endforeach; ?>
        </div>

    </div>
    <!-- Gallery Ends -->

    <!-- volunteers -->

    <div class="volunteers" style="padding: 0%; margin:10%; box-sizing: border-box; margin: 15px 6.8%">
        <div class="vol_bgcolor ">
            <div class="container p-5">
                <?php foreach ($apply as $row): ?>
                    <div class="row m-0">
                        <div class="col-xl-6 align-self-center">
                            <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/24701-nature-natural-beauty.jpg/1280px-24701-nature-natural-beauty.jpg" alt=""> -->
                            <h1 class="become_h1">
                                Become A Proud <br /><span style="color: orange">Volunteer</span>
                            </h1>
                            <p class="volunteers_p " style="text-align: justify;">
                                <?php echo $row['content']; ?>
                            </p>
                            <button class="btn_vol">apply Here</button>
                        </div>

                        <div class="col-xl-6 text-center m-0 volunteerss ">
                            <img style="width:300px; height:250px; " data-aos="flip-up" data-aos-duration="1200"
                                src="<?php echo base_url() . "/uploads/" . $row['img']; ?>"
                                class="img-thumbnail img-fluid m-2" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- volunteers ends -->

    <!-- our team -->

    <div class="container">
        <p class="text1 p-4">OUR TEAM</p>

        <div style="box-sizing: border-box; margin-left:0px; padding-bottom: 15px" class="row p-0 m-0">
            <?php foreach ($engineers as $row): ?>
                <div class="col-xl-3 col-md-6 col-sm-12 mb-2 ">

                    <div class="team_main " data-aos="zoom-in" data-aos-duration="1500" >
                        <div class="team">
                            <img src="<?php echo base_url() . "/uploads/" . $row['img']; ?>" class="img-fluid img team_img"
                                alt="" />
                      
                        </div>
                        <div class="designation">
                            <h4><?php echo $row['title']; ?></h4>
                            <i><?php echo $row['content']; ?></i>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

    </div>
    <div style=" margin:6%;" class="row mt-3 mb-3 " >
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15548.22046294176!2d80.2211949!3d13.0321622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267a5fbff3269%3A0xde75b85b70fd68a4!2sCOMPUSPARES!5e0!3m2!1sen!2sin!4v1733830385666!5m2!1sen!2sin" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- footer -->
    <footer id="contact">
        <div class="container ps-xl-5 pe-xl-5">
            <div class="row m-0 d-flex justify-content-around">
                <div class="col-xl-4  menus text-start  " >
                    <h3 >Contact Info</h3>
                    <ul style="padding-top:-200px;">                     
                        <li >M/s COMPUSPARES</li>
                        <li class=" address">
                            <div>25/1,Govindan road,</div><div>(Opp: Kesava perumal koil)</div><div>West Mambalam</div> <div>Chennai-600033</div>
                        </li>
                    </ul>
                </div>
                            

                <!-- Links Section -->
            
                <div class=" col-lg-1 menus links  ms-xl-5  ">
                    <h3 style="text-align: start">Links</h3>
                    <ul style="text-align: start  ">
                        <li><a class="text-white" href="#">Home</a></li>
                        <li><a class="text-white" href="#aboutus">Service </a></li>
                        <li><a class="text-white" href="#service">About</a></li>
                        <li><a class="text-white" href="#gallery">Gallery</a></li>
                        <!-- <li><a class="text-white" href="#">Natural Disasters</a></li> -->
                    </ul>
                </div>

                <!-- Contact Info Section -->
                <div class="col-xl-4 menus donate  ">
                    <h3 style="text-align: start">Compuspares</h3>
                    <p style="text-align: start">
                        Giving financial or material support to various causes and
                        organizations allows for positive change.
                    </p> 
                    <div class="social-media d-flex  pb-4 ">
                        <a class="facebook_icon m-0" href="https://www.facebook.com/profile.php?id=61551204340288"><i class="fa-brands fa-facebook"></i>   </a>
                        <a class="youtube_icon" href="https://www.youtube.com/@compuspares"><i class="fa-brands fa-youtube"></i>  </a>
                        <a class="linkedin_icon" href="https://www.linkedin.com/in/compu-spares-018905241/"><i class="fa-brands fa-linkedin"></i>   </a>
                        <a class="instagram_icon" href="https://www.instagram.com/compuspares/"><i class="fa-brands fa-instagram"></i>   </a>
                        <a class="whatsapp_icon" href="https://wa.me/9840433727"><i class="fa-brands fa-whatsapp"></i>   </a>
                    </div>
                </div>    

            </div>
        </div>
        
        <hr />
        <div style="height: 1vh;" class="footer-bottom">
            <p>&copy; 2024 by Bright Technologies. All Rights Reserved.</p>
        </div>
        </div>
    </footer>
    <div id="over"></div>


    <!-- our team ends -->

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init();</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>

</html>