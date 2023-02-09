<div class="col-12 col-md-3">
    <?php if (is_active_sidebar('widgets-derecha')) : ?>
        <?php dynamic_sidebar('widgets-derecha'); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>