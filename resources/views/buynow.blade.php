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
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/static.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset ('styles/animate.css')}}">


    <style>
    .packagecard{
        box-shadow: 0px 3px 6px rgba(1,1,0,0.1);
        text-align: center;
        border-radius:1%;
        width:100%;
         -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
        -moz-column-gap: 40px; /* Firefox */
        column-gap: 2%;


    }
    .containerx{
        padding:unset;
        padding: 5%;


    }
    .containerx{
        padding:unset;
        padding: 5%;

    }
    .col-sm-4 .col-12{
        padding-right: 15px;
        padding-left: 15px;
    }
    </style>

</head>









<body data-market="ikman" data-env="production" data-os data-os-ver class="on-static-buyNow">
    @include('header');
    <div class="alerts" style="padding-top: 6%">
        <div class="container"></div>
    </div>
    <div class="app-content" >
        <div class="container main">
            <div class="buy-now-static">
                <div class="ui-panel marketing is-rounded panel-break">
                    <div class="ui-panel-content ui-panel-block">
                        <div class="row indent-horisontal">
                            <div class="col-12 lg-6 lg-offset-1">
                                <div><img
                                        data-srcset="https://w.ikman-st.com/dist/img/all/marketing/buy-now/buy_now-large-99afc0dc.png 1x, https://w.ikman-st.com/dist/img/all/marketing/buy-now/buy_now-large-2x-a17aadd9.png 1.3x"
                                        class="image" width="244" height="42"></div>
                                <h1 class="t-bold">
                                    <p>Quick, safe and easy - from ikman to your doorstep!</p>
                                </h1>
                                <h4 class="c-primary-grey">
                                    <p>Buy directly on <strong>ikman</strong>, without leaving your home. Just Click on
                                        Buy Now to place an order, and we will deliver the item to your doorstep.</p>
                                </h4>
                                <div></div>
                                <div class="buyer-span"><img
                                        data-srcset="https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep4-d62c4855.png 1x, https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep4-2x-1c037f23.png 1.3x"
                                        class="image" width="244" height="42"></div>
                                <div class="buyer-div">
                                    <p>When you buy using Buy Now, you are covered by our Buyer Protection program.</p>
                                </div>
                                <h4 class="c-primary-grey">
                                    <p>This means that if the delivered item is not as described in the ad, we will
                                        replace it for FREE.</p>
                                </h4>
                            </div>
                            <div class="col-12 lg-4 lg-offset-1 buyer-img">
                                <div class="t-center main-feature-image"><img
                                        data-srcset="https://w.ikman-st.com/dist/img/all/marketing/buy-now/mobile-buy-now-e26f4650.png 1x, https://w.ikman-st.com/dist/img/all/marketing/buy-now/mobile-buy-now-2x-06cc6d9d.png 1.3x"
                                        class="image" width="300" height="auto"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buyer-protection-panel">
                    <div class="ui-panel is-rounded panel-break">
                        <div class="ui-panel-content ui-panel-block">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="t-bold t-center">How Buy Now works</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 lg-8 lg-offset-2">
                                    <ol class="steps-list">
                                        <li class="h4 t-bold">
                                            <div class="image-cont"><img
                                                    data-srcset="https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep1-6230d8f7.png 1x, https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep1-2x-7b17c82c.png 1.3x"
                                                    class="image" width="96" height="auto"></div><span
                                                class="c-primary-grey t-normal">Click on Buy Now and place your order.
                                                You can choose if you want to pay when the item is delivered or directly
                                                online.</span>
                                            <hr>
                                        </li>
                                        <li class="h4 t-bold">
                                            <div class="image-cont"><img
                                                    data-srcset="https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep2-56dbc516.png 1x, https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep2-2x-29bd9087.png 1.3x"
                                                    class="image" width="96" height="auto"></div><span
                                                class="c-primary-grey t-normal">ikman will call you to confirm the order
                                                and arrange a delivery time.</span>
                                            <hr>
                                        </li>
                                        <li class="h4 t-bold">
                                            <div class="image-cont"><img
                                                    data-srcset="https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep3-f5f69faa.png 1x, https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep3-2x-3ff22e34.png 1.3x"
                                                    class="image" width="96" height="auto"></div><span
                                                class="c-primary-grey t-normal">ikman will deliver the item to your
                                                doorstep.</span>
                                            <hr>
                                        </li>
                                        <li class="h4 t-bold">
                                            <div class="image-cont"><img
                                                    data-srcset="https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep4-d62c4855.png 1x, https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep4-2x-1c037f23.png 1.3x"
                                                    class="image" width="96" height="auto">
                                                <div class="buyer-text">
                                                    <p><strong>Buyer Protection</strong></p>
                                                </div>
                                            </div><span class="c-primary-grey t-normal">If the delivered item is not as
                                                described in the ad, we will replace it for FREE.</span>
                                            <hr>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-panel is-rounded panel-break">
                    <div class="ui-panel-content ui-panel-block">
                        <h1 class="t-bold t-center">Benefits of Buy Now</h1>
                        <div class="row lg-g is-boxes">
                            <div class="col-12 lg-5 lg-offset-1">
                                <div class="boxed-area">
                                    <div class="box-title">
                                        <h2 class="t-bold">Buyers</h2>
                                    </div>
                                    <ul>
                                        <li><svg class="ui-icon i-check-filled is-inline">
                                                <use xlink:href="#i-check-filled" /></svg>
                                            <p>Get items delivered to your doorstep</p>
                                        </li>
                                        <li><svg class="ui-icon i-check-filled is-inline">
                                                <use xlink:href="#i-check-filled" /></svg>
                                            <p>No need to meet strangers</p>
                                        </li>
                                        <li><svg class="ui-icon i-check-filled is-inline">
                                                <use xlink:href="#i-check-filled" /></svg>
                                            <p>Completely safe buying</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 lg-5">
                                <div class="boxed-area">
                                    <div class="box-title">
                                        <h2 class="t-bold">Sellers</h2>
                                    </div>
                                    <ul>
                                        <li><svg class="ui-icon i-check-filled is-inline">
                                                <use xlink:href="#i-check-filled" /></svg>
                                            <p>Sell your items risk-free</p>
                                        </li>
                                        <li><svg class="ui-icon i-check-filled is-inline">
                                                <use xlink:href="#i-check-filled" /></svg>
                                            <p>We find serious buyers for you</p>
                                        </li>
                                        <li><svg class="ui-icon i-check-filled is-inline">
                                                <use xlink:href="#i-check-filled" /></svg>
                                            <p>Pay only if your item is sold</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-panel is-rounded panel-break guarantees">
                    <div class="ui-panel-content ui-panel-block">
                        <div class="row">
                            <div class="col-12 lg-3 lg-pull-1 t-center push"><img
                                    data-srcset="https://w.ikman-st.com/dist/img/all/marketing/shield-lg-c613353b.png 1x, https://w.ikman-st.com/dist/img/all/marketing/shield-lg-2x-25e6e0e8.png 1.3x"
                                    class="image indent-top" width="192" height="auto"></div>
                            <div class="col-12 lg-6 lg-pull-2 push">
                                <h1 class="t-bold">Seller Guarantees</h1>
                                <ul>
                                    <li><svg class="ui-icon i-check-filled is-inline">
                                            <use xlink:href="#i-check-filled" /></svg><span
                                            class="c-primary-dark t-bold">100% guarantee</span><span class="sub-text">
                                            we guarantee the value of your items 100% against loss, theft or damage
                                            during delivery</span></li>
                                    <li><svg class="ui-icon i-check-filled is-inline">
                                            <use xlink:href="#i-check-filled" /></svg><span
                                            class="c-primary-dark t-bold">100% safety</span><span class="sub-text">we
                                            have strict procedures in place to ensure the security of your items</span>
                                    </li>
                                    <li><svg class="ui-icon i-check-filled is-inline">
                                            <use xlink:href="#i-check-filled" /></svg><span
                                            class="c-primary-dark t-bold">100% convenience</span><span
                                            class="sub-text">once your item has been successfully sold, we will pay you
                                            weekly.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-panel is-rounded panel-break">
                    <div class="ui-panel-content ui-panel-block">
                        <div class="row">
                            <div class="col-12 lg-4 vcenter lg-offset-1 indent-top-double">
                                <h1 class="t-bold">Service charge for sellers</h1>
                                <h4 class="c-primary-grey">When your item is successfully sold through Buy Now, a
                                    service charge applies.</h4>
                                <h4 class="t-bold"> </h4>
                            </div>
                            <div class="col-12 lg-5 vcenter lg-offset-1">
                                <table class="table-list">
                                    <thead>
                                        <tr class="title-row">
                                            <th>
                                                <h6 class="t-left c-primary-grey t-normal"> Item for sale</h6>
                                            </th>
                                            <th>
                                                <h6 class="t-center c-primary-grey t-normal">Service charge</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="primary-cell">
                                                <div class="h6 t-bold t-left c-primary-grey"> Electronics</div>
                                            </td>
                                            <td>
                                                <div class="h6 t-normal c-primary-grey">6%</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="primary-cell">
                                                <div class="h6 t-bold t-left c-primary-grey">Electronic Accessories
                                                </div>
                                            </td>
                                            <td>
                                                <div class="h6 t-normal c-primary-grey">15%</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="primary-cell">
                                                <div class="h6 t-bold t-left c-primary-grey"> Fashion &amp; beauty</div>
                                            </td>
                                            <td>
                                                <div class="h6 t-normal c-primary-grey">15%</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="primary-cell">
                                                <div class="h6 t-bold t-left c-primary-grey"> Hobbies, sports &amp; kids
                                                    items</div>
                                            </td>
                                            <td>
                                                <div class="h6 t-normal c-primary-grey">15%</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="primary-cell">
                                                <div class="h6 t-bold t-left c-primary-grey"> Video games &amp; consoles
                                                </div>
                                            </td>
                                            <td>
                                                <div class="h6 t-normal c-primary-grey">12%</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="primary-cell">
                                                <div class="h6 t-bold t-left c-primary-grey">Sports supplements</div>
                                            </td>
                                            <td>
                                                <div class="h6 t-normal c-primary-grey">8%</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="primary-cell">
                                                <div class="h6 t-bold t-left c-primary-grey">Musical instruments</div>
                                            </td>
                                            <td>
                                                <div class="h6 t-normal c-primary-grey">8%</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-12 lg-10">
                                        <h6 class="c-primary-grey t-italic"><span>* Minimum service charge LKR200 per
                                                item sold</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row indent-top">
                            <div class="col-10 lg-offset-1">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 lg-10 lg-offset-1">
                                <h6 class="c-primary-grey t-italic"><span>
                                        <p>Note: no fee will be charged if an item is returned.</p>
                                    </span><br><span>Outstation delivers may require additional fees.</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-panel is-rounded panel-break">
                    <div class="ui-panel-content ui-panel-block">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="t-bold t-center">Contact us for more information</h1>
                                <h1 class="t-center indent-bottom"><img
                                        data-srcset="https://w.ikman-st.com/dist/img/all/marketing/phone-68aaedca.png 1x, https://w.ikman-st.com/dist/img/all/marketing/phone-2x-00356ddc.png 1.3x"
                                        class="image phone-img" width="36" height="auto"><span>0112350350</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script
        type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","name":"ikman","url":"https://ikman.lk","image":"https://w.ikman-st.com/dist/img/ikman/all/logos/footer-2x-54fad31b.png","potentialAction":[{"@type":"SearchAction","target":"https://ikman.lk/bn/ads?query={search_term_string}","query-input":"required name=search_term_string"},{"@type":"SearchAction","target":"android-app://lk.ikman/ikman/ads?query={search_term_string}","query-input":"required name=search_term_string"}]}</script>
    <script
        type="application/ld+json">{"@context":"http://schema.org","@type":"Organization","name":"ikman","url":"https://ikman.lk","logo":"https://w.ikman-st.com/dist/img/ikman/all/logos/footer-2x-54fad31b.png","sameAs":["https://www.facebook.com/ikmanclassifieds","https://twitter.com/Ikman_lk","https://www.linkedin.com/company/ikman-lk","https://en.wikipedia.org/wiki/Ikman.lk"]}</script>
    <script>window.PLATFORM = CONFIG.platform = 'lg';
        CONFIG.locale = 'en';
        CONFIG.FACEBOOK_APP_ID = '808030852613750';</script>
    <script>CONFIG.publishKey = 'pub-c-08130588-c814-4bee-aedb-a2dc2e2fc9e7';
        CONFIG.subscribeKey = 'sub-c-07e95c54-cada-11e9-a23a-eeb3a5fbbe72';</script>
    <script src="https://w.ikman-st.com/dist/15740773/js/lg/static.js"></script>
    <script type="text/javascript">gtmData.push({ "userAuthenticated": "no", "platform": "lg" })</script>
    <script>(function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'gtmData', 'GTM-5857RX');</script>
    <!-- 2019-11-22T06:50:30.350Z -->
    {{-- <script src="{{URL :: asset('js/static.js')}}"></script> --}}
</body>



</html>







