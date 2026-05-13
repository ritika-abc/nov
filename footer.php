


    <!--====== Start Footer ======-->
    <footer class="footer-area text-white main-bg">
        <div class="container">
            <!--====== Footer Widget ======-->
            <div class="footer-widget-area pt-80 pb-40">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInUp">
                            <div class="widget-content">
                                <div class="footer-logo mb-25">
                                    <h3>Suvan Exim</h3>
                                </div>
                                <p>Suvan Exim is a dynamic export company based in Bhavnagar, Gujarat, committed to
                                    delivering high-quality Indian agricultural produce and FMCG goods to global
                                    markets. Established in 2026, the company focuses on building long-term
                                    relationships by offering products that meet international quality benchmarks and
                                    customer expectations. </p>
                                <a href="contact.php" class="main-btn filled-btn filled-white">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget footer-nav-widget mb-40 wow fadeInUp">
                            <h4 class="widget-title">Quick Link</h4>
                            <div class="widget-content">
                                <ul class="footer-nav">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="products.php">Our Products</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget contact-info-widget mb-40 wow fadeInDown">
                            <h4 class="widget-title">Head Office</h4>
                            <div class="widget-content">
                                <ul class="info-list">
                                    <li>Suvan Exim
                                        2nd Floor, Office No. 212
                                        Sumeru Prime, Plot No. 4/A
                                        Parimal Chowk, Waghawadi Road
                                        Bhavnagar, Gujarat – 364001
                                        India</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget contact-info-widget mb-40 wow fadeInDown">
                            <h4 class="widget-title">Contact </h4>
                            <div class="widget-content">
                                <ul class="info-list">

                                    <li><a href="tel:+91 97141 46633">+91 97141 46633</a></li>
                                    <li><a href="mailto:info@suvanexim.com">info@suvanexim.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--=== Copyright Area ===-->
            <div class="copyright-area">
                <div class="row">
                    <div class="col-lg-6">
                        <!--====== Copyright Text ======-->
                        <div class="copyright-text">
                            <P>Copyright&copy; 2026 <a href="/"><u>Suvan Exim</u></a>. All Rights Reserved.</P>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--====== Copyright Nav ======-->
                        <div class="copyright-nav float-lg-right">
                            <ul>
                                <li>Designed by <a target="_blank" href="https://web2export.com/"> web2export.com </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--====== End Footer ======-->

















    <script>
        const hero = document.getElementById('hero');
        const layers = hero.querySelectorAll('[data-speed]');
        const sensitivity = 11;
        const invert = false;

        hero.addEventListener('mousemove', (e) => {
            const rect = hero.getBoundingClientRect();
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const dx = ((x - centerX) / centerX) * sensitivity;
            const dy = ((y - centerY) / centerY) * sensitivity;
            const dir = invert ? -1 : 1;

            layers.forEach(layer => {
                const speed = parseFloat(layer.dataset.speed);
                layer.style.transform = `translate3d(${dx * speed * dir}px, ${dy * speed * dir}px, 0)`;
            });
        });

        hero.addEventListener('mouseleave', () => {
            layers.forEach(layer => {
                layer.style.transform = 'translate3d(0, 0, 0)';
            });
        });
    </script>






















 

    <a class="fixed-bottom w-25 pb-3 px-3 whataap fa-bounce" href="https://wa.me/919714146633?text=">
        <img src="wp.png" width="80px" height="80px" alt="">
        <!-- <i class="fa-solid fa-phone fa-shake"></i> <i class="fa-solid fa-phone"></i>-->
    </a>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="text-center">
                        <!-- <h4 class="modal-title fs-5" id="exampleModalLabel"> Suvan Exim -->
                        </h4>
                        <img src="image/logo/logo.png" height="auto" class="m-auto" width="30%" alt="">
                    </div>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6 my-2">
                            <input type="text" class="form-control name1" required placeholder="Enter Your Name">
                        </div>

                        <div class="col-12 col-md-6 my-2">
                            <input type="number" class="form-control number1" required placeholder="Enter Your Number">
                        </div>

                        <div class="col-12  col-md-6  my-2">
                            <input type="email" class="form-control email1" required placeholder="Enter Your Email">
                        </div>

                        <div class="col-12 col-md-6 my-2">
                            <input type="text" class="form-control country1" required placeholder="Enter Your Country">
                        </div>

                        <div class="col-12  my-2">
                            <input type="text" class="form-control product1" required placeholder="Enter Product Name">
                        </div>

                        <div class="col-12 my-2">
                            <input type="text" class="form-control qty1" required placeholder="Enter Quantity">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" onclick="go()" class="btn-gold py-3 px-4">Submit</button>
                </div>
            </div>
        </div>
    </div>



    <!-- labgu -->
    <!--trans-->
    <style>
        .fd {
            position: fixed;
            right: 0%;
            bottom: 20%;
            z-index: 2000;
        }

        .main_traslator {
            position: relative;
            height: 60px;
            width: 250px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: white;
            /* display: flex;
            align-items: center; */
            border: 2px solid rgba(188, 188, 188, 0.555);
            transform: translateX(75%);
            transition: 0.4s;
            border-radius: 10px;

        }

        .main_traslator:hover {

            transform: translateX(0%);
            transition: 0.4s;
        }

        .t-button {
            display: flex;
            position: absolute;
            left: 0%;
            /* left: 70%; */
            width: 250px;
            /* background-color: red; */
            transition: 0.4s;
        }

        .btn_box_1 {
            width: 30%;
            display: flex;
            align-items: center;
        }

        .btn_box_2 {
            width: 80%;
            display: flex;
            align-items: center;
        }

        .red-button select {
            width: 100%;
            padding: 10px;
        }

        .main_traslator:hover .t-button {
            left: 0%;

        }
        #google_translate_element span{
             display:none !important;
        }
        #google_translate_element select{
           border-radius: 10px;
        }
    </style>
    <div class="fd">
        <div class="main_traslator">
            <div class="t-button">
                <div class="red-button btn_box_1">
                    <img src="https://bluworldtrade.com/lg.png" height="70px" style="margin-top: 10px;" width="70px"
                        alt="">
                </div>
                <div class="red-button btn_box_2">
                    <div id="google_translate_element"></div>

                </div>
            </div>
        </div>
    </div>
    <!--trans-->





    
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element_nav');

        }
    </script>

    <script type="text/javascript" src="assets/js/trans.js"></script>
    <!-- labgu -->
    <script>
        function contact() {
            var na = document.querySelector(".name").value;
            var em = document.querySelector(".email").value;
            var phone = document.querySelector(".phone").value;
            var mes = document.querySelector(".message").value;
            var url1 = "https://wa.me/919714146633?text=" +
                "Name: " +
                na + " " +
                "Email: " +
                em + " " +
                "Phone : " + phone + " " +
                "Message : " + mes;
            window.open(url1, "_blank").focus();
        }
    </script>

    <script>
        function go() {
            var name = document.querySelector(".name1").value;
            var number = document.querySelector(".number1").value;
            var email = document.querySelector(".email1").value;
            var country = document.querySelector(".country1").value;
            var product = document.querySelector(".product1").value;
            var qty = document.querySelector(".qty1").value;

            var message =
                "Name: " + name + "%0A" +
                "Mobile: " + number + "%0A" +
                "Email: " + email + "%0A" +
                "Country: " + country + "%0A" +
                "Product: " + product + "%0A" +
                "Quantity: " + qty;

            var url = "https://wa.me/919714146633?text=" + message;
            window.open(url, "_blank");
        }
    </script>
    <!--====== Back To Top  ======-->

    <!--====== Jquery js ======-->
    <!-- <script src="assets/vendor/jquery-3.6.0.min.js"></script> -->
    <!--====== Bootstrap js ======-->
    <script src="assets/vendor/popper/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--====== Slick js ======-->
    <script src="assets/vendor/slick/slick.min.js"></script>
    <!--====== Magnific js ======-->
    <script src="assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!--====== Isotope js ======-->
    <script src="assets/vendor/isotope.min.js"></script>
    <!--====== Imagesloaded js ======-->
    <script src="assets/vendor/imagesloaded.min.js"></script>
    <!--====== Counterup js ======-->
    <script src="assets/vendor/jquery.counterup.min.js"></script>
    <!--====== Waypoints js ======-->
    <script src="assets/vendor/jquery.waypoints.js"></script>
    <!--====== Nice-select js ======-->
    <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!--====== jquery UI js ======-->
    <script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <!--====== WOW js ======-->
    <script src="assets/vendor/wow.min.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/theme.js"></script>
</body>

</html>