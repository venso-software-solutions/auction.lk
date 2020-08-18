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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @media(min-width:400px) {
            .containery {
                width: 100%;

            }
        }
        @media(min-width:1200px) {
            .containery {
                width: 90%;

            }
        }

        @media only screen and (min-width: 250px) {
            body {
                font-size: 19px;
            }
        }

        @media only screen and (min-width: 250px) {

            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-weight: 400;
            }
        }
        @media(min-width:575px) {
            h3 {
                font-size: 1.3858rem;
            }

        }
        @media(min-width:750px) {
            h3 {
                font-size: 1.2858rem;
            }
            .main-containerx{
                margin-left: unset;
                margin-right: unset;
                width: 100%;
                max-width: 100%;
            }
        }
        @media(min-width:1000px) {
            h3 {
                font-size: 1.75rem;
            }
            body {
                font-size: 14px;
            }
        }
        @media(min-width:1350px) {
            h6 {
                font-size: 1.2858rem;
            }
            .main-containerx{
                margin-left: 10%;
                margin-right: 10%;
                width: 80%;
                max-width: 1140px;
            }
        }

    </style>



</head>

<body>

    @include('header')
    <div class="container breadcrumbx main-containerx" style="padding: unset;padding-top: 12%;">

        <div class="row" style="padding-top: 2%;padding-bottom: 2%;">
            <div class="col-md-7 col-12 productimg" style="">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4" style="height: 30px;">
                                <h3 style="font-weight: bold;">Product 1</h3>
                            </div>
                            <div class="col-2" style="height: 30px;">
                                <h3>Colombo</h3>
                            </div>
                            <div class="col-2" style="height: 30px;">
                                <h3>4000LKR</h3>
                            </div>
                            <div class="col-4" style="height: 30px;">
                                <h3>0711234567</h3>
                            </div>
                            <div class="col-12" style="background-color: black;height: 90%;margin: unset;width: 100%;padding: unset">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="5"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="images/1.jpg" style="height: 360px" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/2.jpg" style="height: 360px" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/3.jpg" style="height: 360px" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/4.jpg" style="height: 360px" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/5.jpg" style="height: 360px" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/6.jpg" style="height: 360px" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" style="padding-top: 2%;padding-bottom: 2%;height: 30%">
                    <div class="col-2" style="border-color: black;height: 100%;border-style: groove;padding: unset">
                        <img class="d-block w-100" src="images/1.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-2" style="border-color: black;height: 100%;border-style: groove;padding: unset">
                        <img class="d-block w-100" src="images/2.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-2" style="border-color: black;height: 100%;border-style: groove;padding: unset">
                        <img class="d-block w-100" src="images/3.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-2" style="border-color: black;height: 100%;border-style: groove;padding: unset">
                        <img class="d-block w-100" src="images/4.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-2" style="border-color: black;height: 100%;border-style: groove;padding: unset">
                        <img class="d-block w-100" src="images/5.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-2" style="border-color: black;height: 100%;border-style: groove;padding: unset">
                        <img class="d-block w-100" src="images/6.jpg" style="width: 100%;height: 100%;">
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12">
                <div class="row rowxy">
                    <div class="col-12" style="padding-top: 5%;">
                        <div class="container">
                            <div class="card card-header" style="background-color: green;color: aliceblue">
                                <h5>Choose best leasing rental for the your vehical</h5>
                            </div>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-bloc;k w-100" src="https://picsum.photos/200/" style="height: 200px" alt="First slide">
                                        <div class="col-12 table-active">

                                            <table style="width:100%">
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> agent name</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing company name</td>
                                                <td style="text-align: center;">janashakthi</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing amount</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td>3 terms</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">1 year</td>
                                                <td>50000/=</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">2 year</td>
                                                <td>45000/=</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">3 year</td>
                                                <td>40000/=</td>


                                            </tr>
                                            <tr>
                                                <td>
                                                <div class="col-12" style="height: 50px;padding-bottom: 80px;padding-top: 1%;padding-left: 25%">
                                                    <button type="button" style="width: 200px;align-items: flex-end;background-color:#F9A825; border:none" class="btn btn-primary">contact Leasing company</button>
                                                </div>
                                                </td>
                                            </tr>
                                           </table>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://picsum.photos/200/" style="height: 200px" alt="Second slide">
                                        <div class="col-12 table-active">

                                            <table style="width:100%">
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> agent name</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing company name</td>
                                                <td style="text-align: center;">janashakthi</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing amount</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td>3 terms</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">1 year</td>
                                                <td>50000/=</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">2 year</td>
                                                <td>45000/=</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">3 year</td>
                                                <td>40000/=</td>


                                            </tr>
                                            <tr>
                                                <td>
                                                <div class="col-12" style="height: 50px;padding-bottom: 80px;padding-top: 1%;padding-left: 25%">
                                                    <button type="button" style="width: 200px;align-items: flex-end;background-color:#F9A825; border:none" class="btn btn-primary">contact Leasing company</button>
                                                </div>
                                                </td>
                                            </tr>
                                           </table>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://picsum.photos/200/" style="height: 200px" alt="Third slide">
                                        <div class="col-12 table-active">

                                            <table style="width:100%">
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> agent name</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing company name</td>
                                                <td style="text-align: center;">janashakthi</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing amount</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td>3 terms</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">1 year</td>
                                                <td>50000/=</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">2 year</td>
                                                <td>45000/=</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">3 year</td>
                                                <td>40000/=</td>


                                            </tr>
                                            <tr>
                                                <td>
                                                <div class="col-12" style="height: 50px;padding-bottom: 80px;padding-top: 1%;padding-left: 25%">
                                                    <button type="button" style="width: 200px;align-items: flex-end;background-color:#F9A825; border:none" class="btn btn-primary">contact Leasing company</button>
                                                </div>
                                                </td>
                                            </tr>
                                           </table>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12" style="padding-top: 5%;">
                        <div class="container">
                            <div class="card card-header" style="background-color: green;color: aliceblue;">
                                <h5>Choose best insurance rental for the your vehical</h5>
                            </div>
                            <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" >
                                        <img class="d-block w-100" src="https://picsum.photos/200/" style="height: 200px" alt="First slide">
                                        <div class="col-12 table-active">

                                            <table style="width:100%">
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> agent name</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> insurance company name</td>
                                                <td style="text-align: center;">janashakthi</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> insurance amount</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td>3 terms</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">1 year</td>
                                                <td>80000/=</td></tr>


                                            <tr><td>
                                                <div class="col-12" style="height: 50px;padding-bottom: 80px;padding-top: 1%;padding-left: 25%">
                                                    <button type="button" style="width: 200px;align-items: flex-end;background-color:#F9A825; border:none" class="btn btn-primary">contact insurance company</button>
                                                </div>
                                                </td>
                                            </tr>
                                           </table>
                                        </div>



                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://picsum.photos/200/" style="height: 200px" alt="Second slide">
                                        <div class="col-12 table-active">

                                            <table style="width:100%">
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> agent name</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing company name</td>
                                                <td style="text-align: center;">janashakthi</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing amount</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td>3 terms</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">1 year</td>
                                                <td>50000/=</td></tr>


                                            <tr><td>
                                                <div class="col-12" style="height: 50px;padding-bottom: 80px;padding-top: 1%;padding-left: 25%">
                                                    <button type="button" style="width: 200px;align-items: flex-end;background-color:#F9A825; border:none" class="btn btn-primary">contact insurance company</button>
                                                </div>
                                                </td>
                                            </tr>
                                           </table>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://picsum.photos/200/" style="height: 200px" alt="Third slide">
                                        <div class="col-12 table-active">

                                            <table style="width:100%">
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> agent name</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing company name</td>
                                                <td style="text-align: center;">janashakthi</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;font-weight: bold;"> leasing amount</td>
                                                <td style="text-align: center;">Smith</td>
                                            </tr>
                                            <tr>
                                                <td>3 terms</td>
                                            </tr>
                                            <tr>
                                                <td style="margin-right: 5%">1 year</td>
                                                <td>50000/=</td></tr>


                                            <tr><td>
                                                <div class="col-12" style="height: 50px;padding-bottom: 80px;padding-top: 1%;padding-left: 25%">
                                                    <button type="button" style="width: 200px;align-items: flex-end;background-color:#F9A825; border:none" class="btn btn-primary">contact insurance company</button>
                                                </div>
                                                </td>
                                            </tr>
                                           </table>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-12" style="height: 100px">
            </div>
            <div class="col-md-5 col-12" style="height: 50%">
                <div class="row">
                    <div class="col-12" style="padding: 5%">
                        <div class="container">
                            <div class="card card-header" style="background-color: #F9A825;color: aliceblue;">
                                <h5>Seller contact</h5>
                            </div>
                            <div class="table-active">
                                <table style="width:100%">
                                    <tr>
                                        <th style="text-align: center;">tp number</th>
                                        <td style="text-align: center;">071 1234567</td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;">city</th>
                                        <td style="text-align: center;">colombo</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-12" style="height: 100px">
            </div>
            <div class="col-md-5 col-12" style="margin-top: -15%;">
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="table-active">
                                <table style="width:100%">




                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="row" style="padding-top: 2%;padding-bottom: 2%; margin-left: 15%;margin-right: 15%;">
        <div class="col-sm-4 col-6" style="padding-bottom: 2%;">
            <div class="containery card" style="height: 200px;box-shadow: 0px 3px 6px rgba(0,0,0,0.1);
                 border: solid 1px #e8e8e8;border-radius: 5%">
                <div class="row" style="margin: unset;">
                    <div class="col-12" style="background-color: black;height: 150px;border-radius: 5%;padding: unset;">
                        <img class="d-block w-100" src="images/3.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-12">
                        <p style="font-size: 20px;font-weight: bold">Product 1</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-6" style="padding-bottom: 2%;">
            <div class="containery card" style="height: 200px;box-shadow: 0px 3px 6px rgba(0,0,0,0.1);
                    border: solid 1px #e8e8e8;border-radius: 5%">
                <div class="row" style="margin: unset;">
                    <div class="col-12" style="background-color: black;height: 150px;border-radius: 5%;padding: unset;">
                        <img class="d-block w-100" src="images/3.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-12">
                        <p style="font-size: 20px;font-weight: bold">Product 2</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-6" style="padding-bottom: 2%;">
            <div class="containery card" style="height: 200px;box-shadow: 0px 3px 6px rgba(0,0,0,0.1);
                 border: solid 1px #e8e8e8;border-radius: 5%">
                <div class="row" style="margin: unset;">
                    <div class="col-12" style="background-color: black;height: 150px;border-radius: 5%;padding: unset;">
                        <img class="d-block w-100" src="images/3.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-12">
                        <p style="font-size: 20px;font-weight: bold">Product 3</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-6" style="padding-bottom: 2%;">
            <div class="containery card" style="height: 200px;box-shadow: 0px 3px 6px rgba(0,0,0,0.1);
                    border: solid 1px #e8e8e8;border-radius: 5%">
                <div class="row" style="margin: unset;">
                    <div class="col-12" style="background-color: black;height: 150px;border-radius: 5%;padding: unset;">
                        <img class="d-block w-100" src="images/3.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-12">
                        <p style="font-size: 20px;font-weight: bold">Product 4</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-6" style="padding-bottom: 2%;">
            <div class="containery card" style="height: 200px;box-shadow: 0px 3px 6px rgba(0,0,0,0.1);
                 border: solid 1px #e8e8e8;border-radius: 5%">
                <div class="row" style="margin: unset;">
                    <div class="col-12" style="background-color: black;height: 150px;border-radius: 5%;padding: unset;">
                        <img class="d-block w-100" src="images/3.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-12">
                        <p style="font-size: 20px;font-weight: bold">Product 5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-6" style="padding-bottom: 2%;">
            <div class="containery card" style="height: 200px;box-shadow: 0px 3px 6px rgba(0,0,0,0.1);
                    border: solid 1px #e8e8e8;border-radius: 5%">
                <div class="row" style="margin: unset;">
                    <div class="col-12" style="background-color: black;height: 150px;border-radius: 5%;padding: unset;">
                        <img class="d-block w-100" src="images/3.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-12">
                        <p style="font-size: 20px;font-weight: bold">Product 6</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row" style="height: 150px;margin-bottom: 3%;margin-left: 15%;margin-right: 15%;">
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
            $("#datepicker").datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
    <script type="text/javascript">
        $('ul.expandible').each(function() {
            var $ul = $(this),
                $lis = $ul.find('li:gt(4)'),
                isExpanded = $ul.hasClass('expanded');
            $lis[isExpanded ? 'show' : 'hide']();

            if ($lis.length > 0) {
                $ul
                    .append($('<span class="showmore"><li class="expand">' + (isExpanded ? 'Show Less' : 'Show More') + '</li></span>')
                        .click(function(event) {
                            var isExpanded = $ul.hasClass('expanded');
                            event.preventDefault();
                            $(this).html(isExpanded ? 'Show More' : 'Show Less');
                            $ul.toggleClass('expanded');
                            $lis.toggle();
                        }));
            }
        }); <
        script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin = "anonymous" >
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </script>

</body>

</html>
