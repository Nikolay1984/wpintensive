<?php
get_header();

?>

<?php while (have_posts()){

            the_post();
//   echo CFS()->get('intro');
   echo "<br>";
//            echo '<div>';
//    the_title();

    the_content();
    echo  (do_shortcode('shortcode-start [mycode] shortcode-end'));
//
//
//            echo '</div>';

}

    ?>




<?php
get_footer();
?>

