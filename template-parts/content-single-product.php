<?php 
    global $product; 
    global $attachment_ids;

    // titulo do produto
    $title_product = $product->get_title();
    // produto único
    $id_product = $product->get_id();
    // descrição maior
    $description_product = $product->get_description();
    // descrição menor
    $short_desc_product = $product->get_short_description();
    // array contendo ids das imagens na galeria
    global $attachment_ids;
    $attachment_ids = $product->get_gallery_image_ids();
    // imagem do produto
    $image_product = wp_get_attachment_url( $product->get_image_id() );

    $youtube = get_post_meta($post->ID, 'youtube', true) ? get_post_meta($post->ID, 'youtube', true) : '';

    $categories = $product->get_categories();

    #$downloads = $product->get_downloads();

    $downloads = $product->get_downloads();

    $product_cats = wp_get_post_terms( $product->id, 'product_cat' );
    
    // echo "<pre>";
    // print_r($product_cats);
    // die;

?>
<!-- POST -->
<article class="product-single">
    
    <?php global $product; ?>

    <div class="imagens col-xl-6 col-12" style="float: left;">
        <div class="row">

            <img src="<?= $image_product; ?>"/>

                <?php       
                    foreach( $attachment_ids as $key => $image_id ){ 

                        echo '<a href="' . wp_get_attachment_url( $image_id ) . '"rel="lightbox[gallery-0]" data-lightbox-gallery="lightbox[gallery-0]">'; 
                        echo '<img class="img-gallery" src="'. wp_get_attachment_url( $image_id ).'" alt="Placeholder" width="300px" height="300px" />';
                        echo '</a>';
                    } 
                ?>
            
        </div>
    </div>

    
    <div class="conteudo col-xl-6 col-12" style="float:left; padding:0px 40px;">
        <div class="row">
            <h2 style="width:100%;"><?php the_title();?></h2>
            <div class="pricer col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

    <div class="row col-12" style="margin:0px;">
        <div class="description" id="descricao-produto">

        </div>
    </div>

    <div class="row col-12" style="margin:0px;">
        <div class="relacionados col-12" id="relacionados">

        </div>
    </div>

<script>
    const descriptionOld = document.getElementById("tab-description")
    const descriptionNew = document.getElementById("descricao-produto")
    descriptionNew.appendChild(descriptionOld)

    const relacionadosOld = document.querySelector(".up-sells.upsells")
    const relacionadosNew = document.getElementById("relacionados")
    relacionadosNew.appendChild(relacionadosOld)
</script>
