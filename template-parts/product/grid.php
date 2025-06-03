<?php
    $gridItems = get_field("grid_items");
?>
<?php if($gridItems):?>
    <section class="grid-section bg-white py-5">
        <div class="grid-section-content">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="grid-info container-margin">
                            <h2 class="fw-bold"><?=get_field("product_info_grid_title")?></h2>
                            <p><?=get_field("product_info_grid_description");?></p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="grid-items">
                            <?php foreach($gridItems as $key=>$item):?>
                                <div class="grid-item">
                                    <p><?=$item['text']?></p>
                                </div>
                            <?php endforeach;?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> 
    </section>
<?php endif;?>