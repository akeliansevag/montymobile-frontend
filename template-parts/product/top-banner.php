<?php
    $top_banner_image = get_field("product_top_banner_image");
?>
<div class="product-top-banner py-4 d-flex align-items-center">
    <?php if($top_banner_image):?>
        <img class="background-image" src="<?=$top_banner_image['sizes']['background'];?>" alt="">
    <?php endif;?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="p-banner-content">
                    <?php if(get_field("product_top_banner_title")):?>
                        <h1 class="fs-3 scramble fw-bold" data-text="<?=the_title()?>"></h1>
                    <?php else:?>
                        <h1 class="display-6 scramble fw-400" data-text="<?=the_title()?>"></h1>
                    <?php endif;?>
                    <?php if(get_field("product_top_banner_title") || get_field("product_top_banner_description")):?>
                        <div class="product-description">
                            <h2 class="display-6"><?=get_field("product_top_banner_title");?></h2>
                            <?=get_field("product_top_banner_description");?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
