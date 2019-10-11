<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>TEST PAGE</title>
		<script type="text/javascript" src="./jquery/jquery.min.js"></script>
		<script type="text/javascript" src="./bootstrap4.3.1/js/bootstrap.min.js"></script>
	</head>

	<?php
			get_header()
	?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

		</main>
	</div>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>

</html>
