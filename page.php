<?php get_header() ?>

<div class="row my-5">
    <!-- #Entradas -->
    <div class="col-12">
        <!-- #Entrada -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="card-body">

                    <div class="card-body">
                        <h2><strong> <?php the_title(); ?> </strong></h2>
                        <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
                        <p class="small mb-0">Autor: <?php the_author(); ?></p>
                        <p class="small"> Categorias: <?php the_category(' / '); ?> - Etiquetas: <?php the_tags('', ' / ', ''); ?> </p>

                        <?php if (has_post_thumbnail()) {
                            echo '<div class="text-center">';
                            the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid my-3'));
                            echo '</div>';
                        } ?>
                        <?php the_excerpt(); ?>

                        <?php the_content() ?>

                    </div>  
                </div>
        <?php endwhile; endif; ?>
        <!-- #Entrada -->
    </div>
    <!-- #Fin-Entradas -->
</div>
<!-- #fin-blog -->

<footer class="container-fluid py-4 text-center text-light bg-dark ">
    <h5>Lorem ipsum dolor sit amet.</h5>
</footer>
<?php wp_footer(); ?>
</body>

</html>