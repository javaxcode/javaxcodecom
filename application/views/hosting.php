<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Miracle | Responsive Multi-Purpose HTML5 Template</title>
    
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="description" content="Miracle | Responsive Multi-Purpose HTML5 Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/owl-carousel/owl.carousel.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/owl-carousel/owl.transitions.css" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/components/magnific-popup/magnific-popup.css"> 

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/revolution_slider/css/style.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/jquery.carousel-1.1/carousel.css" media="screen" />
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
    <div id="page-wrapper">
        <header id="header" class="header-color-white">
            <div class="container">
                <div class="header-inner">
                    <div class="branding">
                        <h1 class="logo">
                            <a href="index.html"><img src="images/logo@2x.png" alt="" width="25" height="26">Miracle</a>
                        </h1>
                    </div>
                    <nav id="nav">
                        <ul class="header-top-nav">
                            <li class="mini-cart menu-item-has-children">
                                <a href="#"><i class="fa fa-shopping-cart has-circle"></i></a>
                                <!--<div class="sub-nav cart-content">
                                    <ul class="product-list">
                                        <li class="empty">No products in the cart.</li>
                                    </ul>
                                    <hr>
                                    <div class="st-table">
                                        <div class="cart-action">
                                            <a href="woocommerce-shopping-cart.html" class="btn-view-cart btn btn-sm style4"><i class="fa fa-shopping-cart"></i>View Cart</a>
                                        </div>
                                        <div class="cart-price">Total: <span class="total-price">$00.0</span></div>
                                    </div>
                                </div>-->
                                <div class="sub-nav cart-content">
                                    <ul class="product-list product-list-widget">
                                        <li>
                                            <div class="product-image">
                                                <a href="#"><img alt="" src="http://placehold.it/58x63"></a>
                                            </div>
                                            <div class="product-content">
                                                <a href="#" class="product-title">Everyday Scoop Neck Cami</a>
                                                <span class="product-price">$18.99</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-image">
                                                <a href="#"><img alt="" src="http://placehold.it/58x63"></a>
                                            </div>
                                            <div class="product-content">
                                                <a href="#" class="product-title">Easy Draped Cardigan</a>
                                                <span class="product-price">$23.58</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="st-table">
                                        <div class="cart-action">
                                            <a href="woocommerce-shopping-cart.html" class="btn-view-cart btn btn-sm style4"><i class="fa fa-shopping-cart"></i>View Cart</a>
                                        </div>
                                        <div class="cart-price">Total: <span class="total-price">$42.57</span></div>
                                    </div>
                                </div>
                            </li>
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
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>
                                <ul class="sub-nav">
                                    <li><a href="index.html">Homepage 1</a></li>
                                    <li><a href="homepage2.html">Homepage 2</a></li>
                                    <li><a href="homepage3.html">Homepage 3</a></li>
                                    <li><a href="homepage4.html">Homepage 4</a></li>
                                    <li><a href="homepage5.html">Homepage 5</a></li>
                                    <li><a href="homepage6.html">Homepage 6</a></li>
                                    <li><a href="homepage7.html">Homepage 7</a></li>
                                    <li><a href="homepage8.html">Homepage 8</a></li>
                                    <li><a href="homepage9.html">Homepage 9</a></li>
                                    <li><a href="homepage10.html">Homepage 10</a></li>
                                    <li><a href="homepage11.html">Homepage 11</a></li>
                                    <li><a href="homepage12.html">Homepage 12</a></li>
                                    <li><a href="homepage13.html">Homepage 13</a></li>
                                    <li><a href="homepage14.html">Homepage 14</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-nav">
                                    <li class="menu-item-has-children">
                                        <a href="#">About US</a>
                                        <ul class="sub-nav">
                                            <li><a href="pages-about1.html">About Us 1</a></li>
                                            <li><a href="pages-about2.html">About Us 2</a></li>
                                            <li><a href="pages-about3.html">About Us 3</a></li>
                                            <li><a href="pages-about4.html">Member Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-nav">
                                            <li><a href="pages-services1.html">Services 1</a></li>
                                            <li><a href="pages-services2.html">Services 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Page Layouts</a>
                                        <ul class="sub-nav">
                                            <li><a href="pages-layouts-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="pages-layouts-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="pages-layouts-fullwidth.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pages-faqs.html">FAQS</a></li>
                                    <li><a href="pages-terms-conditions.html">Terms & Conditions</a></li>
                                    <li><a href="pages-404.html">404 Page</a></li>
                                    <li><a href="pages-coming-soon.html">Coming Soon</a></li>
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-loading.html">Loading Page</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Inner Style</a>
                                        <ul class="sub-nav">
                                            <li><a href="pages-inner-style1.html">Inner Style 1</a></li>
                                            <li><a href="pages-inner-style2.html">Inner Style 2</a></li>
                                            <li><a href="pages-inner-style3.html">Inner Style 3</a></li>
                                            <li><a href="pages-inner-style4.html">Inner Style 4</a></li>
                                            <li><a href="pages-inner-style5.html">Inner Style 5</a></li>
                                            <li><a href="pages-inner-style6.html">Inner Style 6</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Footer Style</a>
                                        <ul class="sub-nav">
                                            <li><a href="pages-footer-style1.html">Footer Style 1</a></li>
                                            <li><a href="pages-footer-style2.html">Footer Style 2</a></li>
                                            <li><a href="pages-footer-style3.html">Footer Style 3</a></li>
                                            <li><a href="pages-footer-style4.html">Footer Style 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children mega-menu-item mega-column-4">
                                <a href="#">Shortcodes</a>
                                <ul class="sub-nav">
                                    <li class="menu-item-has-children">
                                        <a href="#">Miracle Elements</a>
                                        <ul class="sub-nav">
                                            <li><a href="shortcode-accordion-toggles.html"><i class="fa fa-caret-square-o-right"></i><span>Accordion & Toggles</span></a></li>
                                            <li><a href="shortcode-animations.html"><i class="fa fa-spinner"></i><span>Animations</span></a></li>
                                            <li><a href="shortcode-blog-posts.html"><i class="fa fa-file-text-o"></i><span>Blog Posts</span></a></li>
                                            <li><a href="shortcode-buttons.html"><i class="fa fa-link"></i><span>Buttons</span></a></li>
                                            <li><a href="shortcode-dropdown.html"><i class="fa fa-bars"></i><span>Dropdowns</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Miracle Elements</a>
                                        <ul class="sub-nav">
                                            <li><a href="shortcode-form-layouts.html"><i class="fa fa-tasks"></i><span>Form Layouts</span></a></li>
                                            <li><a href="shortcode-galleries.html"><i class="fa fa-picture-o"></i><span>Galleries</span></a></li>
                                            <li><a href="shortcode-icon-styling.html"><i class="fa fa-adjust"></i><span>Icon Styling</span></a></li>
                                            <li><a href="shortcode-interactive-banners.html"><i class="fa fa-list-alt"></i><span>Interactive Banners</span></a></li>
                                            <li><a href="shortcode-process.html"><i class="fa fa-cog"></i><span>Process</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Miracle Elements</a>
                                        <ul class="sub-nav">
                                            <li><a href="shortcode-post-sliders.html"><i class="fa fa-picture-o"></i><span>Posts Sliders</span></a></li>
                                            <li><a href="shortcode-pricing-tables.html"><i class="fa fa-table"></i><span>Pricing Tables</span></a></li>
                                            <li><a href="shortcode-progress-bars.html"><i class="fa fa-bar-chart-o"></i><span>Progress Bars</span></a></li>
                                            <li><a href="shortcode-style-changer.html"><i class="fa fa-exchange"></i><span>Style Changer</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Miracle Elements</a>
                                        <ul class="sub-nav">
                                            <li><a href="shortcode-tabs.html"><i class="fa fa-list"></i><span>Tabs</span></a></li>
                                            <li><a href="shortcode-team.html"><i class="fa fa-user"></i><span>Team Members</span></a></li>
                                            <li><a href="shortcode-testimonials.html"><i class="fa fa-comment"></i><span>Testimonials</span></a></li>
                                            <li><a href="shortcode-typography.html"><i class="fa fa-print"></i><span>Typography</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Portfolio</a>
                                <ul class="sub-nav">
                                    <li class="menu-item-has-children">
                                        <a href="#">Fancy Grid</a>
                                        <ul class="sub-nav">
                                            <li><a href="portfolio-fancy-grid-2columns.html">2 Columns</a></li>
                                            <li><a href="portfolio-fancy-grid-3columns.html">3 Columns</a></li>
                                            <li><a href="portfolio-fancy-grid-4columns.html">4 Columns</a></li>
                                            <li><a href="portfolio-fancy-grid-5columns.html">5 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Fancy Wide</a>
                                        <ul class="sub-nav">
                                            <li><a href="portfolio-fancy-wide-3columns.html">3 Columns</a></li>
                                            <li><a href="portfolio-fancy-wide-4columns.html">4 Columns</a></li>
                                            <li><a href="portfolio-fancy-wide-5columns.html">5 Columns</a></li>
                                            <li><a href="portfolio-fancy-wide-6columns.html">6 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Grid</a>
                                        <ul class="sub-nav">
                                            <li><a href="portfolio-grid-2columns.html">2 Columns</a></li>
                                            <li><a href="portfolio-grid-3columns.html">3 Columns</a></li>
                                            <li><a href="portfolio-grid-4columns.html">4 Columns</a></li>
                                            <li><a href="portfolio-grid-5columns.html">5 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Masonry</a>
                                        <ul class="sub-nav">
                                            <li><a href="portfolio-masonry1.html">Masonry 1</a></li>
                                            <li><a href="portfolio-masonry2.html">Masonry 2</a></li>
                                            <li><a href="portfolio-masonry3.html">Masonry Text</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single</a>
                                        <ul class="sub-nav">
                                            <li><a href="portfolio-single1.html">Big Slider</a></li>
                                            <li><a href="portfolio-single2.html">Fullwidth Gallery</a></li>
                                            <li><a href="portfolio-single3.html">Fullwidth Project</a></li>
                                            <li><a href="portfolio-single4.html">Small Gallery</a></li>
                                            <li><a href="portfolio-single5.html">Small Slider Project</a></li>
                                            <li><a href="portfolio-single6.html">Vertical Gallery</a></li>
                                            <li><a href="portfolio-single7.html">Vertical Project</a></li>
                                            <li><a href="portfolio-single8.html">Video Project</a></li>
                                            <li><a href="portfolio-single9.html">Wide Image Project</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children mega-menu-item mega-column-6">
                                <a href="#">Blog</a>
                                <ul class="sub-nav">
                                    <li class="menu-item-has-children">
                                        <a href="#">Masonry</a>
                                        <ul class="sub-nav">
                                            <li><a href="blog-masonry-2columns.html">2 Column</a></li>
                                            <li><a href="blog-masonry-3columns.html">3 Column</a></li>
                                            <li><a href="blog-masonry-leftsidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-masonry-rightsidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Grid</a>
                                        <ul class="sub-nav">
                                            <li><a href="blog-grid-2columns.html">2 Column</a></li>
                                            <li><a href="blog-grid-3columns.html">3 Column</a></li>
                                            <li><a href="blog-grid-4columns.html">4 Columns</a></li>
                                            <li><a href="blog-grid-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Mini</a>
                                        <ul class="sub-nav">
                                            <li><a href="blog-mini-fullwidth.html">Fullwidth</a></li>
                                            <li><a href="blog-mini-leftsidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-mini-rightsidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Classic</a>
                                        <ul class="sub-nav">
                                            <li><a href="blog-classic-fullwidth.html">Fullwidth</a></li>
                                            <li><a href="blog-classic-leftsidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-classic-rightsidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Timeline</a>
                                        <ul class="sub-nav">
                                            <li><a href="blog-timeline-fullwidth.html">Fullwidth</a></li>
                                            <li><a href="blog-timeline-leftsidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-timeline-rightsidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Posts</a>
                                        <ul class="sub-nav">
                                            <li><a href="blog-singlepost-standard.html">Standard</a></li>
                                            <li><a href="blog-singlepost-rightsidebar.html">Right Sidebar</a></li>
                                            <li><a href="blog-singlepost-leftsidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-singlepost-audio.html">Audio</a></li>
                                            <li><a href="blog-singlepost-blockquote.html">Blockquote</a></li>
                                            <li><a href="blog-singlepost-gallery.html">Gallery</a></li>
                                            <li><a href="blog-singlepost-video.html">Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Contact</a>
                                <ul class="sub-nav">
                                    <li><a href="pages-contact1.html">Contact 1</a></li>
                                    <li><a href="pages-contact2.html">Contact 2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-nav">
                                    <li class="menu-item-has-children">
                                        <a href="#">Home Pages</a>
                                        <ul class="sub-nav">
                                            <li><a href="woocommerce-homepage1.html">Homepage 1</a></li>
                                            <li><a href="woocommerce-homepage2.html">Homepage 2</a></li>
                                            <li><a href="woocommerce-homepage3.html">Homepage 3</a></li>
                                            <li><a href="woocommerce-homepage4.html">Homepage 4</a></li>
                                            <li><a href="woocommerce-homepage5.html">Homepage 5</a></li>
                                            <li><a href="woocommerce-homepage6.html">Homepage 6</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Category Pages</a>
                                        <ul class="sub-nav">
                                            <li><a href="woocommerce-category-grid.html">Grid Style</a></li>
                                            <li><a href="woocommerce-category-list.html">List Style</a></li>
                                            <li><a href="woocommerce-category-banner.html">With Banner</a></li>
                                            <li><a href="woocommerce-category-big-header.html">Big Header</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Pages</a>
                                        <ul class="sub-nav">
                                            <li><a href="woocommerce-product-detailed.html">Product Detailed</a></li>
                                            <li><a href="woocommerce-product-sidebar.html">Product Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="woocommerce-product-quickview.html">Quick View Popup</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Cart Pages</a>
                                        <ul class="sub-nav">
                                            <li><a href="woocommerce-shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="woocommerce-checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Page Layouts</a>
                                        <ul class="sub-nav">
                                            <li><a href="woocommerce-layout-fullwidth.html">Fullwidth</a></li>
                                            <li><a href="woocommerce-layout-sidebar.html">Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="woocommerce-dashboard.html">Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
                <ul class="mobile-nav">
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="index.html">Home</a>
                        <ul class="sub-nav">
                            <li><a href="index.html">Homepage 1</a></li>
                            <li><a href="homepage2.html">Homepage 2</a></li>
                            <li><a href="homepage3.html">Homepage 3</a></li>
                            <li><a href="homepage4.html">Homepage 4</a></li>
                            <li><a href="homepage5.html">Homepage 5</a></li>
                            <li><a href="homepage6.html">Homepage 6</a></li>
                            <li><a href="homepage7.html">Homepage 7</a></li>
                            <li><a href="homepage8.html">Homepage 8</a></li>
                            <li><a href="homepage9.html">Homepage 9</a></li>
                            <li><a href="homepage10.html">Homepage 10</a></li>
                            <li><a href="homepage11.html">Homepage 11</a></li>
                            <li><a href="homepage12.html">Homepage 12</a></li>
                            <li><a href="homepage13.html">Homepage 13</a></li>
                            <li><a href="homepage14.html">Homepage 14</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="#">Pages</a>
                        <ul class="sub-nav">
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">About US</a>
                                <ul class="sub-nav">
                                    <li><a href="pages-about1.html">About Us 1</a></li>
                                    <li><a href="pages-about2.html">About Us 2</a></li>
                                    <li><a href="pages-about3.html">About Us 3</a></li>
                                    <li><a href="pages-about4.html">Member Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Services</a>
                                <ul class="sub-nav">
                                    <li><a href="pages-services1.html">Services 1</a></li>
                                    <li><a href="pages-services2.html">Services 2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Page Layouts</a>
                                <ul class="sub-nav">
                                    <li><a href="pages-layouts-left-sidebar.html">Left Sidebar</a></li>
                                    <li><a href="pages-layouts-right-sidebar.html">Right Sidebar</a></li>
                                    <li><a href="pages-layouts-fullwidth.html">Full Width</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-faqs.html">FAQS</a></li>
                            <li><a href="pages-terms-conditions.html">Terms & Conditions</a></li>
                            <li><a href="pages-404.html">404 Page</a></li>
                            <li><a href="pages-coming-soon.html">Coming Soon</a></li>
                            <li><a href="pages-blank.html">Blank Page</a></li>
                            <li><a href="pages-loading.html">Loading Page</a></li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Inner Style</a>
                                <ul class="sub-nav">
                                    <li><a href="pages-inner-style1.html">Inner Style 1</a></li>
                                    <li><a href="pages-inner-style2.html">Inner Style 2</a></li>
                                    <li><a href="pages-inner-style3.html">Inner Style 3</a></li>
                                    <li><a href="pages-inner-style4.html">Inner Style 4</a></li>
                                    <li><a href="pages-inner-style5.html">Inner Style 5</a></li>
                                    <li><a href="pages-inner-style6.html">Inner Style 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Footer Style</a>
                                <ul class="sub-nav">
                                    <li><a href="pages-footer-style1.html">Footer Style 1</a></li>
                                    <li><a href="pages-footer-style2.html">Footer Style 2</a></li>
                                    <li><a href="pages-footer-style3.html">Footer Style 3</a></li>
                                    <li><a href="pages-footer-style4.html">Footer Style 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="#">Shortcodes</a>
                        <ul class="sub-nav">
                            <li><a href="shortcode-accordion-toggles.html"><i class="fa fa-caret-square-o-right"></i><span>Accordion & Toggles</span></a></li>
                            <li><a href="shortcode-animations.html"><i class="fa fa-spinner"></i><span>Animations</span></a></li>
                            <li><a href="shortcode-blog-posts.html"><i class="fa fa-file-text-o"></i><span>Blog Posts</span></a></li>
                            <li><a href="shortcode-buttons.html"><i class="fa fa-link"></i><span>Buttons</span></a></li>
                            <li><a href="shortcode-dropdown.html"><i class="fa fa-bars"></i><span>Dropdowns</span></a></li>
                            <li><a href="shortcode-form-layouts.html"><i class="fa fa-tasks"></i><span>Form Layouts</span></a></li>
                            <li><a href="shortcode-galleries.html"><i class="fa fa-picture-o"></i><span>Galleries</span></a></li>
                            <li><a href="shortcode-icon-styling.html"><i class="fa fa-adjust"></i><span>Icon Styling</span></a></li>
                            <li><a href="shortcode-interactive-banners.html"><i class="fa fa-list-alt"></i><span>Interactive Banners</span></a></li>
                            <li><a href="shortcode-process.html"><i class="fa fa-cog"></i><span>Process</span></a></li>
                            <li><a href="shortcode-post-sliders.html"><i class="fa fa-picture-o"></i><span>Posts Sliders</span></a></li>
                            <li><a href="shortcode-pricing-tables.html"><i class="fa fa-table"></i><span>Pricing Tables</span></a></li>
                            <li><a href="shortcode-progress-bars.html"><i class="fa fa-bar-chart-o"></i><span>Progress Bars</span></a></li>
                            <li><a href="shortcode-style-changer.html"><i class="fa fa-exchange"></i><span>Style Changer</span></a></li>
                            <li><a href="shortcode-tabs.html"><i class="fa fa-list"></i><span>Tabs</span></a></li>
                            <li><a href="shortcode-team.html"><i class="fa fa-user"></i><span>Team Members</span></a></li>
                            <li><a href="shortcode-testimonials.html"><i class="fa fa-comment"></i><span>Testimonials</span></a></li>
                            <li><a href="shortcode-typography.html"><i class="fa fa-print"></i><span>Typography</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="#">Portfolio</a>
                        <ul class="sub-nav">
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Fancy Grid</a>
                                <ul class="sub-nav">
                                    <li><a href="portfolio-fancy-grid-2columns.html">2 Columns</a></li>
                                    <li><a href="portfolio-fancy-grid-3columns.html">3 Columns</a></li>
                                    <li><a href="portfolio-fancy-grid-4columns.html">4 Columns</a></li>
                                    <li><a href="portfolio-fancy-grid-5columns.html">5 Columns</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Fancy Wide</a>
                                <ul class="sub-nav">
                                    <li><a href="portfolio-fancy-wide-3columns.html">3 Columns</a></li>
                                    <li><a href="portfolio-fancy-wide-4columns.html">4 Columns</a></li>
                                    <li><a href="portfolio-fancy-wide-5columns.html">5 Columns</a></li>
                                    <li><a href="portfolio-fancy-wide-6columns.html">6 Columns</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Grid</a>
                                <ul class="sub-nav">
                                    <li><a href="portfolio-grid-2columns.html">2 Columns</a></li>
                                    <li><a href="portfolio-grid-3columns.html">3 Columns</a></li>
                                    <li><a href="portfolio-grid-4columns.html">4 Columns</a></li>
                                    <li><a href="portfolio-grid-5columns.html">5 Columns</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Masonry</a>
                                <ul class="sub-nav">
                                    <li><a href="portfolio-masonry1.html">Masonry 1</a></li>
                                    <li><a href="portfolio-masonry2.html">Masonry 2</a></li>
                                    <li><a href="portfolio-masonry3.html">Masonry Text</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Single</a>
                                <ul class="sub-nav">
                                    <li><a href="portfolio-single1.html">Big Slider</a></li>
                                    <li><a href="portfolio-single2.html">Fullwidth Gallery</a></li>
                                    <li><a href="portfolio-single3.html">Fullwidth Project</a></li>
                                    <li><a href="portfolio-single4.html">Small Gallery</a></li>
                                    <li><a href="portfolio-single5.html">Small Slider Project</a></li>
                                    <li><a href="portfolio-single6.html">Vertical Gallery</a></li>
                                    <li><a href="portfolio-single7.html">Vertical Project</a></li>
                                    <li><a href="portfolio-single8.html">Video Project</a></li>
                                    <li><a href="portfolio-single9.html">Wide Image Project</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="#">Blog</a>
                        <ul class="sub-nav">
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Masonry</a>
                                <ul class="sub-nav">
                                    <li><a href="blog-masonry-2columns.html">2 Column</a></li>
                                    <li><a href="blog-masonry-3columns.html">3 Column</a></li>
                                    <li><a href="blog-masonry-leftsidebar.html">Left Sidebar</a></li>
                                    <li><a href="blog-masonry-rightsidebar.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Grid</a>
                                <ul class="sub-nav">
                                    <li><a href="blog-grid-2columns.html">2 Column</a></li>
                                    <li><a href="blog-grid-3columns.html">3 Column</a></li>
                                    <li><a href="blog-grid-4columns.html">4 Columns</a></li>
                                    <li><a href="blog-grid-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Mini</a>
                                <ul class="sub-nav">
                                    <li><a href="blog-mini-fullwidth.html">Fullwidth</a></li>
                                    <li><a href="blog-mini-leftsidebar.html">Left Sidebar</a></li>
                                    <li><a href="blog-mini-rightsidebar.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Classic</a>
                                <ul class="sub-nav">
                                    <li><a href="blog-classic-fullwidth.html">Fullwidth</a></li>
                                    <li><a href="blog-classic-leftsidebar.html">Left Sidebar</a></li>
                                    <li><a href="blog-classic-rightsidebar.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Timeline</a>
                                <ul class="sub-nav">
                                    <li><a href="blog-timeline-fullwidth.html">Fullwidth</a></li>
                                    <li><a href="blog-timeline-leftsidebar.html">Left Sidebar</a></li>
                                    <li><a href="blog-timeline-rightsidebar.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Single Posts</a>
                                <ul class="sub-nav">
                                    <li><a href="blog-singlepost-standard.html">Standard</a></li>
                                    <li><a href="blog-singlepost-rightsidebar.html">Right Sidebar</a></li>
                                    <li><a href="blog-singlepost-leftsidebar.html">Left Sidebar</a></li>
                                    <li><a href="blog-singlepost-audio.html">Audio</a></li>
                                    <li><a href="blog-singlepost-blockquote.html">Blockquote</a></li>
                                    <li><a href="blog-singlepost-gallery.html">Gallery</a></li>
                                    <li><a href="blog-singlepost-video.html">Video</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="#">Contact</a>
                        <ul class="sub-nav">
                            <li><a href="pages-contact1.html">Contact 1</a></li>
                            <li><a href="pages-contact2.html">Contact 2</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="#">Shop</a>
                        <ul class="sub-nav">
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Home Pages</a>
                                <ul class="sub-nav">
                                    <li><a href="woocommerce-homepage1.html">Homepage 1</a></li>
                                    <li><a href="woocommerce-homepage2.html">Homepage 2</a></li>
                                    <li><a href="woocommerce-homepage3.html">Homepage 3</a></li>
                                    <li><a href="woocommerce-homepage4.html">Homepage 4</a></li>
                                    <li><a href="woocommerce-homepage5.html">Homepage 5</a></li>
                                    <li><a href="woocommerce-homepage6.html">Homepage 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Category Pages</a>
                                <ul class="sub-nav">
                                    <li><a href="woocommerce-category-grid.html">Grid Style</a></li>
                                    <li><a href="woocommerce-category-list.html">List Style</a></li>
                                    <li><a href="woocommerce-category-banner.html">With Banner</a></li>
                                    <li><a href="woocommerce-category-big-header.html">Big Header</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Product Pages</a>
                                <ul class="sub-nav">
                                    <li><a href="woocommerce-product-detailed.html">Product Detailed</a></li>
                                    <li><a href="woocommerce-product-sidebar.html">Product Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="woocommerce-product-quickview.html">Quick View Popup</a></li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Cart Pages</a>
                                <ul class="sub-nav">
                                    <li><a href="woocommerce-shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="woocommerce-checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="open-subnav"></span>
                                <a href="#">Page Layouts</a>
                                <ul class="sub-nav">
                                    <li><a href="woocommerce-layout-fullwidth.html">Fullwidth</a></li>
                                    <li><a href="woocommerce-layout-sidebar.html">Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="woocommerce-dashboard.html">Dashboard</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <div id="slideshow">
            <div class="revolution-slider">
                <ul>    <!-- SLIDE  -->
                    <!-- Slide1 -->
                    <li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="images/3.web-development.png" alt="">
                    </li>
                    
                    <!-- Slide2 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="images/1.web-development.png" alt="">
                    </li>
                    
                    <!-- Slide3 -->
                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="images/2.web-development.png" alt="">
                    </li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="section">
                <div class="container">
                    <div class="heading-box">
                        <h2 class="box-title">Welcome to The Web Excellence</h2>
                        <p class="desc-lg">Brought to you by SoapTheme</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-3 animated box" data-animation-type="fadeInDown" data-animation-delay="0">
                                <div class="icon-container">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">Multi-Purpose Layouts</a></h4>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptate acantium doloremque laudantium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-3 animated box" data-animation-type="fadeInDown" data-animation-delay="0.5">
                                <div class="icon-container">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">Retina Ready Graphics</a></h4>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptate acantium doloremque laudantium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-3 animated box" data-animation-type="fadeInDown" data-animation-delay="1">
                                <div class="icon-container">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">Fully Responsive Design</a></h4>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptate acantium doloremque laudantium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-3 animated box" data-animation-type="fadeInDown" data-animation-delay="1.5">
                                <div class="icon-container">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">Endless Possibilities</a></h4>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptate acantium doloremque laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="image-banner banner-image1">
                <div class="banner-color1">
                    <div class="section container">
                        <h1>Perfect for Mobile Devices</h1>
                    </div>
                    <div class="image-container fixed style-abs position-right">
                        <img src="images/pages/homepage/6/iphone.png" alt="" class="animated" data-animation-type="fadeInRight" data-animation-duration="2">
                    </div>
                    <div class="container">
                        <div class="col-sm-7 col-md-6">
                            <div class="icon-box style-side-6 block animated" data-animation-type="fadeInLeft" data-animation-delay="0">
                                <div class="icon-container">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">Retina Ready Graphics</a></h4>
                                    <p>Quisque tellus risus, adipiscing in viverra et, bibendum eu urna. Vestibulum fermentum risus at magna. Morbi tincidunt libero dolor, at scelerisque odio lacinia aliquet. Proin pellentesque magna at est laoreet mollis. Nullam a gravida eros, eget commodo velit.</p>
                                </div>
                            </div>
                            <div class="icon-box style-side-6 block animated" data-animation-type="fadeInLeft" data-animation-delay="0">
                                <div class="icon-container">
                                    <i class="fa fa-tablet"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">Multi-Purpose Layout</a></h4>
                                    <p>Quisque tellus risus, adipiscing in viverra et, bibendum eu urna. Vestibulum fermentum risus at magna. Morbi tincidunt libero dolor, at scelerisque odio lacinia aliquet. Proin pellentesque magna at est laoreet mollis. Nullam a gravida eros, eget commodo velit.</p>
                                </div>
                            </div>
                            <div class="icon-box style-side-6 block animated" data-animation-type="fadeInLeft" data-animation-delay="0">
                                <div class="icon-container">
                                    <i class="fa fa-umbrella"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">Awesome Support</a></h4>
                                    <p>Quisque tellus risus, adipiscing in viverra et, bibendum eu urna. Vestibulum fermentum risus at magna. Morbi tincidunt libero dolor, at scelerisque odio lacinia aliquet. Proin pellentesque magna at est laoreet mollis. Nullam a gravida eros, eget commodo velit.</p>
                                </div>
                            </div>
                            <div class="icon-box style-side-6 block animated" data-animation-type="fadeInLeft" data-animation-delay="0">
                                <div class="icon-container">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">Weekly Updates</a></h4>
                                    <p>Quisque tellus risus, adipiscing in viverra et, bibendum eu urna. Vestibulum fermentum risus at magna. Morbi tincidunt libero dolor, at scelerisque odio lacinia aliquet. Proin pellentesque magna at est laoreet mollis. Nullam a gravida eros, eget commodo velit.</p>
                                </div>
                            </div>
                            <div class="block">
                                <a href="#" class="btn style4 bg-white">Know More</a>
                                <a href="#" class="btn style4 bg-white">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="heading-box">
                        <h2 class="box-title">Take your web existance to a whole new level</h2>
                        <p class="desc-lg">Miracle is the right design where you can achieve that easily</p>
                    </div>
                    <div class="soap-gallery carousel-style1 carousel box" data-front-width="250" data-front-height="366" data-slides="7" data-vAlign="top">
                        <div class="slides">
                            <div>
                                <a href="images/pages/homepage/6/screens/1-main.jpg" class="soap-mfp-popup"><img src="images/pages/homepage/6/screens/1.jpg" alt=""></a>
                            </div>
                            <div>
                                <a href="images/pages/homepage/6/screens/2-main.jpg" class="soap-mfp-popup"><img src="images/pages/homepage/6/screens/2.jpg" alt=""></a>
                            </div>
                            <div>
                                <a href="images/pages/homepage/6/screens/3-main.jpg" class="soap-mfp-popup"><img src="images/pages/homepage/6/screens/3.jpg" alt=""></a>
                            </div>
                            <div>
                                <a href="images/pages/homepage/6/screens/4-main.jpg" class="soap-mfp-popup"><img src="images/pages/homepage/6/screens/4.jpg" alt=""></a>
                            </div>
                            <div>
                                <a href="images/pages/homepage/6/screens/5-main.jpg" class="soap-mfp-popup"><img src="images/pages/homepage/6/screens/5.jpg" alt=""></a>
                            </div>
                            <div>
                                <a href="images/pages/homepage/6/screens/6-main.jpg" class="soap-mfp-popup"><img src="images/pages/homepage/6/screens/6.jpg" alt=""></a>
                            </div>
                            <div>
                                <a href="images/pages/homepage/6/screens/7-main.jpg" class="soap-mfp-popup"><img src="images/pages/homepage/6/screens/7.jpg" alt=""></a>
                            </div>
                            <div>
                                <a href="images/pages/homepage/6/screens/1-main.jpg" class="soap-mfp-popup"><img src="images/pages/homepage/6/screens/1.jpg" alt=""></a>
                            </div>
                            <div>
                                <a href="images/pages/homepage/6/screens/2-main.jpg" class="soap-mfp-popup"><img src="images/pages/homepage/6/screens/2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Aliquam hendrerit a augue in suscipit. Pellentesque id erat quis sapien dignissim sollicitudin. Nulla mattis tortor sit amet dolor sollicitudin aliquam. Integer viverra odio lectus sedisro mattis placerat. Vivamus sed risus et erat placerat auctor.</p>
                            <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrices condimentum, leo massa mollis estiegittis miristum nulla. Nullam gravida, diam accorper adipiscing, arcu eros posuere tortorsit taliquet eros dui sed mauris.</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Aliquam hendrerit a augue in suscipit. Pellentesque id erat quis sapien dignissim sollicitudin. Nulla mattis tortor sit amet dolor sollicitudin aliquam. Integer viverra odio lectus sedisro mattis placerat. Vivamus sed risus et erat placerat auctor.</p>
                            <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrices condimentum, leo massa mollis estiegittis miristum nulla. Nullam gravida, diam accorper adipiscing, arcu eros posuere tortorsit taliquet eros dui sed mauris.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="callout-box style1 parallax parallax-image1" data-stellar-background-ratio="0.5">
                <div class="callout-box-wrapper bg-blue">
                    <div class="container">
                        <div class="row same-height">
                            <div class="col-md-8 callout-content-container animated" data-animation-type="fadeInLeft" data-animation-duration="2">
                                <div class="callout-content section">
                                    <div class="st-table box-xl">
                                        <div class="callout-text">
                                            <h3>Amateurs wait for inspiration creatives get up & go to work!</h3>
                                        </div>
                                        <div class="callout-action">
                                            <a class="btn style4" href="#">know more</a>
                                            <a class="btn style4" href="#">purchase</a>
                                        </div>
                                    </div>
                                    <div class="row box-xl">
                                        <div class="col-sms-6 col-sm-3">
                                            <div class="circle-wrap box">
                                                <div class="circle-progress font-light" data-bgcolor="#1b2f48" data-fgcolor="#ffffff" data-percent="90" data-text="90" data-dimension="110" data-bordersize="4" data-fontsize="30"></div>
                                                <div class="fontsize-lg">Projects Completed</div>
                                            </div>
                                        </div>
                                        <div class="col-sms-6 col-sm-3">
                                            <div class="circle-wrap box">
                                                <div class="circle-progress font-light" data-bgcolor="#1b2f48" data-fgcolor="#ffffff" data-percent="50" data-text="50" data-dimension="110" data-bordersize="4" data-fontsize="30"></div>
                                                <div class="fontsize-lg">Work in Progress</div>
                                            </div>
                                        </div>
                                        <div class="col-sms-6 col-sm-3">
                                            <div class="circle-wrap box">
                                                <div class="circle-progress font-light" data-bgcolor="#1b2f48" data-fgcolor="#ffffff" data-percent="75" data-text="75" data-dimension="110" data-bordersize="4" data-fontsize="30"></div>
                                                <div class="fontsize-lg">Happy Customers</div>
                                            </div>
                                        </div>
                                        <div class="col-sms-6 col-sm-3">
                                            <div class="circle-wrap box">
                                                <div class="circle-progress font-light" data-bgcolor="#1b2f48" data-fgcolor="#ffffff" data-percent="65" data-text="65" data-dimension="110" data-bordersize="4" data-fontsize="30"></div>
                                                <div class="fontsize-lg">Repeat Customers</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-sm">
                                        <div class="desc-lg">
                                            Providing best facilities & workplace perks to our employees.
                                        </div>
                                        <div class="desc-sm">* All pages of miracle are handcrafted and pixel perfect.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 animated" data-animation-type="fadeInUp" data-animation-duration="2">
                                <div class="callout-image-container">
                                    <div class="callout-image">
                                        <img src="http://placehold.it/418x540" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="callout-box style3">
                <div class="container">
                    <div class="callout-content">
                        <div class="callout-text">
                            <h2>Miracle will make you fall in love again!</h2>
                        </div>
                        <div class="callout-action">
                            <a class="btn style3" href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="heading-box">
                        <h2 class="box-title">What Customers Are Saying?</h2>
                        <p class="desc-lg">Hand picked customer feedbacks</p>
                    </div>
                    <div class="testimonials style1 owl-carousel" data-items="3" data-itemsPerDisplayWidth="[[0, 1], [480, 1], [768, 1], [992, 2], [1200, 3]]">
                        <div class="testimonial style1 box-lg">
                            <div class="testimonial-image">
                                <img src="http://placehold.it/92x92" alt="">
                            </div>
                            <div class="testimonial-content">
                                So clean and to the point, love it!
                            </div>
                            <div class="testimonial-author">
                                <span class="testimonial-author-name">John Doe</span> - <span class="testimonial-author-job">CEO</span>
                            </div>
                        </div>
                        <div class="testimonial style1 box-lg">
                            <div class="testimonial-image">
                                <img src="http://placehold.it/92x92" alt="">
                            </div>
                            <div class="testimonial-content">
                                These guys surprise me everytime!
                            </div>
                            <div class="testimonial-author">
                                <span class="testimonial-author-name">Jesscia Martin</span> - <span class="testimonial-author-job">CEO</span>
                            </div>
                        </div>
                        <div class="testimonial style1 box-lg">
                            <div class="testimonial-image">
                                <img src="http://placehold.it/92x92" alt="">
                            </div>
                            <div class="testimonial-content">
                                Incredibly awesome & clean interface!
                            </div>
                            <div class="testimonial-author">
                                <span class="testimonial-author-name">Kevin Smith</span> - <span class="testimonial-author-job">CEO</span>
                            </div>
                        </div>
                        <div class="testimonial style1 box-lg">
                            <div class="testimonial-image">
                                <img src="http://placehold.it/92x92" alt="">
                            </div>
                            <div class="testimonial-content">
                                These guys surprise me everytime!
                            </div>
                            <div class="testimonial-author">
                                <span class="testimonial-author-name">Jesscia Martin</span> - <span class="testimonial-author-job">CEO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="style4">
            <div class="callout-box style2">
                <div class="container">
                    <div class="callout-content">
                        <div class="callout-text">
                            <h4>Miracle is premium hand-crafted, pixel perfect and responsive wordpress theme</h4>
                        </div>
                        <div class="callout-action">
                            <a href="#" class="btn style4">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row add-clearfix same-height">
                        <div class="col-sm-6 col-md-3">
                            <h5 class="section-title box">Recent Posts</h5>
                            <ul class="recent-posts">
                                <li>
                                    <a href="#" class="post-author-avatar"><span><img src="http://placehold.it/50x50" alt=""></span></a>
                                    <div class="post-content">
                                        <a href="#" class="post-title">Website design trends for 2014</a>
                                        <p class="post-meta">By <a href="#">Admin</a>  .  12 Nov, 2014</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="post-author-avatar"><span><img src="http://placehold.it/50x50" alt=""></span></a>
                                    <div class="post-content">
                                        <a href="#" class="post-title">UI experts and modern designs</a>
                                        <p class="post-meta">By <a href="#">Admin</a>  .  12 Nov, 2014</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="post-author-avatar"><span><img src="http://placehold.it/50x50" alt=""></span></a>
                                    <div class="post-content">
                                        <a href="#" class="post-title">Mircale is available in wordpress</a>
                                        <p class="post-meta">By <a href="#">Admin</a>  .  12 Nov, 2014</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h5 class="section-title box">Popular Tags</h5>
                            <div class="tags">
                                <a href="#" class="tag">masonry</a>
                                <a href="#" class="tag">responsive</a>
                                <a href="#" class="tag">Ecommerce</a>
                                <a href="#" class="tag">web design</a>
                                <a href="#" class="tag">wordpres</a>
                                <a href="#" class="tag">mobile</a>
                                <a href="#" class="tag">retina</a>
                                <a href="#" class="tag">multi-purpose</a>
                                <a href="#" class="tag">blog posts</a>
                                <a href="#" class="tag">new sliders</a>
                                <a href="#" class="tag">popular</a>
                                <a href="#" class="tag">recent</a>
                                <a href="#" class="tag">modern</a>
                                <a href="#" class="tag">themeforest</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h5 class="section-title box">Useful Links</h5>
                            <ul class="arrow useful-links">
                                <li><a href="#">About SoapTheme</a></li>
                                <li><a href="#">Video Overview</a></li>
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">Theme Features</a></li>
                                <li><a href="#">Breaking News</a></li>
                                <li><a href="#">Upcoming Updates</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h5 class="section-title box">About Miracle</h5>
                            <p>Mircale is a Hand Crafted Pexil Perfect - Responsive - Multi-Purpose & Retina Ready Premium Wordpress Theme which sets new standards for the web design in 2014.</p>
                            <div class="social-icons">
                                <a href="#" class="social-icon"><i class="fa fa-twitter has-circle" data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-facebook has-circle" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-google-plus has-circle" data-toggle="tooltip" data-placement="top" title="GooglePlus"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-linkedin has-circle" data-toggle="tooltip" data-placement="top" title="LinkedIn"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-skype has-circle" data-toggle="tooltip" data-placement="top" title="Skype"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-dribbble has-circle" data-toggle="tooltip" data-placement="top" title="Dribbble"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-tumblr has-circle" data-toggle="tooltip" data-placement="top" title="Tumblr"></i></a>
                            </div>
                            <a href="#" class="btn btn-sm style4">Contact Us</a>
                            <a href="#" class="btn btn-sm style4">Purchase</a>
                            <a href="#" class="back-to-top"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="copyright-area">
                        <nav class="secondary-menu">
                            <ul class="nav nav-pills">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Shortcodes</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Shop</a></li>
                            </ul>
                        </nav>
                        <div class="copyright">
                            &copy; 2014 Miracle <em>by</em> <a href="http://www.soaptheme.net/">SoapTheme</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Javascript -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.noconflict.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/modernizr.2.8.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui.1.11.2.min.js"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="<?= base_url() ?>assets/components/magnific-popup/jquery.magnific-popup.min.js"></script> 
    
    <!-- parallax -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/waypoints.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?= base_url() ?>assets/components/owl-carousel/owl.carousel.min.js"></script>

    <!-- load revolution slider scripts -->
    <script type="text/javascript" src="<?= base_url() ?>assets/components/revolution_slider/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/components/jquery.carousel-1.1/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/components/jquery.carousel-1.1/jquery.carousel-1.1.min.js"></script>

    <!-- plugins -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.plugins.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/main.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider.js"></script>
</body>
</html>