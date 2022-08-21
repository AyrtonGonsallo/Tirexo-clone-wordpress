<div class="container">
    <div class="row justify-content-between">
                            
        <?php //recuperer les dernieres series
        if(isset($_GET['page'])){
            $paged=$_GET['page'];
        }else{
            $paged=1;
        }
        query_posts(array(
            'post_type'=> 'series',
            'orderby' => 'meta_value',
            'meta_key' => 'annee de sortie',
            'paged'          => $paged,
            'posts_per_page' => 5,
            ));
            ?>
        <?php if ( have_posts() ) :?>
            <?php while ( have_posts() ) : 
                the_post(); 
                $image = get_field('image');
                $lien=get_permalink();
                $note=get_post_meta($post->ID, 'note', true);
                if( !empty( $image ) ){
                    echo '<div class="col-sm-6 col-lg-3 col-md-4 col">
                            <div title="'.get_post_meta($post->ID, 'titre original', true).
                            '" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="'.
                            substr(get_post_meta($post->ID, 'synopsis', true),0,150).'..."><a href="'.$lien.'" class="link-white">
                                <img class="image-liste card-img" src="'.esc_url($image['url']).
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
                
            endwhile; else: ?>
            <p>Aucun résultat :(</p>
            
        <?php endif; wp_reset_query();?>
        <!--Fin boucle films-->
                                        
                                    
    </div>
    <div class="row justify-content-center">
        <div class="col-3"><br><br>
            <nav aria-label="...">
                <ul class="pagination pagination-sm">
                    <li class="page-item active" aria-current="page">
                    <span class="page-link">1</span>
                    </li>
                    <?php $total = ceil(wp_count_posts( 'series' )->publish/5);
                    for($i=2;$i<=$total;$i++){
                        echo '<li class="page-item"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
                        
                        }
                        
                       
                        ?>
                </ul>
            </nav>
        </div>
    </div>
</div>