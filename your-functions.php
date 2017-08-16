function button_to_cpt_head() {
    ?>
    <script>
    jQuery(function(){
        jQuery("body.post-type-SLUG-GOES-HERE .wrap h1").append('<a href="http://mindchip.net" class="page-title-action">Back to MindChip</a>');
    });
    </script>
    <?php
}
add_action('admin_head', 'button_to_cpt_head');
