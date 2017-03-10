    </div><!--END CONTAINER-->

    <footer class="footer" role="contentinfo">

        <?php get_sidebar('footer'); ?>

        <div class="copyright">
            <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'shiftpress' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( '&#174;Powered by: %1$s.', 'shiftpress' ), '<a href="">Gestióon</a>' ); ?>
        </div>
    </footer><!--END FOOTER-->
    <?php wp_footer(); ?>
</body>
</html>
