<?php /* Smarty version 2.6.13, created on 2014-07-07 11:00:42
         compiled from application/web//master.html */ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php echo $this->_tpl_vars['meta']; ?>

</head>
<body class="loading">


        <?php if ($this->_tpl_vars['pages'] != 'login' && $this->_tpl_vars['pages'] != 'changepassword' && $this->_tpl_vars['pages'] != 'landing'): ?>
        <?php echo $this->_tpl_vars['header']; ?>

        <?php echo $this->_tpl_vars['mainContent']; ?>

        <?php echo $this->_tpl_vars['footer']; ?>

        <?php else: ?>
            <?php echo $this->_tpl_vars['mainContent']; ?>

        <?php endif; ?>

<script>
<?php echo '
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-25734728-4\', \'bintangradler.co.id\');
  ga(\'send\', \'pageview\');
'; ?>

</script>
	
</body>
</html>