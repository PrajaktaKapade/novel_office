<footer class="site-footer">
    <div class="footer-container">
        &copy; <?php echo date('Y'); ?> Novel Office. All rights reserved.
    </div>
</footer>
<?php wp_footer(); ?>
<script>
document.getElementById('mobile-menu').addEventListener('click', function () {
    document.getElementById('main-nav').classList.toggle('active');
});
</script>
</body>
</html>