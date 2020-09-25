<?php
get_header();

?>

<?php while (have_posts()){

            the_post();

   echo "<br>";
//            echo '<div>';
//    the_title();

    the_content();

//
//
//            echo '</div>';

}

dynamic_sidebar('sidebar');
?>




<?php
get_footer();
?>

