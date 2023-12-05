<?php

get_header();
?>

<section class="banner full">
				<article>
					<img src="<?php echo get_stylesheet_directory_uri()?>/images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, deserunt?</p>
							<h2>Hielo</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo get_stylesheet_directory_uri()?>/images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Lorem ipsum dolor sit amet nullam feugiat</p>
							<h2>Magna etiam</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo get_stylesheet_directory_uri()?>/images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Sed cursus aliuam veroeros lorem ipsum nullam</p>
							<h2>Tempus dolor</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo get_stylesheet_directory_uri()?>/images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Adipiscing lorem ipsum feugiat sed phasellus consequat</p>
							<h2>Etiam feugiat</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo get_stylesheet_directory_uri()?>/images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Ipsum dolor sed magna veroeros lorem ipsum</p>
							<h2>Lorem adipiscing</h2>
						</header>
					</div>
				</article>
			</section>
	

			<?php if( have_posts() ) : ?>
		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">
						<?php while( have_posts() ) : the_post(); ?>
						<div>
							<div class="box">
								<div class="image fit">
									<?php the_post_thumbnail( 'thumbnail' ) ?>
								</div>
								<div class="content">
									<header class="align-center">
										<p>Publish date <?php the_time( 'F j, Y' ) ?></p>
										<h2><?php the_title() ?></h2>
									</header>
									<?php the_excerpt() ?>
									<footer class="align-center">
										<a href="<?php the_permalink() ?>" class="button alt">Learn More</a>
									</footer>
								</div>
							</div>
						</div>
						<?php endwhile; ?>


					</div>
				</div>
			</section>
		<?php endif; ?>




	<?php get_footer() ?>
