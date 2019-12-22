
<body>
    <div id="page-wrapper">
        <header id="header" >
            <div class="container">
                <div class="header-inner">
                    <div class="branding">
                        <h1 class="logo">
                            <a href="<?= base_url() ?>"><img src="images/logo@2x.png" alt="" width="25" height="26">javaXcode</a>
                        </h1>
                    </div>
                    <nav id="nav">
                        <ul class="header-top-nav">
                            
                            <li class="mini-search">
                                <a href="#"><i class="fa fa-search has-circle"></i></a>
                                <div class="main-nav-search-form">
                                    <form method="get" role="search">
                                        <div class="search-box">
                                            <input type="text" id="s" name="s" value="">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="visible-mobile">
                                <a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
                            </li>
                        </ul>
                        <ul id="main-nav" class="hidden-mobile">
                            <li><a href="index">Home</a></li>
                            <li><a href="service">Service</a></li>
                            <li><a href="portfolio">Portfolio</a></li>
                            <!-- <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="price">Price</a>
                                <ul class="sub-nav">
                                    <li><a href="hosting">Hosting</a></li>
                                    <li><a href="cloudvps">Cloud VPS</a></li>
                                </ul>
                            </li> -->
                            <li><a href="price">Price</a></li>
                            <li><a href="contact">Contact Us</a></li>
                            <li><a href="about">About</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
                <ul class="mobile-nav">
                    <li><a href="index">Home</a></li>
                    <li><a href="service">Service</a></li>
                    <li><a href="portfolio">Portfolio</a></li>
                    <li><a href="price">Price</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    <li><a href="about">About</a></li>
                </ul>
            </div>
        </header>