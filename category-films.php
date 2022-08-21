<?php get_template_part( 'header' ); ?>

<div class="container-fluid" >
    <div class="row justify-content-between">
        <div class="col-lg-3 col-sm-0 col-md-4 cadre laterale">
            <?php get_template_part( 'sidebar' ); ?>
    
        </div>
        <div class="col-lg-9 col-sm-12 col-md-8 cadre">
            <h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                 <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg>
                Tout les films
            </h3>
            <?php get_template_part( 'filtre-films' ); ?><br><br>
            <?php get_template_part( 'liste-films' ); ?>
           
        </div>
    </div>	
		<!--content-->	
		
</div>
<?php get_template_part( 'footer' ); ?>