<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <!--    <div class="footer-newsletter">-->
    <!--      <div class="container">-->
    <!--        <div class="row justify-content-center">-->
    <!--          <div class="col-lg-12 text-center">-->
    <!--            <h4>Our Newsletter</h4>-->
    <!--            <p>Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat </p>-->
    <!--          </div>-->
    <!--          <div class="col-lg-6">-->
    <!--            <form action="" method="post">-->
    <!--              <input type="email" name="email"><input type="submit" value="Subscribe">-->
    <!--            </form>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-12 footer-info">
                    <a href="{{route('index_page')}}" class="logo d-flex align-items-center">
                        <img src="{{asset('assets/img/dyarat.png')}}" alt="">
                        <!--              <span>FlexStart</span>-->
                    </a>
                    <p>{{__('footer.footer_description')}}.</p>
{{--                    <div class="social-links mt-3">--}}
{{--                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>--}}
{{--                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>--}}
{{--                        <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>--}}
{{--                        <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>--}}
{{--                    </div>--}}
                </div>

                <!--          <div class="col-lg-2 col-6 footer-links">-->
                <!--            <h4>Useful Links</h4>-->
                <!--            <ul>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
                <!--            </ul>-->
                <!--          </div>-->

                <!--          <div class="col-lg-2 col-6 footer-links">-->
                <!--            <h4>Our Services</h4>-->
                <!--            <ul>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>-->
                <!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>-->
                <!--            </ul>-->
                <!--          </div>-->

                <div class="col-lg-6 col-md-12 footer-contact text-center text-md-start">
                    <h4>{{__('contact.title')}}</h4>
                    <p>
                        {{__('contact.city_district')}} <br>
                        {{__('contact.city')}}<br>
                        {{__('contact.ksa')}} <br><br>
                        <strong>{{__('contact.call_us')}}:</strong><a href="tel:+966114740022">+966114740022</a><br>
                        <strong>{{__('contact.email')}}:</strong><a href="mailto:info@deyarat.com">info@deyarat.com</a>
                        <br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <!--    <div class="container">-->
    <!--      <div class="copyright">-->
    <!--        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved-->
    <!--      </div>-->
    <!--      <div class="credits">-->
    <!--        &lt;!&ndash; All the links in the footer should remain intact. &ndash;&gt;-->
    <!--        &lt;!&ndash; You can delete the links only if you purchased the pro version. &ndash;&gt;-->
    <!--        &lt;!&ndash; Licensing information: https://bootstrapmade.com/license/ &ndash;&gt;-->
    <!--        &lt;!&ndash; Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ &ndash;&gt;-->
    <!--        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </footer>&lt;!&ndash; End Footer &ndash;&gt;-->

    <!--  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>-->

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    </body>

    </html>
