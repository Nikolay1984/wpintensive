
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php wp_head(); ?>

</head>
<body>

<!-- Header
================================================== -->
<header>

    <div class="row">

        <div class="twelve columns">

            <div class="logo">
                <a href="index.html"><img alt="" src="/wp-content/themes/test/assets/images/logo.png"></a>
            </div>

            <nav id="nav-wrap">

                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

	            <?php wp_nav_menu([
		            'theme_location'  => 'menuHeader',
		            'container'       => null,
		            'menu_class'      => 'nav',
		            'menu_id'         => 'nav',
		            'after'           => ""
	            ])?>
                <!-- end #nav -->

            </nav> <!-- end #nav-wrap -->

        </div>

    </div>

</header>
<!-- Header End -->

<!-- Intro Section
   ================================================== -->
<section id="intro">

    <!-- Flexslider Start-->
    <div id="intro-slider" class="flexslider">

        <ul class="slides">

            <!-- Slide -->
            <li>
                <div class="row">
                    <div class="twelve columns">
                        <div class="slider-text">
                            <h1>Free amazing site template<span>.</span></h1>
                            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                                enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                                enim tellus ultrices elit.</p>
                        </div>
                        <div class="slider-image">
                            <img src="/wp-content/themes/test/assets/images/sliders/home-slider-image-01.png" alt="" />
                        </div>
                    </div>
                </div>
            </li>

            <!-- Slide -->
            <li>
                <div class="row">
                    <div class="twelve columns">
                        <div class="slider-text">
                            <h1>Responsive + HTML5 + CSS3<span>.</span></h1>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                                deleniti eos et accusamus. amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis.
                                Aenean condimentum, lacus sit amet luctus.</p>
                        </div>
                        <div class="slider-image">
                            <img src="/wp-content/themes/test/assets/images/sliders/home-slider-image-02.png" alt="" />
                        </div>
                    </div>
                </div>
            </li>

        </ul>

    </div> <!-- Flexslider End-->

</section> <!-- Intro Section End-->

