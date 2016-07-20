<?php get_header(); ?>

		<header>
			<div id="menu-principal">
				<span><img src="_img/icons/logo-Rever.png" alt="Logo"></span>
				<ul>
					<li><a href="#acao">Rever em ação</a></li>
					<li><a href="#projetos">Projetos</a></li>
					<li><a href="#about">Quem somos</a></li>
					<li><a href="#medias">Artigos</a></li>
					<li><a href="#medias">Vídeos</a></li>
					<li><a href="https://www.facebook.com/Oscip-Rever-Juntos-638147289534286/" target="_blank"><img src="_img/icons/facebook-icon.png" alt="Fanpage do Facebook"></a></li>
					<li><a href="https://www.youtube.com/" target="_blank"><img src="_img/icons/youtube-icon.png" alt="Canal do Youtube"></a></li>
				</ul>
			</div>
		</header>

		<section class="row" id="home">
			<h1>
				Lorem ipsum dolor sit amet
			</h1>
			<p>Delectus saepe aperiam, quaerat quis minus excepturi quisquam voluptas</p>
			<button type="button" class="btn btn-warning">Saiba <span id=plus>+</span></button>
			<div class="input-group" id="busca">
				<input type="text" class="form-control" placeholder="Busca">
				<span class="input-group-btn">
					<div class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></div>
				</span>
			</div><!-- /input-group -->
		</section><!-- Fim da section Home -->

		<!-- Parte que vai rolar os posts-->
		<div class="row" id="acao">
			<h2>Rever em Ação</h2>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="thumbnail">
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

							<div class="artigo">
								<h2>Nada Encontrado</h2>
								<p>Erro 404</p>
								<p>Lamentamos mas não foram encontras o artigos.</p>
							</div>

						<?php endif; ?>
					</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="thumbnail">
					<img src="#" alt="FOTO">
					<p>Data</p>
					<h3>Título</h3>
					<p>Parágrafo</p>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="thumbnail">
					<img src="#" alt="FOTO">
					<p>Data</p>
					<h3>Título</h3>
					<p>Parágrafo</p>
				</div>
			</div>
			<button type="button" class="btn btn-warning">Veja <span>+</span></button>
		</div>

		<!-- Páginas internas site -->
		<div class="row" id="projetos">
			<section class="projetos">
				<h2>Projetos</h2>
			<div class="media">
				<div class="media-left media-middle">
					<a href="#">
						<img class="media-object" src="_img/001.jpg" alt="FOTO">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Ciência</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, placeat quisquam. Maxime nulla sed amet, iure numquam necessitatibus sunt aperiam! Reiciendis maxime, maiores ad sit similique non id sapiente modi.</p>
				</div>
				<button type="button" class="btn btn-warning">Saiba <span>+</span></button>
			</div>

			<div class="media">
				<div class="media-body">
					<h4 class="media-heading">Sustentabilidade</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, placeat quisquam. Maxime nulla sed amet, iure numquam necessitatibus sunt aperiam! Reiciendis maxime, maiores ad sit similique non id sapiente modi.</p>
				</div>
				<div class="media-right media-middle">
					<a href="#">
						<img class="projeto-img media-object" src="_img/001.jpg" alt="FOTO">
					</a>
				</div>
				<button type="button" class="btn btn-warning">Saiba <span>+</span></button>
			</div>

			<div class="media">
				<div class="media-left media-middle">
					<a href="#">
						<img class="projeto-img media-object" src="_img/001.jpg" alt="FOTO">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Empoderamento Econômico</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, placeat quisquam. Maxime nulla sed amet, iure numquam necessitatibus sunt aperiam! Reiciendis maxime, maiores ad sit similique non id sapiente modi.</p>
				</div>
				<button type="button" class="btn btn-warning">Saiba <span>+</span></button>
			</div>
			</section>

		</div>

		<section class="row" id="about">
			<h2>Quem Somos</h2>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img data-src="#" alt="Ícone">
					<div class="caption">
						<h3>História</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						</p>
					</div>
				</div>
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img data-src="#" alt="Ícone">
					<div class="caption">
						<h3>Equipe</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						</p>
					</div>
				</div>
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img data-src="#" alt="Ícone">
					<div class="caption">
						<h3>Locais</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						</p>
					</div>
				</div>
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img data-src="#" alt="Ícone">
					<div class="caption">
						<h3>Mobilização</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						</p>
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-warning">Conheça <span>+</span></button>
		</section><!-- Fim da section About -->

		<!-- Videos e artigos produzidos pela REVER -->
		<section class="row" id="medias">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="artigo">
					<h2 id="barra-artigo">Artigos</h2>
					<div id="artigo">
						<h3>Artigo</h3>
						<figure>
							<img src="_img/placeimg_200_180_people.jpg" alt="Imagem do artigo">
							<figcaption>Legenda da imagem</figcaption>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem a, esse, obcaecati necessitatibus</p>
						</figure>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="video">
					<h2 id="barra-video">Vídeos</h2>
					<div id="video">
						<h3>LOREM IPSUM DOLLOR</h3>
						<iframe width="85%" height="315" src="https://www.youtube.com/embed/le-rAULvZ5s" frameborder="0" allowfullscreen></iframe>
						<p>Título referente ao vídeo.</p>
					</div>
				</div>
			</div>
		</section><!-- Fim da section Medias -->

		<div>
			<?php get_sidebar(); ?>
		</div>

		<section class="row" id="contato">
			<h1>Contato</h1>
			<form action="action_mail.php">
				<label for="">Nome</label><br>
				<input type="text" name="nome" placeholder="Seu nome" required ofocus>
				<br><br>
				<label for="">E-mail</label><br>
				<input type="email" name="email" placeholder="exemplo@exemplo.com" required>
				<br><br>
				<label for="">Assunto</label><br>
				<input type="text" name="assunto" placeholder="Digente o assunto da mensagem"><br><br>
				<label for="">Mensagem</label><br>
				<textarea name="msg" id="msg" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
				<br><br>
				<button type="button" class="btn btn-success align-center">Enviar</button>
			</form>
		</section><!-- Fim da section Contato -->

		<section class="row" id="endereco">
			<address>
				<p>(12) 3226-4101 * 3013-4838</p>
				<p>Rua Aurea Maria de Jesus Silva</p>
				<p>336, Beira Rio, Guaratinguetá</p>
				<p>CEP 12517-470</p>
			</address>
		</section><!-- Fim da section Endereço -->
        
        <div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14712.553390730967!2d-45.184141!3d-22.797337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccc5b45905164b%3A0x5b98c7d3616992ac!2sAv.+%C3%81urea+Maria+de+Jesus+Silva%2C+Guaratinguet%C3%A1+-+SP%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1464716559109" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

<?php get_footer(); ?>