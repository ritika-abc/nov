<?php
include "nav.php";
?>
        <!--====== Start Page-title-area section ======-->
        <section class="page-title-area text-white bg_cover" style="background-image: url(image/banner/contact.jpg);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Contact Us</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="/">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Contact Us</span>
                    </div>
                </div>
            </div>
        </section><!--====== End Page-title-area section ======-->
        <!--====== Start Contact Info section ======-->
        <section class="contact-info-section pt-100">
            <div class="container">
                <div class="contact-info-wrapper wow fadeInUp">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <!--====== Contact Info Item ======-->
                            <div class="contact-info-item text-center">
                                <div class="icon">
                                    <img src="icon/location.png" alt="icon">
                                </div>
                                <div class="info">
                                    <span class="title">Location</span>
                                    <h6> Gujarat – 364001 India</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--====== Contact Info Item ======-->
                            <div class="contact-info-item text-center">
                                <div class="icon">
                                    <img src="icon/email.png" alt="icon">
                                </div>
                                <div class="info">
                                    <span class="title">Email Address</span>
                                    <h6><a href="mailto:info@suvanexim.com">info@suvanexim.com</a></h6>
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--====== Contact Info Item ======-->
                            <div class="contact-info-item text-center">
                                <div class="icon">
                                    <img src="icon/call.png" alt="icon">
                                </div>
                                <div class="info">
                                    <span class="title">Phone No</span>
                                    <h6><a href="tel:+91 97141 46633">+91 97141 46633</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact Info section ======-->
        <!--====== Start Contact section ======-->
        <section class="contact-section pt-95 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <!--====== Section-title ======-->
                        <div class="section-title wow fadeInRight mb-50">
                            <span class="sub-title"><i class="flaticon-plant"></i>Contact Us</span>
                            <h2>Ready to Work 
                                With Us</h2>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--=== Map Box ===-->
                            <div class="map-box wow fadeInLeft mb-50">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29640.467953365864!2d72.12860132255153!3d21.777997026987542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f4ff0e1b0ee7d%3A0xbaf12e181a0779e5!2sBhavnagar%2C%20Gujarat%20364001!5e0!3m2!1sen!2sin!4v1776763141652!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Contact Form Wrapper ======-->
                            <div class="contact-form-wrapper mb-50 wow fadeInRight">
                                <div class="contact-form">
                                    <div class="form_group">
                                        <label><i class="far fa-user"></i></label>
                                        <input type="text" class="form_control name" placeholder="Full Name" name="name" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-envelope"></i></label>
                                        <input type="email" class="form_control email" placeholder="Email Address" name="email" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="fa-solid fa-phone"></i></label>
                                        <input type="text" class="form_control phone" placeholder="Phone Number" name="number" required>
                                    </div>
                                    
                                    <div class="form_group">
                                        <label><i class="fa-regular fa-comment "></i></label>
                                        <textarea class="form_control message" rows="3" placeholder="Message" name="message"></textarea>
                                    </div>
                                    <div class="form_group">
                                        <button class="main-btn primary-btn" onclick="contact()">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact section ======-->
        <!--====== Start Info Section ======-->
     
       <?php
include "footer.php";
       ?>