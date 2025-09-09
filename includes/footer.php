<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo defined('SITE_URL') ? SITE_URL : '/'; ?>assets/js/script.js"></script>

<!-- Botão de alternar tema -->
<button id="theme-toggle" title="Alternar tema"></button>

<!-- Page specific scripts -->
<?php if (isset($pageScripts)): ?>
    <?php echo $pageScripts; ?>
<?php endif; ?>
</body>
</html>
