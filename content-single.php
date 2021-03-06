<!-- CONTENT column -->
<div class="w66 right pl2 pa0m">

	<h2 class="htitle txt30  txt25m txtcenterm text-center">Nos Sponsors</h2>

	<?php

	if (have_posts()) :?>

	<br />
	<br />

	<div class="linemam w100 ">
		<ul>

			<?php while (have_posts()) : the_post();?>

			<li class="article w100 left clear mb1">
				<a href="<?= get_permalink(); ?>">

	 				<?php

	             		$attr = [
							'class'	=> "left mr1 shadow",
							'alt'	=> get_the_title(),
							'title'	=> get_the_title(),
						];

		              		the_post_thumbnail('thumbnail', $attr); ?>

					</a>
					<h3 class="htitle txt30  txt25m txtcenterm ">
						<a href="<?= get_permalink(); ?>">
							<em><?= get_the_title() ?></em>
						</a>
					</h3>

					<article><?php the_content('Voir le sponsor.', true); ?></article>
				</li>

		<?php endwhile; ?>

		</ul>

		<div class="navigation text-center">
			<?php

			$args = [
				'prev_text'          => __('« Avant'),
				'prev_text'          => __('« Avant'),
				'next_text'          => __('Après »')
			];

			echo paginate_links( $args );?>

		</div>
	</div>

	<?php endif; ?>

</div>