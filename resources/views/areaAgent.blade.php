<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auction.lk</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{URL :: asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/serp-4b31d6.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
    .packagecard{
        box-shadow: 0px 3px 6px rgba(1,1,0,0.1);
        text-align: center;
       
        
    }
    .containerx{
        padding:unset;
        padding: 10%;
    }
    </style>

</head>

<body>
        <header class="header" >
            <!-- Header Main -->

            <div class="header_main" style="background-color: #e2eeff">
                <div class="container" style="width:unset;max-width:80%;">
                    <div class="row" style="height:120px;">

                        <!-- Logo -->
                        <div class="col-lg-3 col-sm-3 col-xs-6 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="#">Auction.lk</a></div>
                            </div>
                        </div>


                        <!-- Search -->
                        <div class="col-lg-5 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input" style="width: 100%;" placeholder="Search for products...">

                                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="logo_container" style="padding-left: 50%;">
                                <div class="logo"><button type="button" style="width: 200px;align-items: flex-end;" class="btn btn-primary">Post Add</button></div>

                            </div>
                        </div>





                    </div>

                </div>
            </div>

            <!-- Main Navigation -->



            <!-- Menu -->

            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="page_menu_content">

                                <div class="page_menu_search">
                                    <form action="#">
                                        <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <li class="page_menu_item has-children">
                                        <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                            <li class="page_menu_item has-children">
                                                <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                <ul class="page_menu_selection">
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                                </ul>

                                <div class="menu_contact">
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570
                                    </div>
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

    
    <div class="container" style="width: 100%;padding: 2%">
            <div class="row">
                <div class="col-sm-4 col-12 packagecard">
                    <div class="containerx">
                        <div class="char_title" style="align-items: center">Journier Executive</div>
                        <div class="footer_phone">50 ads limit per month</div>
                        <div style="text-align: justify">you have access to post 50 ads per month.one ad cost is 300/= .you can earn 15,000/=  per month</div>
                        <div class="footer_phone">10 topup ads access</div>
                        <div style="text-align: justify">you have access to post 10 ads per month.one ad cost is 500/= .you can earn 5000/=  per month</div>
                        <div class="footer_phone">referal earning access</div>
                        <div style="text-align: justify">you have accesss refer this packages to the your frind .if someone buy under your promo cord we will pay you 50% commintion per sale</div>
                        <div class="footer_phone">verify agent certificate</div>
                        <div style="text-align: justify">ones you joined as a aria agent .we will send cetificate of verified agent .this cetificate help you to build trust with your client </div>
                        <div class="footer_phone">sms billing access</div>
                        <div style="text-align: justify">ones you post your client ad .cliant will  recive thank you massage with payment verified sms .you don’t need worry about manual recipt .you can collect payment from client ones client recive sms</div>
                        <div style="margin:20px"><a class="waves-effect waves-light btn-large" style="width:200px;background-color:orange; ">Get Start</a></div>
                       
                    </div>
                </div>

                <div class="col-sm-4 col-12 packagecard"  >
                    <div class="char_title" style="align-items: center" >Executive</div>
                    <div class="footer_phone">100 ads limit per month</div>
                    <div style="text-align: justify">you have access to post 100 ads per month.one ad cost is 300/= .you can earn 30,000/=  per month</div>
                    <div class="footer_phone">20 topup ads access</div>
                    <div style="text-align: justify">you have access to post 20 ads per month.one ad cost is 500/= .you can earn 10000/=  per month</div>
                    <div class="footer_phone">referal earning access</div>
                    <div style="text-align: justify">you have accesss refer this packages to the your frind .if someone buy under your promo cord we will pay you 50% commintion per sale</div>
                    <div class="footer_phone">verify agent certificate</div>
                    <div style="text-align: justify">ones you joined as a aria agent .we will send cetificate of verified agent .this cetificate help you to build trust with your client </div>
                    <div class="footer_phone">sms billing access</div>
                    <div style="text-align: justify">ones you post your client ad .cliant will  recive thank you massage with payment verified sms .you don’t need worry about manual recipt .you can collect payment from client ones client recive sms</div>
                    <div style="margin:20px"><a class="waves-effect waves-light btn-large" style="width:200px;background-color:orange; ">Get Start</a></div>

                </div>
                    
                <div class="col-sm-4 col-12 packagecard">
                    <div class="char_title" style="align-items: center">Manager</div>
                    <div class="footer_phone" style="align-align: justify">200 ads limit per month</div>
                    <div style="text-align: justify">you have access to post 200 ads per month.one ad cost is 300/= .you can get 60,000/= profit per month</div>
                    <div class="footer_phone">40 topup ads access</div>
                    <div style="text-align: justify"> you have access to post 40 ads per month.one ad cost is 500/= .you can earn 20000/=  per month</div>
                    <div class="footer_phone">referal earning access</div>
                    <div style="text-align: justify">you have accesss refer this packages to the your frind .if someone buy under your promo cord we will pay you 50% commintion per sale</div>
                    <div class="footer_phone">verify agent certificate</div>
                    <div style="text-align: justify">ones you joined as a aria agent .we will send cetificate of verified agent .this cetificate help you to build trust with your client </div>
                    <div class="footer_phone">sms billing access</div>
                    <div style="text-align: justify">ones you post your client ad .cliant will  recive thank you massage with payment verified sms .you don’t need worry about manual recipt .you can collect payment from client ones client recive sms</div>
                    <div style="margin:20px"><a class="waves-effect waves-light btn-large" style="width:200px;background-color:orange; ">Get Start</a></div>

                </div>

               
               
               

            </div>
               
               
           </div>
    </div>

    
  
    @include('footer')

    <script src="{{ URL :: asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL :: asset('styles/bootstrap4/popper.js')}}"></script>
    <script src="{{URL :: asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{URL :: asset('plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{URL :: asset('plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{URL :: asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{URL :: asset('plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{URL :: asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{URL :: asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{URL :: asset('plugins/slick-1.8.0/slick.js')}}"></script>
    <script src="{{URL :: asset('plugins/easing/easing.js')}}"></script>
    <script src="{{URL :: asset('js/custom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

  

</body>

</html>

