<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auction.lk</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/bootstrap4/bootstrap.min.css')); ?>">
    <link href="<?php echo e(URL :: asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('plugins/OwlCarousel2-2.2.1/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('plugins/slick-1.8.0/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/main_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/responsive.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/serp-4b31d6.css')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL :: asset ('styles/home.css')); ?>">
    <style>
        .packagecard {
            box-shadow: 0px 3px 6px rgba(1, 1, 0, 0.1);
            text-align: center;
            border-radius: 1%;
            width: 100%;
            -webkit-column-gap: 40px;
            /* Chrome, Safari, Opera */
            -moz-column-gap: 40px;
            /* Firefox */
            column-gap: 2%;


        }

        .containerx {
            padding: unset;
            /* padding: 5%; */


        }

        .containerx {
            padding: unset;
            background-color: lightgoldenrodyellow;
            /* padding: 5%; */

        }

        .col-sm-4 .col-12 {
            padding-right: 15px;
            padding-left: 15px;
        }

        .cardtext {
            text-align: justify;
            padding: 10px;
            font-weight: 400;
        }
    </style>

</head>

<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <div class="container breadcrumbx" style="width: 100%;padding: 5%;padding-top:12%">
        <div class="row" style="height: 200px;padding-bottom: 2%">
            <div class="col-12" style="background-color:black "></div>
        </div>
        <div class="row" style="height: 10%;padding-bottom: 2%">
            <div class="col-12" style="background-color:black">
                <p >area xxx</p>
            </div>
            
        </div>
        <div class="row" style="height: 10%;padding-bottom: 2%">
            <div class="col-12" style="background-color:black">
                <p >hi xxx</p>
            </div>
            
        </div>

        <div class="row">
            <div class="col-sm-4 col-12">
                <div class="packagecard">
                    <div class="containerx card">
                        <div class="char_title" style="align-items: center; background-color:gold;padding :5px" data-toggle="tooltip" title="select your plan">Journier Executive</div>
                        <div class="footer_phone">50 ads limit per month</div>
                        <div class="cardtext" style="text-align: justify">you have access to post 50 ads per month.one ad cost is 300/= .you can earn 15,000/= per month</div>
                        <div class="footer_phone">10 topup ads access</div>
                        <div class="cardtext" style="text-align: justify">you have access to post 10 ads per month.one ad cost is 500/= .you can earn 5000/= per month</div>
                        <div class="footer_phone">referal earning access</div>
                        <div class="cardtext" style="text-align: justify">you have accesss refer this packages to the your frind .if someone buy under your promo cord we will pay you 50% commintion per sale</div>
                        <div class="footer_phone">verify agent certificate</div>
                        <div class="cardtext" style="text-align: justify">ones you joined as a aria agent .we will send cetificate of verified agent .this cetificate help you to build trust with your client </div>
                        <div class="footer_phone">sms billing access</div>
                        <div class="cardtext" style="text-align: justify">ones you post your client ad .cliant will recive thank you massage with payment verified sms .you don’t need worry about manual recipt .you can collect payment from client ones client recive sms</div>
                        <div><a><a class="btn btn-outline-warning" href="<?php echo e(url('areaAgentForm')); ?>" style="margin:20px;" data-toggle="tooltip" title="earning 15,000 per month">Get Started</a></a></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-12">
                <div class="packagecard">
                    <div class="containerx card">
                        <div class="char_title" style="align-items: center; background-color:gold;padding :5px" data-toggle="tooltip" title="select your plan">Executive</div>
                        <div class="footer_phone">100 ads per month</div>
                        <div class="cardtext" style="text-align: justify"> you have access to post 100 ads per month.one ad cost is 300/= .you can earn 30,000/=  per month</div>
                        <div class="footer_phone">20 topup ads access</div>
                        <div class="cardtext" style="text-align: justify">you have access to post 20 ads per month.one ad cost is 500/= .you can earn 10000/=  per month</div>
                        <div class="footer_phone">referal earning access</div>
                        <div class="cardtext" style="text-align: justify">you have accesss refer this packages to the your frind .if someone buy under your promo cord we will pay you 50% commintion per sale</div>
                        <div class="footer_phone">verify agent certificate</div>
                        <div class="cardtext" style="text-align: justify">ones you joined as a aria agent .we will send cetificate of verified agent .this cetificate help you to build trust with your client </div>
                        <div class="footer_phone">sms billing access</div>
                        <div class="cardtext" style="text-align: justify">ones you post your client ad .cliant will recive thank you massage with payment verified sms .you don’t need worry about manual recipt .you can collect payment from client ones client recive sms</div>
                        <div><a><a class="btn btn-outline-warning" href="<?php echo e(url('leasingAgentForm')); ?>" data-toggle="tooltip" title="earning 30,000 per month" style="margin:20px;">Get Started</a></a></div>
                    </div>


                </div>
            </div>

            <div class="col-sm-4 col-12">
                <div class="packagecard">
                    <div class="containerx card">
                        <div class="char_title" style="align-items: center; background-color:gold;padding :5px" data-toggle="tooltip" title="select your plan">Manager</div>
                        <div class="footer_phone">200 ads per month</div>
                        <div class="cardtext" style="text-align: justify">you have access to post 200 ads per month.one ad cost is 300/= .you can get 60,000/= profit per month</div>
                        <div class="footer_phone">40 topup ads access</div>
                        <div class="cardtext" style="text-align: justify"> you have access to post 40 ads per month.one ad cost is 500/= .you can earn 20000/=  per month</div>
                        <div class="footer_phone">referal earning access</div>
                        <div class="cardtext" style="text-align: justify">you have accesss refer this packages to the your frind .if someone buy under your promo cord we will pay you 50% commintion per sale</div>
                        <div class="footer_phone">verify agent certificate</div>
                        <div class="cardtext" style="text-align: justify">ones you joined as a aria agent .we will send cetificate of verified agent .this cetificate help you to build trust with your client  </div>
                        <div class="footer_phone">sms billing access</div>
                        <div class="cardtext" style="text-align: justify">ones you post your client ad .cliant will recive thank you massage with payment verified sms .you don’t need worry about manual recipt .you can collect payment from client ones client recive sms</div>
                        <div><a><a class="btn btn-outline-warning" href="<?php echo e(url('insuranceAgentForm')); ?>" data-toggle="tooltip" title="earning 60,000 per month" style="margin:20px;">Get Started</a></a></div>
                        
                    </div>
                </div>
            </div>
        </div>


    </div>



    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(URL :: asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('styles/bootstrap4/popper.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('styles/bootstrap4/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/greensock/TweenMax.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/greensock/TimelineMax.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/scrollmagic/ScrollMagic.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/greensock/animation.gsap.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/greensock/ScrollToPlugin.min.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/slick-1.8.0/slick.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('plugins/easing/easing.js')); ?>"></script>
    <script src="<?php echo e(URL :: asset('js/custom.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
<?php /**PATH C:\project\auction.lk\Laravel\resources\views/areaAgent.blade.php ENDPATH**/ ?>