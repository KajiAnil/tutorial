
    <footer id="main-footer-section" class="footer">
        <div class="container footer-container">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-3">
                    <div class="footer-widgets clearfix">
                        <?php if (is_active_sidebar('footer1')) : ?>
                            <div class="footer-widget-area">
                                <?php dynamic_sidebar('footer1'); ?>
                            </div>   
                        <?php endif; ?>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widgets clearfix">
                        <?php if (is_active_sidebar('footer2')) : ?>
                            <div class="footer-widget-area">
                                <?php dynamic_sidebar('footer2'); ?>
                            </div>   
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widgets clearfix">
                        <?php if (is_active_sidebar('footer3')) : ?>
                            <div class="footer-widget-area search">
                                <?php dynamic_sidebar('footer3'); ?>
                            </div>   
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widgets clearfix">
                        <?php if (is_active_sidebar('footer4')) : ?>
                            <div class="footer-widget-area">
                                <?php dynamic_sidebar('footer4'); ?>
                            </div>   
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <section id="bottom-bar">
        <div class="container">
            <div class="row bottom-row">
                <div class="col-md-4">
                    All Rights Reserved &copy; 2017
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    Designed By: <a href="http://harip.com.np" target="_blank">Hari Bhusal</a>
                </div>
            </div>
        </div>
    </section>
    <?php wp_footer(); ?>

</body>

</html>