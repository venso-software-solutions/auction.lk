<!-- <div class="super_container"> -->


<!-- Footer -->

<style>
    .footer-middle-text{
        color:wheat;
    }

</style>

<footer class="footer" style="background-color:  #0D47A1">
    <div class="container">
        <div class="row" style="align-items: flex-start;z-index: 50;">

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 footer_col">
                <div class="footer_column footer_contact">
                    <div class="logo_container">
                        <div class="logo"><a style="color:wheat" href="{{url('')}}">Auction.lk</a></div>
                    </div>
                    <div class="footer_title" style="color:wheat">Got Question? Call Us 24/7</div>
                    <div class="footer_phone" style="color:orange">+077 123456</div>
                    <div class="footer_contact_text">
                        <p>address 1</p>
                        <p>address 2</p>
                    </div>
                    <div class="footer_social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 footer_col">
                <!-- <div class="footer_column"> -->
                <!-- <div class="footer_title">Login from </div> -->
                <ul class="footer_list ">
                    <li><a href="{{url('areaAgent')}}" class="footer-middle-text">Became an Area Agent</a></li>
                    
                    <li><a href="{{url('insuranceAgent')}}">Became an Insurance Agent</a></li>
                    <li><a href="{{url('leasingAgent')}}">Became an Leasing Agent</a></li>
                    <li><a href="{{url('membership')}}">Became an Member</a></li>
                    <li><a href="{{url('buynow')}}">Buy Now</a></li>
                   
                    <li><a href="{{url('promoteAdd')}}">Promotions</a></li>
                    <div class="footer_col">
                      
                    </div>

                </ul>
                <!-- </div> -->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="footer_column">
                    <div class="footer_title">About us</div>
                    <ul class="footer_list">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">terms of conditions</a></li>
                        <li><a href="#">site map</a></li>
                        <li><a href="#">Banner Ads</a></li>
                    </ul>

                </div>
                <div>
                    <div class="footer_social" style="color:orange;font-weight: 500;display: flex;">
                        download app
                        <ul>
                           
                            <li style="margin-left: 20px;"><a href="http://"><i class="fab fa-angular" style="font-size:48px;color:red;"></i></i></a></li>
                           
                        </ul>
                    </div>

                   
                    
                </div>
            </div>



        </div>
    </div>
</footer>

<!-- Copyright -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                    <div class="copyright_content">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <!-- Copyright &copy;<script>
                                    document.write(new Date().getFullYear()); -->
                        <!-- </script> All rights reserved |      <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">VENSO software solutions</a> -->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="logos ml-sm-auto">
                        <ul class="logos_list">
                            <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                            <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                            <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                            <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{URL :: asset ('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL :: asset ('styles/bootstrap4/popper.js')}}"></script>
<script src="{{URL :: asset ('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{URL :: asset ('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{URL :: asset ('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{URL :: asset ('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{URL :: asset ('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{URL :: asset ('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{URL :: asset ('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL :: asset ('plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{URL :: asset ('plugins/easing/easing.js')}}"></script>
<script src="{{URL :: asset ('js/custom.js')}}"></script>

            <script>
                $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
                });
            </script>

</body>

</html>
