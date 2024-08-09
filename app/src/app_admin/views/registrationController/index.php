<?php require_once TEMPLATE_PATH . '/components/header.php' ?>


<main>

	<div class="wrapper-section">
		<div class="rmbt-full-width rmbt-main-section-full-width">
			<section class="rmbt-container rmbt-main-section">
				<div class="rmbt-main-section__row">

					<div class="rmbt-main-section__col">

						<div class="login-form-wrap">
							<form action="#">
								<label for="email">
									Login:
									<input type="text" id="login" name='login'>
								</label>
								<label for="email">
									Email:
									<input type="text" id="email" name='email'>
								</label>
								<label for="password">
									Password:
									<input type="text" id="password" name='password'>
								</label>
								<label for="password">
									Password confirm:
									<input type="text" id="passwordConfirm" name='passwordConfirm'>
								</label>

								<button type='submit'> registration </button>

							</form>
						</div>



					</div>
				</div>
			</section>
		</div>
	</div>

</main>




<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>