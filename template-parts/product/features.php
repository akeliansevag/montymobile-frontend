<?php 
    $title = get_field("product_info_features_title");
    $description = get_field("product_info_features_description");
    $features = get_field("product_info_features");
?>

<?php if($features):?>    
    <section>
        <?php if($title || $description):?>
            <div class="product-features-header bg-white pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2 class="fw-bold"><?=$title;?></h2>
                            <p><?=$description;?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        <?php endif;?>
        <div class="product-features">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="features-text container-margin" id="features-text-slider" data-slide-count="<?=count($features);?>">
                            <?php foreach($features as $ft):?> 
                                <div>
                                    <div class="feature-title">
                                        <div class="bullet-point"></div>
                                        <div>
                                            <p class="mb-0 h4"><?=$ft['title'];?></p>
                                            <h5><?=$ft['description']?></h5>
                                        </div>  
                                        
                                    </div>
                                    
                                    
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="col-md-7 bg-pink">
                        <div class="features-image" id="features-image-slider">
                            <?php foreach($features as $ft2):?>
                                <div class="feature-item">
                                    <div class="feature-content py-5 px-3">
                                        <?php if($ft2['inner_description'] || $ft2['inner_points']):?>
                                            <div class="feature-inner">
                                                <?php if($ft2['inner_description']):?>
                                                <div class="inner-description">
                                                    <p><?=$ft2['inner_description'];?></p>
                                                </div>
                                                <?php endif;?>
                                                <?php if($ft2['inner_points']):?>
                                                    <div class="inner-points">
                                                        <?=$ft2['inner_points']?>
                                                    </div>
                                                <?php endif;?>
                                            </div>
                                        <?php endif;?>
                                        <?php if($ft2['image']):?>
                                            <div class="feature-image">
                                                <img src="<?=$ft2['image']['url']?>" alt="">
                                            </div>
                                        <?php endif;?>
                                    </div>  
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>
