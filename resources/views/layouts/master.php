<!DOCTYPE html>
<html lang="bd">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php startblock('meta_tags') ?><?php endblock() ?>

	<!-- Favicon-->
	<?php echo icon('img/favicon.png'); ?>

	<title><?php startblock('title') ?><?php endblock() ?></title>

	<!-- Styles -->
	<?php append('layouts.partials.styles'); ?>	

	<!-- Extra Styles -->
	<?php startblock('extra-styles') ?><?php endblock() ?>

	<!-- Custom Style -->
	<?php echo style('css/style.css'); ?>
	

</head>
<!-- #ENDS# Header -->

<body>

	<!-- Navigation -->
	<?php append('layouts.partials.navigation'); ?>

	<!-- Page Content -->
	<?php startblock('content') ?><?php endblock() ?>

	<!-- Footer -->
  	<?php append('layouts.partials.footer'); ?>

	<!-- Scripts -->
	<?php append('layouts.partials.scripts'); ?>

	<!-- Extra Scripts -->
	<?php startblock('extra-scripts') ?><?php endblock() ?>

	<!-- Custom Script -->
	<?php startblock('custom-script') ?><?php endblock() ?>

</body>

</html>