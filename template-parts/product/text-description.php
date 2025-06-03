<?php 
    $big_title = get_field("product_info_text_description_title");
    $description = get_field("product_info_text_description_description");
    $bg_color = get_field("product_info_text_description_background_color");
?>

<?php if($big_title && $description):?>
    <section class="product-info py-5 bg-gray" style="<?= $bg_color ? "background-color:".$bg_color.";" : ""?>">
        <div class="container"> 
            <div class="product-info-top my-2 my-md-5">
                <div class="row align-items-center pb-3">
                    <?php if($big_title):?>
                        <div class="col-md-6">
                            <h2 class="display-6">
                                <?= $big_title;?>
                            </h2>
                        </div>
                    <?php endif;?>
                    
                    <div class="col-md-1"></div>
                    <?php if($description):?>
                        <div class="col-md-5">
                            <p>
                                <?=$description;?>
                            </p>
                        </div>
                    <?php endif;?>
                    
                </div>
               
                
            </div>
        </div>
        
    </section>
<?php endif;?>

