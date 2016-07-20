<?php get_header(); ?>

	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div>
					<img src="#" alt="FOTO">
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					<p><?php the_content(); ?></p>
				</div>

		<?php endwhile; else: ?>
			<div class="artigo">
				<h2>Nada Encontrado</h2>
				<p>Erro 404</p>
				<p>Lamentamos mas não foram encontras o artigos.</p>
			</div>

		<?php endif; ?>

			</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>