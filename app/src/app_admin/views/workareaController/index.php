<?php if ( ! User::isLogin() ) {
	header( 'Location: login' );
	exit();
} ?>

<?php require_once TEMPLATE_PATH . '/components/header.php' ?>


<main>

	<div class="wrapper-section  work-area-wrapper-section">
		<div class="rmbt-full-width work-area-full-width">
			<section class="rmbt-container  work-area">

				<h1 class='font-title'>The is time log of <?php echo $_SESSION['USER_NAME'] ?></h1>
				<p class='font-text user-status'> status of user: <span> <?php echo $_SESSION['USER_ROLE'] ?></span></p>
				<div class="work-area__row  user-row">

					<div class="work-area__col">


						<?php if ( count( $this->arrResults['TIME_LOG'] ) ) : ?>

							<table class='simple-block font-text'>
								<tr>
									<th>Date</th>
									<?php if ( User::isAdmin() ) : ?>
										<th>User name</th>
									<?php endif ?>
									<th>Hours</th>
									<th>Comments</th>

								</tr>

								<?php foreach ( $this->arrResults['TIME_LOG'] as $str ) : ?>
									<tr>
										<td><?php echo $str['day']; ?></td>
										<?php if ( User::isAdmin() ) : ?>
											<td><?php echo $str['username']; ?></td>
										<?php endif ?>
										<td><?php echo $str['hours']; ?></td>
										<td><?php echo $str['comment']; ?></td>
									</tr>
								<?php endforeach; ?>

							</table>
						<?php else : ?>
							<div class="massage-box">
								<h2>this user hadn't working yet</h2>
							</div>
						<?php endif ?>

					</div>
				</div>
			</section>
		</div>
	</div>

</main>




<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>