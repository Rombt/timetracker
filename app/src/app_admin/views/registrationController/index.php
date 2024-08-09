<?php require_once TEMPLATE_PATH . '/components/header.php' ?>


<main>

	<div class="wrapper-section">
		<div class="rmbt-full-width login-form-full-width">
			<section class="rmbt-container login-form">
				<div class="login-form__row">

					<div class="login-form__col">

						<h1 class='font-title'>Complete this form <br> for registration</h1>

						<div class="login-form__wrap">
							<form id='regForm' class="font-text simple-block " action="#" method=''>
								<label for="email">
									Login:
									<input type="text" id="login" name='login' required>
								</label>
								<label for="email">
									Email:
									<input type="text" id="email" name='email' required>
								</label>
								<label for="password">
									Password:
									<input type="text" id="password" name='password' required>
								</label>
								<label for="password">
									Password confirm:
									<input type="text" id="passwordConfirm" name='passwordConfirm' required>
								</label>

								<button type='submit' class='font-text'> registration </button>

							</form>
						</div>



					</div>
				</div>
			</section>
		</div>
	</div>

</main>




<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>