<!DOCTYPE HTML>
<html>

<head>
    <title>Tips for Buyers </title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ url('/<?php echo url('/'); ?>/images/Logo-main.jpg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/noscript.css') }}" />
    </noscript>
</head>

<body class="is-preload">
    <div id="wrapper">
        <header id="header">
            <div class="inner">
                <a href="homepage" class="logo">
                    <span class="fa fa-home"></span> <span class="title">Real Estate</span></a>
                <a class="sign-up" href="{{ route('auth.logout') }}">Logout</a>
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
            <li><a href="{{ url('admin/index') }}" class="active">Home</a></li>

            <li><a href="{{ url('admin/properties') }}">Properties</a></li>

            <li><a href="{{ url('admin/blogs') }}">Blog</a></li>

            <li><a href="{{ url('t') }}">Tips</a></li>

            <li>
                <a href="#" class="dropdown-toggle">About</a>

                <ul>
                    <li><a href="{{ url('admin/aboutUs') }}">About Us</a></li>
                    <li><a href="{{ url('admin/team') }}">Team</a></li>
                </ul>
            </li>
            <li><a href="{{ url('admin/contactUs') }}">Contact Us</a></li>

            <li><a href="{{ url('admin/faqs') }}">Faqs</a></li>
            <li><a href="{{ url('appointment/create') }}">Appointment</a></li>
        </ul>
        </nav>
        <div id="main">
            <div class="inner">
                <h2>Tips for Buyers</h2>
                </br>
                <section class="tiles">
                    @foreach ($tips as $tip)
                    <article class="style1">
                        <span class="image">
                            <img src="images/steps/{{$tip->image}}" alt="" />
                        </span>
                        <a href="tips?id={{$tip->step_index}}">
                            <p>
                                <b style="height: 30px;
                                width: 30px;
                                background-color: black;
                                border-radius: 50%;
                                display: inline-block;">
                                    {{$tip->step_index}}
                                </b>
                            </p>
                            </br>
                            </br>
                            <h2 style="background: black;">{{$tip->title}}</h2>
                        </a>
                    </article>
                    @endforeach
                </section>
                </br>
            </div>
        </div>
        <div id="buyingInfoContentSectionCon" style="margin-bottom: 30px">
            <?php
            if (isset($req['id']) && $req['id'] == 1) {
            ?>
                <div class="whiteContentBox infoContentSection " class="h1">
                    <div class="h2">1. <?php echo $tips[0]['title'] ?></div>
                    <div class="infoContentSection_Intro">
                        <p style="text-align: center;">Home buying is an exciting but sometimes complex process. Learn all the ways we can help you succeed with the most important purchase of your life.</p>
                    </div>
                    <div style=" background-image: url(images/<?php echo $tips[0]['banner_image'] ?>);background-repeat: no-repeat;height:700px;">
                        <span class="hide" role="img" aria-label="A banner picture for the tab section: Prepare to Buy"></span>
                    </div>
                    <div class="infoContentSection_SubSection_TabCon selected" data-sectionid="1">
                        <h2>Make Sure You’re Ready</h2>
                        <p>If you’re thinking of buying a home, you’ve come to the right place. Once you’ve decided you’re ready to buy, we can guide you through the entire process and a we can help take care of the rest.</p>
                        <table border="0" width="100%" cellspacing="0" cellpadding="20">
                            <tbody>
                                <tr>
                                    <td><strong><img loading="lazy" class="alignnone wp-image-1278 size-medium" src="images/details/happy_homeowners_w400-267x200.jpg" alt="" width="267" height="200" sizes="(max-width: 267px) 100vw, 267px"></strong></td>
                                    <td>
                                        <h3>Are you ready? Be sure.<strong><br>
                                            </strong></h3>
                                        <p>Few joys can match the pride of owning a home, but the responsibility can also come with sacrifices – from the financial commitment to the required care and maintenance. You’ll want to be sure both fit within your current or preferred lifestyle.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" width="100%" cellspacing="0" cellpadding="20">
                            <tbody>
                                <tr>
                                    <td>
                                        <h3>Is your bank account ready? Check it twice.<strong><br>
                                            </strong></h3>
                                        <p>Buying a home is likely the most significant and largest purchase of your life. Do it right with the help of a we and avoid regretting taking on more than you should. It’s ideal to have saved up some money and manage any debt. In a couple steps, you can determine how much you can afford.</p>
                                    </td>
                                    <td><strong><img loading="lazy" class="alignright wp-image-1277 size-medium" src="images/details/calculator_01_w400.jpg" alt="" width="267" height="200"></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" width="100%" cellspacing="0" cellpadding="20">
                            <tbody>
                                <tr>
                                    <td><strong><img loading="lazy" class="aligncenter size-medium wp-image-2031" src="images/details/time_to_buy_w400_02.jpg" alt="" width="267" height="200"></strong></td>
                                    <td>
                                        <h3>Is right now a good time to buy?<strong><br>
                                            </strong></h3>
                                        <p>Markets go up, markets go down and even the most informed experts can’t accurately predict when a market will peak or bottom out. If you’re buying a home as a long-term investment (and for long-term enjoyment), you should be protected from short-term changes in the market. Instead, focus on picking a home that meets your and your family’s needs.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            if (isset($req['id']) && $req['id'] == 2) {
            ?>
                <div class="whiteContentBox infoContentSection " class="h1">
                    <div class="h2">2. <?php echo $tips[1]['title'] ?></div>
                    <div class="infoContentSection_Intro"></div>
                    <div class="infoContentSection_Banner" style=" background-image: url(images/details/<?php echo $tips[1]['banner_image'] ?>);background-repeat: no-repeat;height:300px;">
                        <span class="hide" role="img" aria-label="A banner picture for the tab section: Plan Your Finances"></span>
                    </div>
                    <div class="infoContentSection_SubSection_TabCon" data-sectionid="1">
                        <h2>What Can You Afford?</h2>
                        <p>Buying a home is a big deal; it’s probably the largest purchase you’ll ever make. Being prepared means also understanding that expenses go beyond purchase price.</p>
                        <p>To secure your new home, you’ll likely need to arrange for a mortgage but before you do, take a look at how much you can afford each month. Based on your income and expenses, our affordability calculator can help you estimate your maximum affordable mortgage payments.</p>
                        <h4>Gross Debt Service Ratio (GDSR)</h4>
                        <p>This lending principle simply states that your monthly housing costs should not exceed 32% of your gross (before taxes) monthly family income.</p>
                        <h4>Total Debt Service Ratio (TDSR)</h4>
                        <p>This lending principle summarizes that your monthly housing cost and payments on all other debts (like loans, credit cards and lease payments) should not exceed 40% of your gross monthly income.</p>
                        <p>Once you have used the affordability calculator to estimate your maximum monthly total, you can compare this number to the mortgage payments for specific loan amounts. Enter the loan amount in our mortgage calculator</a> the monthly principal and interest will be calculated for you.</p>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            if (isset($req['id']) && $req['id'] == 3) {
            ?>
                <div class="whiteContentBox infoContentSection " class="h1">
                    <div class="h2">3. <?php echo $tips[2]['title'] ?></div>
                    <div class="infoContentSection_Intro"></div>
                    <div class="infoContentSection_Banner" style=" background-image: url(images/details/<?php echo $tips[2]['banner_image'] ?>);background-repeat: no-repeat;height:300px;">
                        <span class="hide" role="img" aria-label="A banner picture for the tab section: View Properties"></span>
                    </div>
                    <div class="infoContentSection_SubSection_TabCon" data-sectionid="1">
                        <p>&nbsp;</p>
                        <table border="0" width="100%" cellspacing="0" cellpadding="20">
                            <tbody>
                                <tr>
                                    <td style="vertical-align: top;" width="50%">
                                        <h2>Find a we</h2>
                                        <p>A we can review your wants and needs to help you determine your price range, as well as answer questions about the markets you’re interested in and help you compare homes and neighbourhoods. Your we can also provide access to exclusive listing information, preview properties to ensure you’re only shown homes that meet your needs and budget and make appointments and walk you through homes that interest you.</p>
                                        <p>There are lots of ways to <a href="/meet-a-realtor/location" rel="noopener">find a we</a>:</p>
                                        <ul>
                                            <li>As you drive through prospective neighbourhoods, jot down the names and numbers of we on For Sale signs.</li>
                                            <li>Open houses are also a great way to meet face-to-face.</li>
                                            <li>Maybe your friends and family members have worked with a we they love. Ask them to pass your name and contact information along.</li>
                                            <li>Many we are active on social media and can be reached out to directly through Facebook, Instagram, Twitter and LinkedIn.</li>
                                            <li>If you are browsing properties on REALTOR.ca, you can also contact a we directly through the website or a specific listing.</li>
                                        </ul>
                                        <p>No matter which we you select, he or she will advise you of reporting requirements by <a href="http://www.fintrac-canafe.gc.ca/" target="_blank" rel="noopener">FINTRAC</a>, the federal agency responsible for administering Canada’s money laundering and terrorist financing legislation and regulations. Your we is required by federal law to complete a client identification form and must ask you as a client (buyer) for verified ID such as a driver’s license or passport.</p>
                                    </td>
                                    <td style="vertical-align: top;" width="50%"><img class="aligncenter size-full wp-image-1470" src="images/details/find_the_right_realtor_01_w600.jpg" alt="" width="100%"><br>
                                        <img class="aligncenter size-full wp-image-1471" src="images/details/find_the_right_realtor_02_w600.jpg" alt="" width="100%">
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                    </div>

                </div>
            <?php
            }
            ?>
            <?php
            if (isset($req['id']) && $req['id'] == 4) {
            ?>
                <div class="whiteContentBox infoContentSection " class="h1">
                    <div class="h2">4. <?php echo $tips[3]['title'] ?></div>
                    <div class="infoContentSection_Intro"></div>
                    <div class="infoContentSection_Banner" style=" background-image: url(images/details/<?php echo $tips[3]['banner_image'] ?>);background-repeat: no-repeat;height:300px;">
                        <span class="hide" role="img" aria-label="A banner picture for the tab section: Make An Offer"></span>
                    </div>
      
                    <div class="infoContentSection_SubSection_TabCon" data-sectionid="1">
                        <table border="0" width="100%" cellspacing="0" cellpadding="20">
                            <tbody>
                                <tr>
                                    <td style="vertical-align: top;" width="50%">
                                        <h2>Make an Offer</h2>
                                        <p>You’ve found the perfect home? Congratulations! Now, if you actually want to make it yours, you have to make a successful offer, one the seller will accept. we can prepare the offer for you. Here are some terms you’ll see:</p>
                                    </td>
                                    <td style="vertical-align: top;" width="50%"><img class="aligncenter size-full wp-image-1496" src="images/details/offer_2_w600.jpg" alt="" width="100%" ></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
           
                </div>
            <?php
            }
            ?>
            <?php
            if (isset($req['id']) && $req['id'] == 5) {
            ?>
                <div class="whiteContentBox infoContentSection " class="h1">
                    <div class="h2">5. <?php echo $tips[4]['title'] ?></div>
                    <div class="infoContentSection_Intro"></div>
                    <div class="infoContentSection_Banner" style=" background-image: url(images/details/<?php echo $tips[4]['banner_image'] ?>);background-repeat: no-repeat;height:300px;">
                        <span class="hide" role="img" aria-label="A banner picture for the tab section: Close the Purchase"></span>
                    </div>
                    <div class="infoContentSection_SubSection_TabCon" data-sectionid="1">
                        <h2>Choose&nbsp;a Lawyer</h2>
                        <p>Buying a home involves piles of legal documents. You need someone to translate the legalese and ensure your best interests are protected.</p>
                        <table border="0" width="100%" cellspacing="0" cellpadding="20">
                            <tbody>
                                <tr>
                                    <td style="vertical-align: top;" width="50%">
                                        <h3>Finding a Lawyer</h3>
                                        <p>There are many experienced real estate lawyers out there. Like choosing any other professional, ask your friends, family and co-workers for their recommendations. Your we can also give you the name(s) of experienced real estate lawyers in your area.</p>
                                        </p>
                                    </td>
                                    <td style="vertical-align: top;" width="50%"><h3>How will your lawyer help?</h3>
                                        <p>There are many legal steps to transferring ownership of land from one person to another. Even if pitfalls like fraud, government legislation, zoning issues or unpaid taxes don’t come up, your lawyer will help make the legal transfer of the home as smooth as possible. A typical transfer of title will require two weeks to complete.</td>
                                </tr>
                            </tbody>
                        </table>
            
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Contact Us</h2>
                    <div id="main">
                        <div class="inner">
                            <span class="image main"><img src="{{ url('/images/map.jpg') }}" alt="" /></span>
                        </div>
                    </div>
                </section>
                <section>
                    <h2>Contact Info</h2>
                    <ul class="alt">
                        <li><span class="fa fa-envelope-o"></span> <a href="#">contact@Lakefront.com</a></li>
                        <li><span class="fa fa-phone"></span> +1 123 445 1231 </li>
                        <li><span class="fa fa-map-pin"></span>123 Lakefront Avnue, Ontario, Canada</li>
                    </ul>
                    <h2>Follow Us</h2>
                    <ul class="icons">
                        <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>Copyright © 2021 Lakefront Homelookers </li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <style>
        .h1 {
            border: 1px solid #cdcdcd;
            padding: 15px;
            background-color: #fff;
            position: relative;
            word-wrap: break-word;
        }

        .h2 {
            text-align: center;
            padding: 10px;
            font-size: 1.4rem;
            font-weight: bold;
        }
    </style>
</body>

</html>