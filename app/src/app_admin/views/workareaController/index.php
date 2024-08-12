<?php if ( ! User::isLogin() ) {
	header( 'Location: login' );
	exit();
} ?>

<?php require_once TEMPLATE_PATH . '/components/header.php' ?>


<main>

	<div class="wrapper-section">
		<div class="rmbt-full-width work-area-full-width">
			<section class="rmbt-container work-area">
				<div class="work-area__row">

					<div class="work-area__col">

						<h1 class='font-title'>You are on the work area page</h1>

						<p class='font-text'> The users will be doing all operation here </p>

						<?php
						echo '<pre>';
						var_dump( $_SESSION );
						echo '</pre>';

						?>



					</div>
				</div>
			</section>
		</div>
	</div>

</main>




<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>