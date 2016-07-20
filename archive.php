<?php get_header(); ?>

<div class="row">
	<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
		<?php $post = $posts[0]; // Hack. Define o $post de modo que the_date() ativa. ?>
		<?php /* IF este é um arquivo de categoria */ if (is_category()) { ?>
		    Arquivo da Categoria "<?php echo single_cat_title(); ?>"
		<?php /* If este é um arquivo diário */ } elseif (is_day()) { ?>
		    Arquivo de <?php the_time('j de F de Y'); ?>
		<?php /* If este é um arquivo mensal */ } elseif (is_month()) { ?>
		    Arquivo de <?php the_time('F de Y'); ?>
		<?php /* If este é um arquivo anual */ } elseif (is_year()) { ?>
		    Arquivo de <?php the_time('Y'); ?>
		<?php /* If este é um arquivo do autor */ } elseif (is_author()) { ?>
		    Arquivo do Autor
		<?php /* If este é um arquivo paginada */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		    Arquivo do Blog
		<?php } ?>


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div>
					<img src="#" alt="FOTO">
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
					<p><?php the_content(); ?></p>
				</div>

		<?php endwhile?>
			<div class="navegacao">
				<div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
				<div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
			</div>

		<?php else: ?>
			<div class="postagem">
				<h2>Nada Encontrado</h2>
				<p>Erro 404</p>
				<p>Lamentamos mas não foram encontras o artigos.</p>
			</div>

		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer();?>