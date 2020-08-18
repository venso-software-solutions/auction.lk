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
        @media  only screen and (min-width: 250px){
        body {
            font-size: 14px;
        }
        }
    </style>

</head>

<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="container">

        <div class="" style="padding-top: 150px;padding-bottom: 150px;padding-left: 15%;padding-right: 15%;">
            <!-- Default form contact -->
            <div class="card">
                <form class="text-center border border-light p-5" action="#!">

                    <!-- <p class="h4 mb-4">Contact us</p> -->

                    <!-- Name -->
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <!-- Email -->
                    <!-- <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail"> -->

                    <!-- Subject -->
                    <label>Province</label>
                    <select class="browser-default custom-select mb-4">
                        <option value="" disabled>Choose option</option>
                        <option value="1" selected>Southern</option>
                        <option value="2">North</option>
                        <option value="3">Western</option>
                        <option value="4">East</option>
                    </select>
                    <label>City</label>
                    <select class="browser-default custom-select mb-4">
                        <option value="" disabled>Choose option</option>
                        <option value="1" selected>Galle</option>
                        <option value="2">Colombo</option>
                        <option value="3">Matara</option>
                        <option value="4">Kandy</option>
                    </select>
                    <input type="number" id="lastName" class="form-control mb-4" placeholder="Postal code">


                    <!-- Message -->
                    <input type="text" id="lastName" class="form-control mb-4" placeholder="Address">

                    <input type="number" id="lastName" class="form-control mb-4" placeholder="Passport Number">
                    <input type="tel" id="lastName" class="form-control mb-4" placeholder="Telephone Number">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Verify phone number">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter code">
                        </div>
                    </div>

                    <!-- Send button -->
                    <div style="padding-top: 10px;">
                        <button class="btn btn-info btn-block" type="submit">Join</button>
                    </div>

                </form>
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
<?php /**PATH C:\project\auction.lk\resources\views/areaAgentForm.blade.php ENDPATH**/ ?>