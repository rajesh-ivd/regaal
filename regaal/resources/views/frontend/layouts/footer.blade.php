
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('assets/img/logo/footer_logo.jpg') }}" alt=""></a>
                            </div>
                            <!-- <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod</p>
                                </div>
                            </div> -->
                            <!-- social -->
                            <div class="footer-social">
                                <a href="https://www.facebook.com/Lion-Maize-Starch-101594641985231/?ti=as" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.linkedin.com/company/regaal-resources-private-limited" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50 footer-above">
                        <div class="footer-tittle">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/leadership') }}">Leadership</a></li>
                                    <li><a href="{{ url('/products') }}">Products</a></li>
                                    <li><a href="{{ url('/careers') }}">Careers</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    <a target="_blank" href="{{ asset('frontend/RRL_ICC_DTD 01082022_UNDER_POSH_ACT.pdf') }}">Policy</a>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Others</h4>
                            <ul>
                                <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                <!-- <li><a href="javascript:void(0);">News</a></li> -->
                                <li><a href="{{url('/csr')}}">CSR</a></li>
                                <!-- <li><a href="javascript:void(0);">New Business Initiatives</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Get in Touch</h4>
                            <address>
                                <strong>CITY OFFICE:</strong><br>
                                113, PODDAR POINT<br>
                                BLOCK A 10th FLOOR<br>
                                KOLKATA - 700016<br>
                                PH: 22293903<br>
                                <a href="https://maps.google.com?q=113%20Poddar%20Point%20Kolkata" target="_blank">
                                    <i class="fas fa-map-marker map-marker"></i> <span class="view-on-map">View on Map</span>
                                </a>
                            </address>
                            <style>
                                .map-marker {
                                    font-size: 24px; /* Adjust the icon size */
                                    color: #f81212; /* Change the color of the icon */
                                }
                            
                                .view-on-map {
                                    text-decoration: none; /* Remove the underline from the link */
                                    color: #007BFF; /* Change the link text color */
                                }
                            
                                .view-on-map:hover {
                                    color: #0056b3; /* Change the link text color on hover */
                                }
                            </style>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border" style="padding: 0px;">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right text-center">
                            <p>&copy; <script>document.write(new Date().getFullYear());</script>. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

</body>
</html>
