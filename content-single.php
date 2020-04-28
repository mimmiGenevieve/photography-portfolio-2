<?php
    /* The loop */
        if ( get_post_gallery() ) :
            $gallery = get_post_gallery( get_the_ID(), false );
            
            /* Loop through all the image and output them one by one */
            foreach( $gallery['src'] as $src ) : ?>
            <div class="image-container grid-item">
                 <a data-fslightbox="gallery" href="<?php echo $src; ?>"><img src="<?php echo $src; ?>" /></a>
            </div>
                <?php
            endforeach;
        endif;
?>