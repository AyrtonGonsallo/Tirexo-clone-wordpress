<!DOCTYPE html>
<html lang="fr">
<head>

<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="bidulum..." />
<meta name="description" content="lorem ipsum.." />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/medias/favicon.ico" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/style.css?ver=<?php echo rand(111,999)?>" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
<!--[if gte IE 6]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/ie.css" media="screen" /><![endif]-->

<?php wp_enqueue_script('jquery');?>
<?php wp_head(); ?>


</head>

<body>

	<div id="wrapper">
	
        <div id="header">
            <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
            <div style="width:150px">
                <a href="<?php bloginfo('url'); ?>"><img width="37px" src="<?php bloginfo('template_url'); ?>/medias/logozt.png" alt="logo JoomAlsa" /></a>
                <span id="titre" ><?php bloginfo('name'); ?></span>
            </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Catégorie</option>
                        <?php
                        $categories = get_categories( array(
                            'orderby' => 'name',
                            'order'   => 'ASC',
                            'parent'  => 16,
                            "hide_empty" => 0,
                        ) );
                        
                        foreach( $categories as $category ) {
                            echo '<option value="'.$category->cat_name.'">'.$category->cat_name.'</option>';
                        }
                        ?>
                    </select>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
            </nav>
		</div><!--header-->	


        <!--seconde partie liste des derniers contenus-->	
		<h3>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
				<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
			</svg>
			Populaire en ce moment
        </h3>
        <div class="container">
                        <div class="row">
                            <div class="splide2">
                                <div class="splide__track">
                                    <div class="splide__list">
                                        <?php //recuperer les films
                                        query_posts(array(
                                            'post_type'=> 'films',
                                            'orderby' => 'meta_value',
                                            'meta_key' => 'note'
                                            ));
                                            ?>
                                        <?php if ( have_posts() ) :?>
                                            <?php while ( have_posts() ) : 
                                                the_post(); 
                                                $image = get_field('image');
                                                $note=get_post_meta($post->ID, 'note', true);
                                                if( !empty( $image ) ){
                                                    echo '<div class="col-sm-3 splide__slide m-2">
                                                            <div title="'.get_post_meta($post->ID, 'titre original', true).
                                                            '" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="'.
                                                            substr(get_post_meta($post->ID, 'synopsis', true),0,150).'...">
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
                                                         echo $note.' / 5';

                                                         echo '<br><b class="text-vc">'.
                                                         explode(",", get_post_meta($post->ID, 'qualité', true))[0].
                                                         '</b><b class="text-bc">('.
                                                         get_post_meta($post->ID, 'langue', true).
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

                
        
		-----------