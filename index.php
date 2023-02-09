<?php get_header() ?>

<div class="row my-5">
    <!-- #Entradas -->
    <div class="col-12 col-md-9">
        <!-- #Entrada -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="card-body mb-5">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
                    <p class="small mb-0">Autor: <?php the_author(); ?></p>
                    <p class="small"> Categorias: <?php the_category(' / '); ?> - Etiquetas: <?php the_tags('', ' / ', ''); ?> </p>

                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid my-3' ));
                    } ?>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Mas info...</a>

                    <hr>
                </div>
        <?php endwhile; endif; ?>

        <!-- #Entrada -->

        <!-- #Paginacion-->
        <div class="card-body my-5 d-flex justify-content-center">
            <?php get_template_part('template-parts/content', 'paginacion'); ?>
        </div>

        <!-- #Paginacion-->
    </div>
    <!-- #Fin-Entradas -->
    <!-- #Aside-->
    <?php get_sidebar(); ?>
    <!-- #Fin-Aside-->
</div>
</div>
<!-- #fin-blog -->

<?php get_footer() ?>