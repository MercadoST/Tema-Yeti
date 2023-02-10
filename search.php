<?php get_header() ?>

<div class="row my-5">
    <!-- #Busquedas -->
    <div class="col-12 col-md-9">
        <h3 class="bg-primary text-white py-3 mb-5 text-center">Resultado de búsqueda</h3>

        <!-- #Entrada -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="card-body mb-5">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                </div>
        <?php endwhile; ?>
        <?php else: ?>

            <h5>No se encontro el termino: 
                <?php printf(esc_html('%s'), get_search_query()); ?>
            </h5>
            <?php get_search_form();?>

        <?php endif; ?>

        <!-- #Entrada -->

        <!-- #Paginacion-->
        <div class="card-body my-5 d-flex justify-content-center">
            <?php get_template_part('template-parts/content', 'paginacion'); ?>
        </div>

        <!-- #Paginacion-->
    </div>
    <!-- #Fin-Busquedas -->
    <!-- #Aside-->
    <?php get_sidebar(); ?>
    <!-- #Fin-Aside-->
</div>
<!-- #fin-blog -->

<?php get_footer() ?>