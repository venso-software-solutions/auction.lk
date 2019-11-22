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
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/serp-4b31d6.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/home.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <style>
        @media('min-width:400px'){
            .containery{
                width:70%;

            }
        }
    </style>



</head>

<body>

    @include('header')
    <div class="container" style="width: 100%;padding: unset;padding-top: 2%">
        <div class="row breadcrumbx" style="margin-left:2%;margin-right: 2%; ">
            <div class="col-12" style="background-color: blue;font-size: 24px;font-weight: bold">
                <p style="color: lavender;font-weight: bold;font-size: 18px">
                    <span style="font-size: 24px; color: white;">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>All Sri Lanka
                    <span style="font-size: 24px; color: white;padding-left: 4%;">
                        <i class="fas fa-tag"></i>
                    </span>Item1
                </p>

            </div>
        </div>
        <div>

        </div>
        <div class="row" style="padding-top: 2%;padding-bottom: 2%; height: 100%;">
            <div class="col-md-7 col-12 productimg" style="">
                <div class="row" >
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4"><h3 style="font-weight: bold">Product 1</h3></div>
                            <div class="col-2"><h3 style="font-weight: bold">Colombo</h3></div>
                            <div class="col-2"><h3 >4000LKR</h3></div>
                            <div class="col-4"><h3 >Product 1</h3></div>
                            <div class="container" style="background-color: black"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12"></div>

        </div>
        <div class="row" style="padding-top: 2%;padding-bottom: 2%; margin: unset;">
            <div class="col-sm-4 col-6" style="padding-bottom: 2%;">
                <div class="containery" style="height: 200px;background-color: black;"></div>
            </div>
            <div class="col-sm-4 col-6"  style="padding-bottom: 2%;">
                <div class="containery" style="height: 200px;background-color: black;"></div>
            </div>
            <div class="col-sm-4 col-6"  style="padding-bottom: 2%;">
                <div class="containery" style="height: 200px;background-color: black;"></div>
            </div>
            <div class="col-sm-4 col-6" style="padding-bottom: 2%;">
                <div class="containery" style="height: 200px;background-color: black;"></div>
            </div>
            <div class="col-sm-4 col-6"  style="padding-bottom: 2%;">
                <div class="containery" style="height: 200px;background-color: black;"></div>
            </div>
            <div class="col-sm-4 col-6"  style="padding-bottom: 2%;">
                <div class="containery" style="height: 200px;background-color: black;"></div>
            </div>

        </div>
        <div class="row" style="height: 150px;margin-bottom: 3%;">
            <div class="col-12" style="background-color: black;"></div>
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
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script type="text/javascript">
    $(function() {
        $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true
        });
    });
    </script>
    <script type="text/javascript">
        $('ul.expandible').each(function(){
            var $ul = $(this),
                $lis = $ul.find('li:gt(4)'),
                isExpanded = $ul.hasClass('expanded');
            $lis[isExpanded ? 'show' : 'hide']();

            if($lis.length > 0){
                $ul
                    .append($('<span class="showmore"><li class="expand">' + (isExpanded ? 'Show Less' : 'Show More') + '</li></span>')
                    .click(function(event){
                        var isExpanded = $ul.hasClass('expanded');
                        event.preventDefault();
                        $(this).html(isExpanded ? 'Show More' : 'Show Less');
                        $ul.toggleClass('expanded');
                        $lis.toggle();
                    }));
            }
        });
    </script>

</body>

</html>

