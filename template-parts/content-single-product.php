<!-- POST -->
<article class="product-single">
    
    <?php global $product; ?>

    <div class="imagens col-6" style="float: left;">
        <div class="container d-flex justify-content-center">
            <section id="default" class="padding-top0">
                <div class="row">
                    <div class="aleatorio">
                        <div class="xzoom-container">  
                            <img class="xzoom" id="xzoom-default" src="<?= wp_get_attachment_url( $product->get_image_id() ); ?>" xoriginal="<?= $image_link ?>" />
                            <div class="xzoom-thumbs"> 

                                <?php $attachment_ids = $product->get_gallery_image_ids();

                                foreach( $attachment_ids as $attachment_id ) {
                                $image_link = wp_get_attachment_url( $attachment_id ); ?>

                                    <a href="">
                                        <img class="xzoom-gallery" width="80" src="<?= $image_link ?>" xpreview="<?= $image_link ?>">
                                    </a> 

                                <?php } ?>
                            </div>
                        </div>
                    </div>  
                </div>
            </section>
        </div>
    </div>

    <div class="conteudo col-6" style="float: left;">
        <div class="row">
            <span style="text-align: center;"><h2><?php the_title();?></h2></span>
        </div>
        <?php the_content(); ?>
    </div>
</div>
    <script>
        document.querySelector(".pointcomunicacao-message-out-of-stock").style.display = 'none'
        document.querySelector(".onsale").style.display = 'none'
    </script>
        
</article>
