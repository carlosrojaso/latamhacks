<div class="footer">
<div class="container">
<div class="row-fluid">
<div class="header">
<div class="span4">
<?php dynamic_sidebar('footer1'); ?>
</div>
<div class="span4">
<?php dynamic_sidebar('footer2'); ?>
</div>
<div class="span4">
<?php dynamic_sidebar('footer3'); ?>
</div>
<div class="clear"></div>
</div>
</div> 
</div>
<div class="container"><div class="content"><?php echo edenfresh_get_theme_opts('footer_text','Copyright &copy; '. get_bloginfo('sitename')); ?> | Latamhacks <?php echo date('Y'); ?> | Powered by <a href='http://www.sponzorme.com'>SponzorMe</a></div></div>
</div>
 
<?php wp_footer(); ?>

</div>

</body>
</html>