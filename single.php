<?php get_template_part( 'header' ); ?>

<div class="container-fluid" >
    <div class="row justify-content-between">
        <div class="col-lg-3 col-sm-0 col-md-4 cadre laterale">
            <?php get_template_part( 'sidebar' ); ?>
    
        </div>
        <div class="col-lg-9 col-sm-12 col-md-8 cadre">
			<?php if ( have_posts() ) :?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div id="type-single">
						<?php
						$category_detail=get_the_category($post->ID);//$post->ID
						foreach($category_detail as $cd){
							if($cd->parent==16){
								echo '<h4>'.$cd->cat_name.' (ID : '.$cd->term_id.')</h4>';
								
							}
						}
						?>
					</div>
					Qualités également disponibles pour cet Article<br>
					<?php $qualitesV1= get_post_meta($post->ID, 'qualité', true); 
					$qualites = explode(",", $qualitesV1);
						for ($i = 0; $i <= 2; $i++) {
							echo '<button type="button" class="btn btn-success mx-2">'.$qualites[$i].' ('.get_post_meta($post->ID, 'langue', true).')</button>';
							//echo $qualites[$i];
						}
					?>
					
					<div class="card text-center bg-transparent">
						<h1 class="text-secondary ">Telecharger <?php echo get_post_meta($post->ID, 'titre original', true);?></h1>
						<h2><i id="qualite-single">Qualité : <?php echo $qualites[0]?></i> | <b id="langue-single">FRENCH</b></h2>
						<?php 
						$image = get_field('image');
						if( !empty( $image ) ): ?>
							<img width="50%" src="<?php echo esc_url($image['url']); ?>" class="rounded mx-auto d-block" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-7" >
									<h1 id="infos-single">
										Infos sur l'upload
									</h1>
									</div>
								</div>
							</div>
						<span><b class="attribut">Titre original :</b> <?php echo get_post_meta($post->ID, 'titre original', true);?></span><br>
						<span><b class="attribut">Réalisateur(s) :</b> <?php echo get_post_meta($post->ID, 'realisateur', true);?></span><br>
						<span><b class="attribut">Acteurs :</b> <?php echo get_post_meta($post->ID, 'acteurs', true);?></span><br>
						<span><b class="attribut">Année de sortie :</b> <?php echo get_post_meta($post->ID, 'annee de sortie', true);?></span><br>
						<span><b class="attribut">Genre :</b> 
							<?php
							$category_detail=get_the_category($post->ID);//$post->ID
							foreach($category_detail as $cd){
								if($cd->parent==3){
									echo $cd->cat_name.' ( '.$cd->term_id.' ),';
									
								}
							}
							?>
						</span><br>
						<span><b class="attribut">Pays :</b> <?php echo get_post_meta($post->ID, 'pays', true);?></span><br>
						<span><b class="attribut">Note :</b>	<?php echo get_post_meta($post->ID, 'note', true);?>/5</span><br>
						<?php if($post->post_type=="films"){//c'est un film
							echo '<span><b class="attribut"> Taille :</b>'.get_post_meta($post->ID, 'taille', true).'</span><br>';
						}
						?>
						
						<?php if($post->post_type=="series"){//c'est une serie
							echo '<span><b class="attribut"> Taille par épisodes :</b>'.get_post_meta($post->ID, 'taille par episodes', true).'</span><br>';
						}
						?>
						<?php if($post->post_type=="films"){//c'est un film
							echo '<span><b class="attribut">Nom du fichier :</b>'.get_post_meta($post->ID, 'nom du fichier', true).'</span><br>';
						}
						?>
						<?php if($post->post_type=="series"){//c'est une serie
							echo '<span><b class="attribut">Nombre d\'episodes :</b>'.get_post_meta($post->ID, 'nombre episodes', true).'</span><br>';
						}
						?>
						<?php if($post->post_type=="series"){//c'est une serie
								echo '<span><b class="attribut">Saison :</b>'.get_post_meta($post->ID, 'saison', true).'</span><br>';
							}
							?>
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-9" >
									<button type="button" class="btn btn-info">Telecharger en ultra rapide</button>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col-7" >
									<h1 id="infos-single">
										Synopsis
									</h1>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col" >
										<?php echo get_post_meta($post->ID, 'synopsis', true);?>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col-5" >
									<h1 id="infos-single">
										Bande d'annonce
									</h1>
									</div>
								</div>
							
							</div>
						<a href="#" class="link-success">Cliquez ici pour visualiser la bande d'annonce</a>
						<h1 class="text-secondary ">Liens de télechargement</h1>
						<b>premium</b><br>
						<a href="#" class="link-success">télécharger</a><br>
						<b>1Fichier</b><br>
						<a href="#" class="link-success">télécharger</a><br>
						<b>Rapidgator</b><br>
						<a href="#" class="link-success">télécharger</a><br>
						<b>Uptobox</b><br>
						<a href="#" class="link-success">télécharger</a><br>
						<h1 class="text-secondary ">Liens de streaming</h1>
						<b>vidoza</b><br>
						<a href="#" class="link-success">Regarder</a><br>
						<b>Uptostream</b><br>
						<a href="#" class="link-success">Regarder</a><br>
						<b>Neto</b><br>
						<a href="#" class="link-success">Regarder</a><br>
					</div>
				<?php endwhile;?> 
			<?php else: ?>
				<p>Aucun résultat :(</p>						
			<?php endif; ?>
			<!--Fin boucle article-->
		</div>
    </div>	
		<!--content-->	
		
</div>
<?php get_template_part( 'footer' ); ?>