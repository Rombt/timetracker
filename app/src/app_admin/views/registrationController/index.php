<?php require_once TEMPLATE_PATH . '/components/header.php' ?>


<main>

	<div class="wrapper-section">
		<div class="full-width login-form-full-width">
			<section class="container login-form">
				<div class="login-form__row">

					<div class="login-form__col">

						<div class="login-form__wrap">
							<form id='regForm' action="#" method=''>
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