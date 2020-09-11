<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_enqueue_script("jquery"); ?>

    <?php wp_head(); ?>
</head>
<body>

<!-- Header
================================================== -->
<header>

    <div class="row">

        <div class="twelve columns">

            <div class="logo">
                <a href="index.html"><img alt="" src="images/logo.png"></a>
            </div>

            <nav id="nav-wrap">

                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

                <ul id="nav" class="nav">

                    <li class="current"><a href="index.htm">Home</a></li>
                    <li><span><a href="blog.html">Blog</a></span>
                        <ul>
                            <li><a href="blog.html">Blog Index</a></li>
                            <li><a href="single.html">Post</a></li>
                        </ul>
                    </li>
                    <li><span><a href="portfolio-index.html">Portfolio</a></span>
                        <ul>
                            <li><a href="portfolio-index.html">Portfolio Index</a></li>
                            <li><a href="portfolio.html">Portfolio Entry</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="styles.html">Features</a></li>

                </ul> <!-- end #nav -->

            </nav> <!-- end #nav-wrap -->

        </div>

    </div>

</header>
<!-- Header End -->

<!-- Page Title
================================================== -->
<div id="page-title">

    <div class="row">

        <div class="ten columns centered text-center">
            <h1>Style Guide<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
        </div>

    </div>

</div>
<!-- Page Title End-->
