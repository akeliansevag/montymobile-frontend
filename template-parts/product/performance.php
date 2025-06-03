<?php 
    $items = get_field("product_info_performance_items");
    $bgColor = get_field("product_info_performance_background_color");
?>
<?php if($items):?>
    <section class="performance-section bg-gray py-5" style="<?=$bgColor ? "background-color:".$bgColor."" : ""?>">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="grid-info container-margin">
                        <h2 class="fw-bold"><?=get_field("product_info_performance_title")?></h2>
                        <?php if(get_field("product_info_performance_description")):?>
                            <p><?=get_field("product_info_performance_description");?></p>
                        <?php endif;?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="performance-items">
                        <?php foreach($items as $key=>$item):?>
                            <div class="performance-item">
                                <p class="h5"><?=$item['title']?></p>
                            </div>
                        <?php endforeach;?>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<?php endif;?>