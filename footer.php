
<footer class="footer">

    <?php if (!is_page('booking')) : ?>
    <div id="scroll-up">
        <i class="fa fa-angle-up"></i>
    </div>

    <?php endif; ?>
        <div class="footer-content">
            <div class="footer-content__rights">
                <span>babushkinsad.com.ua 2020</span>
            </div>
        </div>
</footer>

<div class="hidden">
    <div id="callback" class="white-popup mfp-hide">
<?php echo do_shortcode ('[booking-form]') ?>
    </div>
</div> <!--hidden-->
<?php wp_footer();?>

</body>
</html>