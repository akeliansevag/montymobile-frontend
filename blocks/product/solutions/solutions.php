<?php 
    $items = get_field("block_product_solutions_items");
    $title = get_field("block_product_solutions_title");
    $bg = get_field("block_product_solutions_background_image");
    $backgroundColor = get_field("block_background_color");
?>
<?php if($items):?>
    <section class="solutions-section position-relative py-5" style="<?=$backgroundColor ? "background-color:".$backgroundColor.";" : ""?>">
        <?php if($bg):?>
            <img src="<?=$bg['sizes']['background']?>" alt="" class="background-image">
        <?php endif;?>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="fw-bold"><?=$title;?></h2>
                </div>
                <div class="col-sm-8"></div>
            </div>
        </div>
        <div class="container">
            <div class="solution-items pt-3">
                <?php foreach($items as $key=>$item):?>
                    <div class="solution-item">
                        <div>
                            <?php if($item['icon']):?>
                                <img src="<?=$item['icon']['url'];?>" alt="">
                            <?php endif;?>
                            <h5 class="mb-0 mt-2 fw-normal"><?=$item['title'];?></h5>
                        </div> 
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php endif;?>