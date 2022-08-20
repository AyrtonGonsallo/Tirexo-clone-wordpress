<?php get_template_part( 'header' ); ?>

<div class="container-fluid" >
    <div class="row justify-content-between">
        <div class="col-lg-3 col-sm-0 col-md-4 cadre laterale">
            <?php get_template_part( 'sidebar' ); ?>
    
        </div>
        <div class="col-lg-9 col-sm-12 col-md-8 cadre">
            <h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                    <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                </svg>
                Derniers films ajoutés
            </h3>
            <?php //recuperer les films
            query_posts(array(
                'post_type'=> 'films',
                ));
                ?>



                <?php if ( have_posts() ) :?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="billet">
                    
                        <a href="<?php the_permalink() ?>" title="titre"><?php the_post_thumbnail('thumbnail')?></a>
                                                    
                        <div class="extrait">
                            <h3><a href="<?php the_permalink(); ?>" title="#"><?php the_title(); ?></a></h3>
                            <p class="small">Le <?php the_time('j F, Y'); ?> - nombre de commentaire : <?php echo($post->comment_count) ?></p>								
                            <?php the_content('Lire la suite'); ?>
                        </div><!--extrait-->
                    
                        
                        </div><!--billet-->
                    
                    <?php endwhile; else: ?>
                    <p>Aucun résultat :(</p>
                    
                <?php endif; ?>
                <!--Fin boucle films-->
                <!--recuperer les series-->
                <h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                    <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                </svg>
                Dernieres séries ajoutées
            </h3>
            <?php //recuperer les series
            query_posts(array(
                'post_type'=> 'series',
                ));
                ?>



                <?php if ( have_posts() ) :?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="billet">
                    
                        <a href="<?php the_permalink() ?>" title="titre"><?php the_post_thumbnail('thumbnail')?></a>
                                                    
                        <div class="extrait">
                            <h3><a href="<?php the_permalink(); ?>" title="#"><?php the_title(); ?></a></h3>
                            <p class="small">Le <?php the_time('j F, Y'); ?> - nombre de commentaire : <?php echo($post->comment_count) ?></p>								
                            <?php the_content('Lire la suite'); ?>
                        </div><!--extrait-->
                    
                        
                        </div><!--billet-->
                    
                    <?php endwhile; else: ?>
                    <p>Aucun résultat :(</p>
                    
                <?php endif; ?>
                <!--Fin boucle series-->

                <!--carousel-->
                    <div class="container">
                        <div class="row">
                            <div class="splide">
                                <div class="splide__track">
                                    <div class="splide__list">
                                        <div class="col-sm-3 splide__slide m-2">
                                            <div >
                                                
                                                    <img class="image" src="https://www.tirexo.blue/img/series/806d582177da7a34a843f5853f3e92d8.jpg" width="100%" heigth="auto"  alt="...">  
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-3 splide__slide m-2">
                                            <div >
                                                
                                                    <img class="image" src="https://www.tirexo.blue/img/series/a20445305f69c16c4f5f5cd6260677f1.jpg" width="100%" heigth="auto"  alt="...">   
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-3 splide__slide m-2">
                                            <div >
                                                
                                                    <img class="image" src="https://www.tirexo.blue/img/series/e72370bdf7eee5001ec23f3b304ba0b0.jpg" width="100%" heigth="auto"  alt="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 splide__slide m-2">
                                            <div >
                                                
                                                    <img class="image" src="https://www.tirexo.blue/img/series/3ce647004ec16e709282084fd0b00b57.jpg" width="100%" heigth="auto"  alt="...">
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-3 splide__slide m-2">
                                            <div >
                                                
                                                    <img class="image" src="https://www.tirexo.blue/img/series/bdb94b8285c4fe9e19d643ec509fdbd4.jpg" width="100%" heigth="auto"  alt="...">
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-3 splide__slide m-2">
                                            <div>
                                                
                                                    <img class="image" src="https://www.tirexo.blue/img/series/1e18f8c0f32251a6812a2a4195a7c65e.jpg" width="100%" heigth="auto"  alt="...">
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    





                <!--fin carousel-->
           
        </div>
    </div>	
		<!--content-->	
		
</div>
<?php get_template_part( 'footer' ); ?>