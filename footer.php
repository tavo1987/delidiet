    </div><!--END CONTAINER-->

    <footer class="footer" role="contentinfo">
        <div class="row">
            <div class="columns">
                <?php get_sidebar('footer'); ?>

                <div class="copyright">
                    <?php echo sprintf( __( '&#174;Powered by %1$s.', 'shiftpress' ), '<a href="">Gestión</a>' ); ?>
                </div>
            </div>
        </div>
    </footer><!--END FOOTER-->
    <?php wp_footer(); ?>
</body>
</html>
