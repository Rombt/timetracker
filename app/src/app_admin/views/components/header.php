<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo URL ?>/assets/styles/main-style.min.css?<?php echo rand() ?>" />
	<?php if ( isset( $this->addCss ) ) : ?>
		<link rel="stylesheet" href="<?php echo $this->addCss . '?' . rand() ?>" />
	<?php endif ?>

	<title><?php echo $this->getTitle() ?></title>
</head>


<body>
	<div class="rmbt-page-wrap">

		<header>
			<div class="wrapper-section">
				<div class="rmbt-full-width rmbt-top-string-header-full-width">
					<section class="rmbt-container rmbt-top-string-header">
						<div class="rmbt-top-string-header__row">

							<a href="/" class="rmbt-top-string-header__col header-logo">
								<div class="wrap-img">
									<img src="<?php echo URL ?>/assets/img/header-logo_color_1.png" alt="">
								</div>
								<span class='font-title'>Time tracker</span>
							</a>
							<?php require TEMPLATE_PATH . '/components/mainMenu.php' ?>
						</div>
					</section>
				</div>
			</div>
		</header>