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
            </span>Item 8
        </p>

            </div>
        </div>
        <div class="row" style="padding-top: 2%;padding-bottom: 2%; margin: unset;">
            <div class="col-sm-2 col-xs-12 lg-col-2--YDkH9" style="border-right: 2px solid #e7edee;">
                <ul>
                    <li>
                        <div style="background-color: darkblue;color: #e7edee;font-weight: bold;padding: 1%;margin-bottom: 2%;">
                            Search by result</div>

                    </li>
                    <li>
                        <div  style="background-color: darkblue;color: #e7edee;font-weight: bold;padding: 1%;margin-bottom: 2%;">
                            Search by date</div>
                            <input placeholder="Selected date" class="form-control datepicker"type="text" id="datepicker">
                    </li>
                    <li>
                        <div style="background-color: darkblue;color: #e7edee;font-weight: bold;padding: 1%;margin-bottom: 2%;">
                            types of post</div>
                            <div role="radiogroup">
                                <div class="custom-radio--1pHhU">
                                    <input name="posterType" id="radio_id_1" type="radio" value="all_posters" class="undefined sr-only--4m2kh">
                                    <label for="radio_id_1" class="label-text--1OesM">
                                        <span></span>
                                        <div class="title--1aT8x">All posters</div>
                                    </label>
                                </div>
                                <div class="custom-radio--1pHhU">
                                    <input name="posterType" id="radio_id_2" type="radio" value="only_members" class="undefined sr-only--4m2kh">
                                    <label for="radio_id_2" class="label-text--1OesM">
                                        <span></span>
                                        <div class="title--1aT8x">buy now</div>
                                    </label>
                                </div>
                                <div class="custom-radio--1pHhU">
                                    <input name="posterType" id="radio_id_3" type="radio" value="only_members" class="undefined sr-only--4m2kh">
                                    <label for="radio_id_3" class="label-text--1OesM">
                                        <span></span>
                                        <div class="title--1aT8x">aucation</div>
                                    </label>
                                </div><div class="custom-radio--1pHhU">
                                    <input name="posterType" id="radio_id_4" type="radio" value="only_members" class="undefined sr-only--4m2kh">
                                    <label for="radio_id_4" class="label-text--1OesM">
                                        <span></span>
                                        <div class="title--1aT8x">Only members</div>
                                    </label>
                                </div>
                            </div>

                    </li>
                    <li>
                        <div style="background-color: darkblue;color: #e7edee;font-weight: bold;padding: 1%;margin-bottom: 2%;">
                            Search by location</div>
                        <ul class="expandible">
                            <li class="">
                                <button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span>
                                            <span>
                                                <span class="name--1H5Tb">Galle</span>
                                                <span class="count--3CkJQ"> (1,927)</span>
                                            </span>
                                        </div>
                                    </div>
                                </button>
                            </li>
                            <li class="">
                                <button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span>
                                            <span>
                                                <span class="name--1H5Tb">Ratnapura</span>
                                                <span class="count--3CkJQ"> (1,817)</span>
                                            </span>
                                        </div>
                                    </div>
                                </button>
                            </li>
                            <li class="">
                                <button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span>
                                            <span>
                                                <span class="name--1H5Tb">Matara</span>
                                                <span class="count--3CkJQ"> (1,690)</span>
                                            </span>
                                        </div>
                                    </div>
                                </button>
                            </li>
                            <li class="">
                                <button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span>
                                            <span>
                                                <span class="name--1H5Tb">Kegalle</span>
                                                <span class="count--3CkJQ"> (1,202)</span>
                                            </span>
                                        </div>
                                    </div>
                                </button>
                            </li>
                            <li class="">
                                <button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span>
                                            <span>
                                                <span class="name--1H5Tb">Anuradhapura</span>
                                                <span class="count--3CkJQ"> (1,188)</span>
                                            </span>
                                        </div>
                                    </div>
                                </button>
                            </li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Puttalam</span><span
                                                    class="count--3CkJQ"> (1,057)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Jaffna</span><span
                                                    class="count--3CkJQ"> (806)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Hambantota</span><span
                                                    class="count--3CkJQ"> (719)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Badulla</span><span
                                                    class="count--3CkJQ"> (717)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Batticaloa</span><span
                                                    class="count--3CkJQ"> (581)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Ampara</span><span
                                                    class="count--3CkJQ"> (541)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Polonnaruwa</span><span
                                                    class="count--3CkJQ"> (398)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Trincomalee</span><span
                                                    class="count--3CkJQ"> (389)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Matale</span><span
                                                    class="count--3CkJQ"> (354)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Moneragala</span><span
                                                    class="count--3CkJQ"> (280)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Nuwara Eliya</span><span
                                                    class="count--3CkJQ"> (220)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Vavuniya</span><span
                                                    class="count--3CkJQ"> (128)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Mannar</span><span
                                                    class="count--3CkJQ"> (32)</span></span></div>
                                    </div>
                                </button></li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Kilinochchi</span><span
                                                    class="count--3CkJQ"> (31)</span></span></div>
                                    </div>
                                </button>
                            </li>
                            <li class=""><button class="list-item--2dM7Z">
                                    <div class="link--15vLF item--4DkSa" style="padding-left: 0px;">
                                        <div
                                            class="justify-content-flex-start--1Xozy align-items-normal--vaTgD flex-wrap-nowrap--3IpfJ flex-direction-row--27fh1 flex--3fKk1">
                                            <span class="filter-tree-icons--24gwr"></span><span><span class="name--1H5Tb">Mullativu</span><span
                                                    class="count--3CkJQ"> (13)</span></span></div>
                                    </div>
                                </button>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div style="background-color: darkblue;color: #e7edee;font-weight: bold;padding: 1%;margin-bottom: 2%;">
                            Search by sub catogery</div>

                    </li>
                </ul>
            </div>
            <div class="col-sm-8 col-xs-12" style="padding-left: 3%;">
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>
                <li class="normal--2QYVk gtm-normal-ad first-add--1u5Mw" style="width: unset;">
                    <div class="row">

                        <div class="col-3">
                            <a class="card-link--3ssYv" href="{{ url('product') }}" title="Nokia Asha (Used)">
                                <div class="container--2uFyv">
                                    <div class="image--2hizm">
                                        <img class="cardphoto" src="images/trends_1.jpg" alt="Nokia Asha (Used)" style="height: 150px;width: 150px;">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-5">
                            <a href="{{ url('product') }}">
                            <div class="content--3JNQz">
                                <span class="title--3yncE">Nokia</span>
                                <div>
                                    <div>
                                    </div>
                                    <div class="sub-title--1nbZO">
                                        <div class="description--2-ez3">Kegalle, Mobile Phones</div>
                                    </div>
                                    <div class="price--3SnqI color--t0tGX">
                                        <span>Rs 1,750</span>
                                    </div>
                                </div>

                            </div>
                            </a>
                        </div>
                        <div class="col-4 advert_col">

                                <div class="advert_title">
                                    <h3>Last bid amount : <span>Rs500</span></h3>
                                </div>
                                <p>Mimal Perera <br> Colombo<br>2019/11/21 9.30pm</p>
                                <button type="button" class="btn btn-primary">Bid now</button>

                        </div>
                    </a>
                    </div>
                </li>

                <div class="pagination--1bp3g">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center pagination-lg">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                        </nav>
                </div>
            </div>
            <div class="col-sm-2 d-none d-sm-block" style="background-color: black;max-height: 550px;height: 550px;position: sticky;top: 100px;padding-top: 2%;
            ">

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


