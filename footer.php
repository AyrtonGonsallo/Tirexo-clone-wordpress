--------------------------
<div class="container footer">
  <div class="row">
    <div class="col">
    <img src="<?php bloginfo('template_url'); ?>/medias/logozt.png" class="rounded mx-auto d-block" alt="logo" width="100%" heigth="auto">
    </div>
    <div class="col">
    <h3 class="text-secondary">ABOUT</h3>
        <ul class="list-group list-group-flush liste">
            <li class="list-group-item text-success bg-transparent">Aide</li>
            <li class="list-group-item text-success bg-transparent"> InformationsMMCA</li>
        </ul>
    </div>
    <div class="col">
    <h3 class="text-secondary">MENU</h3>
        <ul class="list-group list-group-flush liste">
            <li class="list-group-item text-success bg-transparent">Accueil</li>
            <li class="list-group-item text-primary bg-transparent">Films</li>
            <li class="list-group-item text-warning bg-transparent">Series</li>
            <li class="list-group-item text-danger bg-transparent">Animés</li>
            <li class="list-group-item text-warning bg-transparent">Musique</li>
            <li class="list-group-item text-danger bg-transparent">Jeux</li>
            <li class="list-group-item text-warning bg-transparent">EBooks</li>
            <li class="list-group-item text-primary bg-transparent">TV/DOCS</li>
            <li class="list-group-item text-success bg-transparent">Logiciels</li>
            <li class="list-group-item text-success bg-transparent">AppMobiles</li>
        </ul>
    </div>
    <div class="col">
        <h3 class="text-secondary">PARTOUT !</h3>
        <ul class="list-group list-group-flush liste">
            <li class="list-group-item text-secondary bg-transparent">Compatible Smart-TV.</li>
            <li class="list-group-item text-secondary bg-transparent"> Compatible tablet.</li>
            <li class="list-group-item text-secondary bg-transparent">Compatible mobile.</li>
        </ul>
    </div>
  </div>

<?php wp_footer() ?>	
<script>
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
            })
        </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
        <script>
            var splide = new Splide('.splide', {
                type: 'loop',
                perPage: 4,
                rewind: true,
                breakpoints: {
                    1200:{
                        perPage:2,
                    },
                    992:{
                        perPage:2,
                    },
                    640: {
                        perPage: 1,
                        
                        
                    }
                    
                },
            });
            splide.mount();
        </script>
        <script>
            var splide = new Splide('.splide2', {
                type: 'loop',
                perPage: 6,
                rewind: true,
                breakpoints: {
                    1200:{
                        perPage:4,
                    },
                    992:{
                        perPage:3,
                    },
                    640: {
                        perPage: 2,
                        
                        
                    }
                    
                },
            });
            splide.mount();
        </script>
        
</body>

</html>
