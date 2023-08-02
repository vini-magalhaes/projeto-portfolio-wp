<?php
$logo = get_field('logo_footer', 'option');

$redes = get_field('redes_sociais', 'option');
$copyright = get_field('copyright', 'option');
?>
<footer id="footer">
	<div class="scroll-top">
		<img src="<?php echo get_template_directory_uri().'/assets/img/seta-vermelha.png' ?>" alt="" width="26" height="19">
	</div>
	<div class="bloco-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 order-lg-1 order-2">
					<div class="menus">
						<?php dynamic_sidebar('sidebar-footer'); ?>

					</div>
				</div>
				<div class="col-lg-6 col-12 order-lg-2 order-1">
					<div class="logo">
						<img src='<?php echo $logo['url'] ?>' width='<?php echo $logo['width'] ?>' height='<?php echo $logo['height'] ?>' alt='Sompo Corporate' />
					</div>
					<div class="redes">
						<?php if (!empty($redes['twitter'])) : ?>
							<a href="<?php echo $redes['twitter'] ?>" target="_blank">
								<svg class="icon">
									<use xlink:href="<?php echo get_template_directory_uri() . '/assets/img/sprite.svg#icon-twitter-novo' ?>">
									</use>
								</svg>
							</a>
						<?php endif; ?>
						<?php if (!empty($redes['facebook'])) : ?>
							<a href="<?php echo $redes['facebook'] ?>" target="_blank">
								<svg class="icon">
									<use xlink:href="<?php echo get_template_directory_uri() . '/assets/img/sprite.svg#icon-facebook' ?>">
									</use>
								</svg>
							</a>
						<?php endif; ?>
						<?php if (!empty($redes['instagram'])) : ?>
							<a href="<?php echo $redes['instagram'] ?>" target="_blank">
								<svg class="icon">
									<use xlink:href="<?php echo get_template_directory_uri() . '/assets/img/sprite.svg#icon-instagram' ?>">
									</use>
								</svg>
							</a>
						<?php endif; ?>
						<?php if (!empty($redes['linkedin'])) : ?>
							<a href="<?php echo $redes['linkedin'] ?>" target="_blank">
								<svg class="icon">
									<use xlink:href="<?php echo get_template_directory_uri() . '/assets/img/sprite.svg#icon-linkedin' ?>">
									</use>
								</svg>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bloco-2">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="copyright">
						<?php echo $copyright; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>