<?php get_header();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<div class="container">
    <?php
    echo 1;
    $current_tax = get_query_var('your_tax_slug');
    echo $current_tax;
    ?>
</div>

<?php get_footer() ?>