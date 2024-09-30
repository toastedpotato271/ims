</div>

<footer class="site-footer">
<div class="footer-copyright">&copy; 2024 grp3. IMS, all rights reserved</div>
</footer>

<!-- Dynamically load additional JavaScript files -->
<?php
    if (isset($additional_js) && is_array($additional_js)) {
        foreach ($additional_js as $js_file) {
            echo '<script src="' . $js_file . '"></script>';
        }
    }
    ?>
    

</body>
</html>