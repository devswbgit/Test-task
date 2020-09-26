<div class="archive-item">

    <div class="preview-image">
        <?php the_post_thumbnail('preview-image-size'); ?>
    </div>

    <div class="title-preview">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>

    <div class="excerpt-preview">
        <?php the_excerpt(); ?>
    </div>

    <div class="preview-link"><a href="<?php the_permalink(); ?>" class="btn-link">Read More</a></div>
    
</div>