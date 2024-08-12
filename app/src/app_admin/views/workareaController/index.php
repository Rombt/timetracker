<?php if ( ! User::isLogin() ) {
	header( 'Location: login' );
	exit();
} ?>

<?php require_once TEMPLATE_PATH . '/components/header.php' ?>


<main>

	<div class="wrapper-section  work-area-wrapper-section">
		<div class="rmbt-full-width work-area-full-width">
			<section class="rmbt-container  work-area">

				<h1 class='font-title'>The is time log of <?php echo $_SESSION['USER_NAME'] ?>
				</h1>
				<div class="work-area__row  user-row">

					<div class="work-area__col">

						<table class='simple-block font-text'>
							<tr>
								<th>Дата</th>
								<th>К-во часов</th>
								<th>Комментарий</th>
							</tr>
							<tr>
								<td>10.08.2024</td>
								<td>8</td>
								<td>Закончил проект</td>
							</tr>
							<tr>
								<td>11.08.2024</td>
								<td>6</td>
								<td>Подготовка к совещанию</td>
							</tr>
							<tr>
								<td>12.08.2024</td>
								<td>6</td>
								<td>Подготовка к совещанию</td>
							</tr>
							<tr>
								<td>13.08.2024</td>
								<td>6</td>
								<td>Подготовка к совещанию</td>
							</tr>
						</table>


					</div>
				</div>
			</section>
		</div>
	</div>

</main>




<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>