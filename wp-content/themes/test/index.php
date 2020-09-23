<?php
get_header();

?>

<?php while (have_posts()){

            the_post();
   echo CFS()->get('intro');
            echo '<div>';
            echo the_title();


            echo '</div>';

}

    ?>




<?php
get_footer();
?>

