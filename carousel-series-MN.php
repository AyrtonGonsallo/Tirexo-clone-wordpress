<div class="container">
                        <div class="row">
                            <div class="splide5">
                                <div class="splide__track">
                                    <div class="splide__list">
                                        <?php //recuperer les dernieres series
                                        query_posts(array(
                                            'post_type'=> 'series',
                                            'orderby' => 'meta_value',
                                            'posts_per_page' => 10,
                                            'meta_key' => 'note'
                                            ));
                                            ?>
                                        <?php if ( have_posts() ) :?>
                                            <?php while ( have_posts() ) : 
                                                the_post(); 
                                                $image = get_field('image');
                                                $lien=get_permalink();
                                                $note=get_post_meta($post->ID, 'note', true);
                                                if( !empty( $image ) ){
                                                    echo '<div class="col-sm-3 splide__slide m-2">
                                                            <div title="'.get_post_meta($post->ID, 'titre original', true).
                                                            '" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="'.
                                                            substr(get_post_meta($post->ID, 'synopsis', true),0,150).'..."><a href="'.$lien.'" class="link-white">
                                                                <img class="image card-img" src="'.esc_url($image['url']).
                                                        '" width="100%" heigth="auto"  alt="...">
                                                        <div class="card-img-overlay">
                                                    <span class="badge bg-danger">'.get_post_meta($post->ID, 'annee de sortie', true).'</span>
                                                    </div>
                                                        <br>'.
                                                         get_post_meta($post->ID, 'titre original', true).'<br>';
                                                         for($i=1;$i<=$note;$i++){
                                                            echo '<i class="bi bi-star-fill etoile"></i>';
                                                            
                                                         }if(str_contains($note, '.')){//il n'est pas entier
                                                                echo '<i class="bi bi-star-half etoile"></i>';
                                                            }
                                                         for($i=$note+1;$i<=5;$i++){
                                                            echo '<i class="bi bi-star "></i>';
                                                         }
                                                         echo $note.' / 5<br>';

                                                         echo 'Saison '.get_post_meta($post->ID, 'saison', true);
                                                                echo '</b><b class="text-bc"> ('.
                                                                explode(",", get_post_meta($post->ID, 'qualité', true))[0].
                                                                ')</b>
                                                                </div>
                                                            </div>';
                                                    //echo esc_url($image['url']);
                                                }
                                                echo '<br>';
                                            endwhile; else: ?>
                                            <p>Aucun résultat :(</p>
                                            
                                        <?php endif; wp_reset_query();?>
                                        <!--Fin boucle films-->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>