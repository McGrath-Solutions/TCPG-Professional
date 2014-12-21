<!DOCTYPE html>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
 <?php if ($is_front): ?>    
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
   <!-- prevents conflicts between different versions of jquery; front page uses different version of jquery -->
   <script type="text/javascript">var $jq = jQuery.noConflict();</script> 
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20130409/jquery.cycle2.min.js"></script>
<?php endif; ?>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>