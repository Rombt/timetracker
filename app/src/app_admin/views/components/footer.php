<footer>

	<div class="wrapper-section">
		<div class="rmbt-full-width rmbt-footer-page-full-width">
			<section class="rmbt-container rmbt-footer-page">
				<div class="rmbt-footer-page__row">

					<a href="/" class="rmbt-footer-page__col footer-logo">
						<span>Time tracker</span>
					</a>
					<div class="rmbt-footer-page__col footer-menu">
						<?php require TEMPLATE_PATH . '/components/mainMenu.php' ?>
					</div>
				</div>
				<div class="rmbt-footer-page__row copyright"> rmbt production </div>
			</section>


		</div>
	</div>




</footer>


</div>

<script src="<?php echo URL ?>/assets/js/app.main.min.js?<?php echo rand() ?>"></script>

<?php if ( isset( $this->addJs ) ) : ?>
	<script src="<?php echo $this->addJs . '?' . rand() ?>"></script>
<?php endif ?>
</body>

</html>