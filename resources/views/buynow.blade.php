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
            padding: 5%;


        }

        .containerx {
            padding: unset;
            padding: 5%;

        }

        .col-sm-4 .col-12 {
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
    <div class="app-content">
        <div class="container main">
            <div class="buy-now-static">
                <div class="ui-panel marketing is-rounded panel-break">
                    <div class="ui-panel-content ui-panel-block">
                        <div class="row indent-horisontal">
                            <div class="col-12 lg-6 ">
                                <div><img data-srcset="https://w.ikman-st.com/dist/img/all/marketing/buy-now/buy_now-large-99afc0dc.png 1x, https://w.ikman-st.com/dist/img/all/marketing/buy-now/buy_now-large-2x-a17aadd9.png 1.3x" class="image" width="244" height="42"></div>
                                <h1 class="t-bold">
                                    <p>Quick, safe and easy - from ikman to your doorstep!</p>
                                </h1>
                                <h4 class="c-primary-grey">
                                    <p>Buy directly on <strong>auction.lk</strong>, without leaving your home. Just Click on
                                        Buy Now to place an order, and we will deliver the item to your doorstep.</p>
                                </h4>
                                <div></div>
                                <div class="buyer-span"><img data-srcset="https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep4-d62c4855.png 1x, https://w.ikman-st.com/dist/img/all/marketing/buy-now/newstep4-2x-1c037f23.png 1.3x" class="image" width="244" height="42"></div>
                                <div class="buyer-div">
                                    <p>When you buy using Buy Now, you are covered by our Buyer Protection program.</p>
                                </div>
                                <h4 class="c-primary-grey">
                                    <p>This means that if the delivered item is not as described in the ad, we will
                                        replace it for FREE.</p>
                                </h4>
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
                                <div class="col-12 lg-8 ">
                                    <ol class="steps-list">
                                        <li class="h4 t-bold">
                                            <div class="image-cont"><img data-srcset="https://www.stickpng.com/assets/images/580b57fcd9996e24bc43c462.png" class="image" width="96" height="auto"></div><span class="c-primary-grey t-normal">Click on Buy Now and place your order.
                                                You can choose if you want to pay when the item is delivered or directly
                                                online.</span>
                                            <hr>
                                        </li>
                                        <li class="h4 t-bold">
                                            <div class="image-cont"><img data-srcset="data:image/png;base64,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" class="image" width="96" height="auto"></div><span class="c-primary-grey t-normal">ikman will call you to confirm the order
                                                and arrange a delivery time.</span>
                                            <hr>
                                        </li>
                                        <li class="h4 t-bold">
                                            <div class="image-cont"><img data-srcset="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrtjB4yXweA1ggPXZ-IeNrSSFYMt6FVK3vXh1jJTJZ3B7fMTP8&s" class="image" width="96" height="auto"></div><span class="c-primary-grey t-normal">ikman will deliver the item to your
                                                doorstep.</span>
                                            <hr>
                                        </li>
                                        <li class="h4 t-bold">
                                            <div class="image-cont"><img data-srcset="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSON49J80xCzajUUkqhWtzC3l4sv1eKgaijNvI9AQp0oj12HIXP&s" class="image" width="96" height="auto">
                                                <div class="buyer-text">
                                                    <!-- <p><strong>Buyer Protection</strong></p> -->
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
                            <div class="col-12 lg-5 ">
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
                            <div class="col-12 lg-3 lg-pull-1 t-center push"><img data-srcset="https://w.ikman-st.com/dist/img/all/marketing/shield-lg-c613353b.png 1x, https://w.ikman-st.com/dist/img/all/marketing/shield-lg-2x-25e6e0e8.png 1.3x" class="image indent-top" width="192" height="auto"></div>
                            <div class="col-12 lg-6 ">
                                <h1 class="t-bold">Seller Guarantees</h1>
                                <ul>
                                    <li><svg class="ui-icon i-check-filled is-inline">
                                            <use xlink:href="#i-check-filled" /></svg><span class="c-primary-dark t-bold">100% guarantee</span><span class="sub-text">
                                            we guarantee the value of your items 100% against loss, theft or damage
                                            during delivery</span></li>
                                    <li><svg class="ui-icon i-check-filled is-inline">
                                            <use xlink:href="#i-check-filled" /></svg><span class="c-primary-dark t-bold">100% safety</span><span class="sub-text">we
                                            have strict procedures in place to ensure the security of your items</span>
                                    </li>
                                    <li><svg class="ui-icon i-check-filled is-inline">
                                            <use xlink:href="#i-check-filled" /></svg><span class="c-primary-dark t-bold">100% convenience</span><span class="sub-text">once your item has been successfully sold, we will pay you
                                            weekly.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-panel is-rounded panel-break">
                    <div class="ui-panel-content ui-panel-block">
                        <div class="row">
                            <div class="col-12 lg-4 vcenter  indent-top-double">
                            <!-- <div class="col-12 lg-4 vcenter lg-offset-1 indent-top-double"> -->
                                <h1 class="t-bold">Service charge for sellers</h1>
                                <h4 class="c-primary-grey">When your item is successfully sold through Buy Now, a
                                    service charge applies.</h4>
                                <h4 class="t-bold"> </h4>
                            </div>
                            <div class="col-12 lg-5 vcenter ">
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
                                <h1 class="t-center indent-bottom"><img data-srcset="https://w.ikman-st.com/dist/img/all/marketing/phone-68aaedca.png 1x, https://w.ikman-st.com/dist/img/all/marketing/phone-2x-00356ddc.png 1.3x" class="image phone-img" width="36" height="auto"><span>0112350350</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "ikman",
            "url": "https://ikman.lk",
            "image": "https://w.ikman-st.com/dist/img/ikman/all/logos/footer-2x-54fad31b.png",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": "https://ikman.lk/bn/ads?query={search_term_string}",
                "query-input": "required name=search_term_string"
            }, {
                "@type": "SearchAction",
                "target": "android-app://lk.ikman/ikman/ads?query={search_term_string}",
                "query-input": "required name=search_term_string"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "ikman",
            "url": "https://ikman.lk",
            "logo": "https://w.ikman-st.com/dist/img/ikman/all/logos/footer-2x-54fad31b.png",
            "sameAs": ["https://www.facebook.com/ikmanclassifieds", "https://twitter.com/Ikman_lk", "https://www.linkedin.com/company/ikman-lk", "https://en.wikipedia.org/wiki/Ikman.lk"]
        }
    </script>
    <script>
        window.PLATFORM = CONFIG.platform = 'lg';
        CONFIG.locale = 'en';
        CONFIG.FACEBOOK_APP_ID = '808030852613750';
    </script>
    <script>
        CONFIG.publishKey = 'pub-c-08130588-c814-4bee-aedb-a2dc2e2fc9e7';
        CONFIG.subscribeKey = 'sub-c-07e95c54-cada-11e9-a23a-eeb3a5fbbe72';
    </script>
    <script src="https://w.ikman-st.com/dist/15740773/js/lg/static.js"></script>
    <script type="text/javascript">
        gtmData.push({
            "userAuthenticated": "no",
            "platform": "lg"
        })
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'gtmData', 'GTM-5857RX');
    </script>
    <!-- 2019-11-22T06:50:30.350Z -->
    {{-- <script src="{{URL :: asset('js/static.js')}}"></script> --}}
</body>



</html>
