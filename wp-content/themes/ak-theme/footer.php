<div class="bottomInfo">
    <div class="container-lg">
        <div class="row justify-content-center align-items-center py-4">
            <div class="col-md contact">
                <ul>
                    <?php
                    if (is_active_sidebar('footer-form-1')) {
                        dynamic_sidebar('footer-contact-1');
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md social">
                <ul>
                    <?php
                    if (is_active_sidebar('footer-form-2')) {
                        dynamic_sidebar('footer-form-2');
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md navbar">
                <div class="menuWrap">
                    <ul>
                        <?php
                        if (is_active_sidebar('footer-form-2')) {
                            dynamic_sidebar('footer-menu-3');
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="copyright container-lg py-2">
        <?php echo date("Y"); ?> &copy; Michał Szczepański
    </div>
</footer>

<?php
wp_footer();
?>
</body>

</html>